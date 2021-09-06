<?php

namespace Modules\Image\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MultipleImage extends Model
{
    use HasFactory;

    protected $fillable = [];


    public function multiple_imageable()
    {
        return $this->morphTo();
    }


    protected static function newFactory()
    {
        return \Modules\Image\Database\factories\MultipleImageFactory::new();
    }
}
