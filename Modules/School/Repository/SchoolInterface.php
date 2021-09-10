<?php


namespace Modules\School\Repository;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repository\CoreInterface;

interface SchoolInterface extends CoreInterface
{

    /**
     * Get All Schools Information
     *
     * @param array $with
     * @param array $where
     * @return Builder
     */
    public function get_schools($with = [], $where = []): Builder;


    /**
     * Show School Information
     * @param $slug
     * @param array $with
     * @param array $where
     * @return Builder
     */
    public function show_school($slug, array $with = [], $where = []): Builder;

}
