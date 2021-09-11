<?php


namespace Modules\Exam\Repository;


use Modules\Core\Repository\CoreAbstract;
use Modules\Exam\Entities\Exam;

class ExamRepository extends CoreAbstract implements ExamInterface
{
    public function __construct(Exam $exam)
    {
        $this->model = $exam;
    }
}
