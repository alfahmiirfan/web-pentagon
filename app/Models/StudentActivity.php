<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class StudentActivity extends Model
{
    use HasUuids;

    /*
    | -----------------------------------------------------------------
    | Protected Variables
    | -----------------------------------------------------------------
    */

    protected $table = 'student_activities';

    protected $fillable = [
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
        'image' => 65535,
        'name' => 255,
    ];

    public const IMAGE_DIR = '/images/student-activities';
    public const IMAGE_MAX_SIZE = '5000';
}
