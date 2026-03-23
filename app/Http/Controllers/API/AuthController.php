<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Authenticate a user and return Sanctum token.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        $login = $credentials['login'];

        $user = User::findForLogin($login);

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'login' => [trans('auth.failed')],
            ]);
        }

        if ($user->email === $login && is_null($user->email_verified_at)) {
            throw ValidationException::withMessages([
                'login' => [trans('auth.unverified')],
            ]);
        }

        $token = $user->createToken('AUTH-TOKEN')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => UserResource::make($user->load('instance')),
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => trans('auth.logged_out')]);
    }

    public function verify(Request $request): JsonResponse
    {
        return response()->json(UserResource::make($request->user()->load('instance')));
    }
}
