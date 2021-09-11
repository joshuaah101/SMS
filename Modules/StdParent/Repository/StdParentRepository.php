<?php


namespace Modules\StdParent\Repository;


use Modules\StdParent\Entities\StdParent;

class StdParentRepository extends \Modules\Core\Repository\CoreAbstract implements StdParentInterface
{
    public function __construct(StdParent $parent)
    {
        $this->model = $parent;
    }

}
