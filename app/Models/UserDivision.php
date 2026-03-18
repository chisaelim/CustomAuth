<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserDivision extends Model
{
    use HasUuids;

    protected $table = 'user_divisions';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'division_id',
    ];
}
