<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'information';

    protected $fillable = [
        'description',
        'number',
        'image',
        'date',
        'name',
    ];

    protected $hidden = [];

    /*
    | -----------------------------------------------------------------
    | Public Variables
    | -----------------------------------------------------------------
    */

    public const MAX = [
        'description' => 65535,
        'image' => 65535,
        'name' => 255,
    ];

    public const IMAGE_DIR = '/images/informations';
    public const IMAGE_MAX_SIZE = '5000';
}
