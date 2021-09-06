<?php

namespace Modules\StdClass\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Register will keep record of all students in a class
 * and can be further updated to handle attendance
 *
 * Class ClassRegister
 * @package Modules\StdClass\Entities
 */
class ClassRegister extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\StdClass\Database\factories\ClassRegisterFactory::new();
    }
}
