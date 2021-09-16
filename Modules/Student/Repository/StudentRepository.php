<?php


namespace Modules\Student\Repository;


use Modules\Core\Repository\CoreAbstract;
use Modules\Student\Entities\Student;

class StudentRepository extends CoreAbstract implements StudentInterface
{
    public function __construct(Student $student)
    {
        $this->model = $student;
    }
}
