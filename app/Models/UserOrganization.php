<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    use HasUuids;

    public $timestamps = false;

    protected $table = 'user_organizations';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'organization_id',
    ];
}
