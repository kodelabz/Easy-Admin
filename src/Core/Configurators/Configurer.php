<?php
namespace EasyView\EasyView\Core\Configurators;


use EasyView\EasyView\Core\Repository;
use EasyView\EasyView\Core\Viewable\FormView;
use EasyView\EasyView\Core\Viewable\ListView;

class Configurer
{

    private $model;
    private $routePrefix;
    private $repository;

    public function __construct()
    {
    }

    public function fromModel(string $model){
        $this->model = $model;
        $this->repository = new Repository($model);
        return $this;
    }

    public function routePrefix(string $prefix){
        $this->routePrefix = $prefix;
        return $this;
    }

    public function getListView(){
        return new ListView($this,$this->routePrefix);
    }

    public function getFormView(){
        return new FormView($this,$this->routePrefix);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getRoutePrefix()
    {
        return $this->routePrefix;
    }

    /**
     * @return Repository
     */
    public function getRepository() : Repository
    {
        return $this->repository;
    }

}
