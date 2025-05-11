<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'students';

    protected $fillable = [
        'birth_place',
        'birth_date',
        'address',
        'gender',
        'phone',
        'email',
        'dream',
        'motto',
        'image',
        'name',
        'nisn',
    ];

    protected $hidden = [];

    /*
    | -----------------------------------------------------------------
    | Public Variables
    | -----------------------------------------------------------------
    */

    public const MAX = [
        'birth_place' => 255,
        'address' => 255,
        'image' => 65535,
        'dream' => 255,
        'email' => 255,
        'motto' => 255,
        'phone' => 25,
        'name' => 255,
        'nisn' => 10,
    ];

    public const IMAGE_DIR = '/images/students';
    public const IMAGE_MAX_SIZE = '5000';

    // Gender enum values
    public const GENDER_MALE = 'laki-laki';
    public const GENDER_FEMALE = 'perempuan';

    /*
    | -----------------------------------------------------------------
    | Public Static Functions
    | -----------------------------------------------------------------
    */

    public function GetGenderValues(): array
    {
        return [
            self::GENDER_FEMALE,
            self::GENDER_MALE,
        ];
    }
}
