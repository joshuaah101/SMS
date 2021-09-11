<?php


namespace Modules\News\Repository;


use Modules\News\Entities\News;

class NewsRepository extends \Modules\Core\Repository\CoreAbstract implements NewsInterface
{

    public function __construct(News $news)
    {
        $this->model = $news;
    }
}
