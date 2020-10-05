<?php
namespace EasyView\EasyView\Core\Viewable\Helpers;


use EasyView\EasyView\Core\Easy;
use EasyView\EasyView\Core\Viewable\Wrapper\View;

class FormHelper
{
    protected $easy;
    protected $view;

    public function __construct(Easy  $easy, View  $view){
        $this->easy = $easy;
        $this->view = $view;
    }

    public function getForm(){
        
    }


    public function field($field){
        return $this->view->of('easy.forms.field',compact("field"));
    }
}
