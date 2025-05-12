<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class PTK extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'ptk';

    protected $fillable = [
        'description',
        'position',
        'image',
        'name',
        'job',
        'nip',
    ];

    protected $hidden = [];

    /*
    | -----------------------------------------------------------------
    | Public Variables
    | -----------------------------------------------------------------
    */

    public const MAX = [
        'description' => 65535,
        'position' => 255,
        'image' => 65535,
        'job' => 65535,
        'name' => 255,
        'nip' => 18,
    ];

    public const IMAGE_DIR = '/images/ptk';
    public const IMAGE_MAX_SIZE = '5000';
}
