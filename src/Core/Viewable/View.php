<?php
namespace EasyView\EasyView\Core\Viewable;



abstract class View
{

    protected $routePrefix;
    protected $viewPath;
    protected $openFields;


    public function __construct(string $routePrefix,  string $viewPath = 'easyview::backend.pages.'){
        $this->routePrefix = $routePrefix;
        $this->viewPath = $viewPath;
    }

    /**
     * @param string $prefix
     * @return mixed
     */
    public function getRoutePrefix($prefix = '')
    {
        return $this->routePrefix.$prefix;
    }



}
