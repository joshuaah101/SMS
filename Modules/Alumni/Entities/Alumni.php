<?php

namespace Modules\Alumni\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumni extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Alumni\Database\factories\AlumniFactory::new();
    }
}
