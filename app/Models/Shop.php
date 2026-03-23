<?php

namespace App\Models;

use App\Models\UserShop;
use App\Traits\UserLog;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use HasFactory, HasUuids, SoftDeletes, UserLog;

    protected $table = 'shops';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'instance_id',
    ];

    protected function casts(): array
    {
        return [
            'deleted_at' => 'datetime',
        ];
    }

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class, 'instance_id');
    }

    public function userShops(): HasMany
    {
        return $this->hasMany(UserShop::class, 'shop_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_shops', 'shop_id', 'user_id')
            ->withPivot(['id', 'created_by', 'updated_by', 'deleted_by']);
    }
}
