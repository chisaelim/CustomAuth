<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $table = 'divisions';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'rank',
    ];

    protected function casts(): array
    {
        return [
            'deleted_at' => 'datetime',
        ];
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(\App\Models\User::class, 'user_divisions', 'division_id', 'user_id');
    }

    public function main_division(): BelongsToMany
    {
        return $this->belongsToMany(self::class, 'division_divisions', 'sub_division_id', 'main_division_id');
    }

    public function sub_divisions(): HasManyThrough
    {
        return $this->hasManyThrough(
            self::class,
            DivisionDivision::class,
            'main_division_id', // Foreign key on the division_divisions table...
            'id', // Foreign key on the divisions table...
            'id', // Local key on the divisions table...
            'sub_division_id' // Local key on the division_divisions table...
        );
    }
}
