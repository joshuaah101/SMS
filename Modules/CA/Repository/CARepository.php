<?php


namespace Modules\CA\Repository;


use Modules\CA\Entities\CA;
use Modules\Core\Repository\CoreAbstract;

class CARepository extends CoreAbstract implements CAInterface
{

    public function __construct(CA $ca)
    {
        $this->model = $ca;
    }
}
