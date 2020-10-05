<?php


namespace EasyView\EasyView\Core\Builder;


use EasyView\EasyView\Core\Easy;
use EasyView\EasyView\Core\Viewable\FormView;

class Worker
{

    private Builder $builder;

    private string $model;

    private string $prefix;

    public function __construct(Builder  $builder){
        $this->builder = $builder;
    }

    function fromModel($model) : Worker {
        $this->model = $model;
        return $this;
    }

    function fromPrefix($prefix) : Worker{
        $this->prefix = $prefix;
        return $this;
    }

    public function generateStandard() : Easy {
        return $this->builder
                ->repository($this->model)
                ->prefix($this->prefix)
                ->formView()
                ->listView()
                ->build();
    }

}
