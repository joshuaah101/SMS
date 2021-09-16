<?php


namespace Modules\Staff\Repository;


use Modules\Core\Repository\CoreAbstract;
use Modules\Staff\Entities\Staff;

class StaffRepository extends CoreAbstract implements StaffInterface
{
    public function __construct(Staff $staff)
    {
        $this->model = $staff;
    }
}
