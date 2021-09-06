<?php

namespace Modules\Image\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SingleImage extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function single_imageable()
    {
        return $this->morphTo();
    }

    protected static function newFactory()
    {
        return \Modules\Image\Database\factories\SingleImageFactory::new();
    }
}
