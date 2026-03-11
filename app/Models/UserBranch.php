<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserBranch extends Model
{
    use HasUuids;

    public $timestamps = false;

    protected $table = 'user_branches';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'branch_id',
    ];
}
