<?php


namespace EasyView\EasyView\Core\Viewable;


class MetaData
{
    public View $view;
    public array $variables;

    /**
     * MetaData constructor.
     * @param View $view
     * @param array $variables
     */
    public function __construct(View $view, array $variables = [] )
    {
        $this->view = $view;
        $this->variables = $variables;
    }


    public function with( ...$vars ){
        $this->variables = $vars;
    }

    public function view(){
        return $this->view;
    }


}
