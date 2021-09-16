<?php


namespace Modules\Complaint\Repository;


use Modules\Complaint\Entities\Complaint;
use Modules\Core\Repository\CoreAbstract;

class ComplaintRepository extends CoreAbstract implements ComplaintInterface
{
    public function __construct(Complaint $complaint)
    {
        $this->model = $complaint;
    }

}
