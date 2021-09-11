<?php


namespace Modules\Announcement\Repository;


use Modules\Announcement\Entities\Announcement;

class AnnouncementRepository extends \Modules\Core\Repository\CoreAbstract implements AnnouncementInterface
{

    public function __construct(Announcement $announcement)
    {
        $this->model = $announcement;
    }
}
