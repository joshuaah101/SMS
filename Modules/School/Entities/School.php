<?php

namespace Modules\School\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Image\Entities\SingleImage;

class School extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function image()
    {
        return $this->morphOne(SingleImage::class, 'single_imageable');
    }

    protected static function newFactory()
    {
        return \Modules\School\Database\factories\SchoolFactory::new();
    }
}
