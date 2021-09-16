<?php


namespace Modules\Subject\Repository;


use Modules\Core\Repository\CoreAbstract;
use Modules\Subject\Entities\Subject;

class SubjectRepository extends CoreAbstract implements SubjectInterface
{
    public function __construct(Subject $subject)
    {
        $this->model = $subject;
    }
}
