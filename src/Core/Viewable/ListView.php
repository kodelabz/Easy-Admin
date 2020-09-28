<?php
namespace EasyView\EasyView\Core\Viewable;



use EasyView\EasyView\Core\Configurators\Configurer;

class ListView extends View
{
    protected $headers;
    protected $body;
    protected $perPage = 10;


    public function __construct(Configurer $configurer, string $routePrefix, string $viewPath = 'easyview::backend.pages.')
    {
        parent::__construct($configurer, $routePrefix, $viewPath);
        $this->openFields = $this->configuration->getRepository()->getOpenFields();
    }

    public function headers(){
        return $this->openFields;
    }

    public function list(){
        return $this->configuration->getRepository()->paginate($this->perPage);
    }

}
