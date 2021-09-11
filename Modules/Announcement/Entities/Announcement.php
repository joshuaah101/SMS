<?php

namespace Modules\Announcement\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Announcement
 * @package Modules\Announcement\Entities
 *
 * @property mixed title
 * @property mixed slug
 * @property mixed description
 * @property mixed url
 * @property mixed class
 * @property bool active
 */
class Announcement extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Announcement\Database\factories\AnnouncementFactory::new();
    }
}
