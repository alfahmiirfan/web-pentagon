<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'events';

    protected $fillable = [
        'description',
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

    /*
    | -----------------------------------------------------------------
    | Protected Functions
    | -----------------------------------------------------------------
    */

    /**
     * @return array
     */
    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
