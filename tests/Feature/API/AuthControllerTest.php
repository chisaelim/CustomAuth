<?php

namespace Tests\Feature\API;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_login_with_username_and_receive_token(): void
    {
        $user = User::query()->create([
            'name' => 'Jane Doe',
            'username' => 'janedoe',
            'email' => 'jane@example.com',
            'password' => Hash::make('secret123'),
        ]);

        $response = $this->postJson('/api/login', [
            'login' => 'janedoe',
            'password' => 'secret123',
        ]);

        $response
            ->assertOk()
            ->assertJsonStructure([
                'token',
                'user' => [
                    'id',
                    'name',
                    'username',
                    'email',
                    'instance',
                ]
            ])
            ->assertJsonPath('user.id', $user->id)
            ->assertJsonPath('user.username', $user->username)
            ->assertJsonPath('user.instance', null);
    }

    public function test_user_can_login_with_email(): void
    {
        $user = User::query()->create([
            'name' => 'John Doe',
            'username' => 'johnny',
            'email' => 'john@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
        ]);

        $response = $this->postJson('/api/login', [
            'login' => 'john@example.com',
            'password' => 'secret123',
        ]);

        $response
            ->assertOk()
            ->assertJsonPath('user.id', $user->id)
            ->assertJsonPath('user.email', $user->email);
    }

    public function test_login_fails_with_invalid_credentials(): void
    {
        User::query()->create([
            'name' => 'Bad Login',
            'username' => 'badlogin',
            'email' => 'bad@login.test',
            'password' => Hash::make('secret123'),
        ]);

        $response = $this->postJson('/api/login', [
            'login' => 'badlogin',
            'password' => 'wrong-password',
        ]);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors('login');
    }

    public function test_login_fails_when_required_fields_are_missing(): void
    {
        $response = $this->postJson('/api/login', []);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors(['login', 'password']);
    }

    public function test_login_with_unverified_email_fails(): void
    {
        User::query()->create([
            'name' => 'Unverified User',
            'username' => 'unverified',
            'email' => 'unverified@example.com',
            'email_verified_at' => null,
            'password' => Hash::make('secret123'),
        ]);

        $response = $this->postJson('/api/login', [
            'login' => 'unverified@example.com',
            'password' => 'secret123',
        ]);

        $response
            ->assertUnprocessable()
            ->assertJsonValidationErrors('login');
    }

    public function test_user_can_verify_current_session(): void
    {
        $user = User::query()->create([
            'name' => 'Session User',
            'username' => 'sessionuser',
            'email' => 'session@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
        ]);

        $token = $user->createToken('test-verify')->plainTextToken;

        $response = $this
            ->withToken($token)
            ->getJson('/api/auth/verify');

        $response
            ->assertOk()
            ->assertJsonPath('id', $user->id)
            ->assertJsonPath('username', $user->username)
            ->assertJsonPath('instance', null);
    }

    public function test_verify_requires_authentication(): void
    {
        $this->getJson('/api/auth/verify')
            ->assertUnauthorized();
    }

    public function test_user_can_logout_current_token_only(): void
    {
        $user = User::query()->create([
            'name' => 'Logout User',
            'username' => 'logoutuser',
            'email' => 'logout@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
        ]);

        $currentToken = $user->createToken('current-device')->plainTextToken;
        $otherToken = $user->createToken('other-device')->plainTextToken;

        $response = $this
            ->withToken($currentToken)
            ->postJson('/api/auth/logout');

        $response
            ->assertOk()
            ->assertJsonPath('message', trans('auth.logged_out'));

        $currentTokenId = (int) explode('|', $currentToken, 2)[0];
        $otherTokenId = (int) explode('|', $otherToken, 2)[0];

        $this->assertDatabaseMissing('personal_access_tokens', [
            'id' => $currentTokenId,
            'tokenable_type' => User::class,
            'tokenable_id' => $user->id,
        ]);

        $this->assertDatabaseHas('personal_access_tokens', [
            'id' => $otherTokenId,
            'tokenable_type' => User::class,
            'tokenable_id' => $user->id,
        ]);
    }

    public function test_logout_requires_authentication(): void
    {
        $this->postJson('/api/auth/logout')
            ->assertUnauthorized();
    }
}
