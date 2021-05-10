<?php


namespace Modules\Core\Repository;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

abstract class CoreAbstract implements CoreInterface
{
    protected $model;
    protected $per_page = 12;
    protected $page = 1;

    /**
     * @param null $model
     * @return mixed
     */
    public function get_model($model = null): Model
    {
        if ($model) {
            return $this->model = $model;
        }
        return $this->model;
    }

    /**
     * @param $id
     * @param array $with
     * @param array $where
     * @return Model
     */
    public function find_by_id($id, array $with = array(), array $where = array()): Model
    {
        return $this->relationship($with)->where('id', $id)->where($where);
    }

    /**
     * @param $field
     * @param $value
     * @param $where
     * @param array $with
     * @return mixed
     */
    public function find_by_field($field, $value, $where, array $with = array()): Model
    {
        return $this->relationship($with)::where($field, $value)->where($where);
    }


    /**
     * @param array $values
     * @return mixed
     */
    public function store(array $values = array()): Model
    {
        return $this->model::firstOrCreate($values);
    }

    /**
     * @param $id
     * @param $where
     * @param $values
     * @return mixed
     */
    public function update($id, $where, $values)
    {
        return $this->model::where('id', $id)->where($where)->update($values);
    }

    /**
     * @param $id
     * @param $where
     * @return mixed
     */
    public function destroy($id, $where)
    {
        return $this->model::where('id', $id)->where($where)->delete();
    }

    /**
     * @param $with
     * @return mixed
     */
    public function relationship($with)
    {
        return $this->model->with($with);
    }

    /**
     * @param $collection
     * @return LengthAwarePaginator
     */
    public function paginate_as($collection): LengthAwarePaginator
    {
        $offset = $collection->forPage($this->page, $this->per_page);
        $total = count($collection);
        return new LengthAwarePaginator($offset, $total, $this->per_page, Paginator::resolveCurrentPage(), ['path' => Paginator::resolveCurrentPath()]);
    }

    /**
     * Filer incoming string value
     * @param $variable
     * @return mixed
     */
    public function filter($variable): string
    {
        return filter_var(trim($variable), FILTER_SANITIZE_STRING);
    }

    /**
     * @param array $with
     * @return mixed
     */
    public function all(array $with = array())
    {
        $query = $this->relation($with);
        return $query->get();
    }
}
