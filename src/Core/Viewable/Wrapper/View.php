<?php
namespace EasyView\EasyView\Core\Viewable\Wrapper;


class View
{


    protected $resources;
    protected $pagePrefix;
    private $variables = [];


    public function __construct($resources = 'easyview::backend.pages.'){
        $this->resources = $resources;
    }

    public function of($endpoint,$variables){
        $this->variables = $variables;
        return $this->generateView($endpoint);
    }

    private function generateView(string $endpoint){
        return view($this->resources.$endpoint,$this->variables);
    }

}
