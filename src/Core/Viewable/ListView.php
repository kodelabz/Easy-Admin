<?php
namespace EasyView\EasyView\Core\Viewable;



use EasyView\EasyView\Core\Configurators\Configurer;
use EasyView\EasyView\Core\Repository;

class ListView extends View
{
    protected $headers;
    protected $body;
    protected $perPage = 10;

    protected $list;


    public function __construct( string $routePrefix, string $viewPath = 'easyview::backend.pages.')
    {
        parent::__construct($routePrefix, $viewPath);
    }

    public function setList( $list ){
        $this->list = $list;
    }

    public function setOpenFields($openFields){
        $this->openFields = $openFields;
    }

    public function headers(){
        return $this->openFields;
    }

    public function list(){
        return $this->list;
    }

}
