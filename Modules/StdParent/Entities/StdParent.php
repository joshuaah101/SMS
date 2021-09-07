<?php

namespace Modules\StdParent\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Modules\Image\Entities\SingleImage;

class StdParent extends Authenticatable
{
    use HasFactory, Notifiable,Billable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function image()
    {
        return $this->morphOne(SingleImage::class, 'single_imageable');
    }

    protected static function newFactory()
    {
        return \Modules\StdParent\Database\factories\StdParentFactory::new();
    }
}
