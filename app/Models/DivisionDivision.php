<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class DivisionDivision extends Model
{
    use HasUuids;

    protected $table = 'division_divisions';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'division_id',
        'sub_division_id',
    ];
}
