<?php
namespace EasyView\EasyView\Core\Viewable;


use EasyView\EasyView\Core\Configurators\Configurer;

abstract class View
{
    protected $configuration;
    protected $routePrefix;
    protected $viewPath;
    protected $openFields;


    public function __construct(Configurer $configurer, string $routePrefix, string $viewPath = 'easyview::backend.pages.'){
        $this->configuration = $configurer;
        $this->routePrefix = $routePrefix;
        $this->viewPath = $viewPath;
    }

    /**
     * @return mixed
     */
    public function getRoutePrefix($prefix = '')
    {
        return $this->routePrefix.$prefix;
    }



}
