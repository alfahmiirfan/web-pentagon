<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'alumnis';

    protected $fillable = [
        'description',
        'job_place',
        'position',
        'address',
        'status',
        'image',
        'phone',
        'name',
        'year',
    ];

    protected $hidden = [];

    /*
    | -----------------------------------------------------------------
    | Public Variables
    | -----------------------------------------------------------------
    */

    public const MAX = [
        'description' => 65535,
        'job_place' => 255,
        'position' => 255,
        'address' => 255,
        'image' => 65535,
        'status' => 255,
        'phone' => 25,
        'name' => 255,
        'year' => 4,
    ];

    public const IMAGE_DIR = '/images/alumnis';
    public const IMAGE_MAX_SIZE = '5000';
}
