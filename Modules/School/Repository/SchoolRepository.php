<?php


namespace Modules\School\Repository;


use Illuminate\Database\Eloquent\Builder;
use Modules\Core\Repository\CoreAbstract;
use Modules\School\Entities\School;

class SchoolRepository extends CoreAbstract implements SchoolInterface
{

    public function __construct(School $school)
    {
        $this->model = $school;
    }

    /**
     * @inheritDoc
     */
    public function show_school($slug, array $with = [], $where = []): Builder
    {
        return $this->find_by_field('slug', $slug, $where, $with);
    }


    /**
     * @inheritdoc
     */
    public function get_schools($with = [], $where = []): Builder
    {
        return $this->get_all($with)->where($where);
    }
}
