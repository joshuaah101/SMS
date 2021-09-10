<?php


namespace Modules\Core\Repository;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface CoreInterface
{
    /**
     * @param null $model
     * @return mixed
     */
    public function get_model($model = null): Model;

    /**
     * @param $id
     * @param array $with
     * @param array $where
     * @return Builder
     */
    public function find_by_id($id, array $with = array(), array $where = array()): Builder;

    /**
     * @param $field
     * @param $value
     * @param $where
     * @param array $with
     * @return mixed
     */
    public function find_by_field($field, $value, $where, array $with = array()): Builder;

    /**
     * @param array $values
     * @return mixed
     */
    public function store(array $values = array()): Model;

    /**
     * @param $id
     * @param $where
     * @param $values
     * @return mixed
     */
    public function update($id, $where, $values);

    /**
     * @param $id
     * @param $where
     * @return mixed
     */
    public function destroy($id, $where);

    /**
     * @param $with
     * @return mixed
     */
    public function relationship($with);


    /**
     * @param $collection
     * @return LengthAwarePaginator
     */
    public function paginate_as($collection): LengthAwarePaginator;

    /**
     * Filer incoming string value
     * @param $variable
     * @return mixed
     */
    public function filter($variable): string;

    /**
     * @param array $with
     * @return mixed
     */
    public function get_all(array $with = array());
}
