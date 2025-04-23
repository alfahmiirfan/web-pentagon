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
        'name' => 255,
    ];
}
