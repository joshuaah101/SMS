<?php


namespace Modules\Core\Repository;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

abstract class CoreAbstract implements CoreInterface
{

    protected $model;
    protected $per_page = 12;
    protected $page = 1;


    public function get_model($model = null): Model
    {
        if ($model) {
            return $this->model = $model;
        }
        return $this->model;
    }


    public function find_by_id($id, array $with = array(), array $where = array()): Builder
    {
        return $this->relationship($with)->where('id', $id)->where($where);
    }


    public function find_by_field($field, $value, $where = [], array $with = array()): Builder
    {
        return $this->relationship($with)->where($field, $value)->where($where);
    }


    public function store(array $values = array()): Model
    {
        return $this->model::firstOrCreate($values);
    }


    public function update($id, $where, $values)
    {
        return $this->model::where('id', $id)->where($where)->update($values);
    }


    public function destroy($id, $where)
    {
        return $this->model::where('id', $id)->where($where)->delete();
    }


    public function relationship($with)
    {
        return $this->model->with($with);
    }


    public function paginate_as($collection): LengthAwarePaginator
    {
        $offset = $collection->forPage($this->page, $this->per_page);
        $total = count($collection);
        return new LengthAwarePaginator($offset, $total, $this->per_page, Paginator::resolveCurrentPage(), ['path' => Paginator::resolveCurrentPath()]);
    }


    public function filter($variable): string
    {
        return filter_var(trim($variable), FILTER_SANITIZE_STRING);
    }


    public function get_all(array $with = array()): Builder
    {
        return $this->relationship($with);
    }
}
