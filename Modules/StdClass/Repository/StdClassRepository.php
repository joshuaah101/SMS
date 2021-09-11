<?php


namespace Modules\StdClass\Repository;


use Modules\Core\Repository\CoreAbstract;
use Modules\Core\Repository\CoreInterface;
use Modules\StdClass\Entities\StdClass;

class StdClassRepository extends CoreAbstract implements StdClassInterface
{

    public function __construct(StdClass $class)
    {
        $this->model = $class;
    }
}
