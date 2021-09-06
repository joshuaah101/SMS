<?php

namespace Modules\StdClass\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Department is only for SS level
 * it contains Science Art and Commercial as the default titles
 *
 * Class ClassDepartment
 * @package Modules\StdClass\Entities
 */
class ClassDepartment extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\StdClass\Database\factories\ClassDepartmentFactory::new();
    }
}
