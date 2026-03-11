<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, HasRoles, HasUuids, Notifiable, SoftDeletes;

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'deleted_at' => 'datetime',
        ];
    }

    /**
     * Query users by either username or email.
     */
    public function scopeWhereLogin(Builder $query, string $login): Builder
    {
        return $query->where('username', $login)->orWhere('email', $login);
    }

    /**
     * Helper for auth flows that accept username or email in one field.
     */
    public static function findForLogin(string $login): ?self
    {
        return static::query()->whereLogin($login)->first();
    }

    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Organization::class, 'user_organizations', 'user_id', 'organization_id');
    }

    public function branches(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Branch::class, 'user_branches', 'user_id', 'branch_id');
    }
}
