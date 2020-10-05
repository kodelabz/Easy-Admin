<?php
namespace EasyView\EasyView\Core\Viewable;



use EasyView\EasyView\Core\Viewable\Components\FormBuilder;

class FormView extends View
{
    protected $fields;
    public $action;
    private $entity;

    public function __construct(string $routePrefix,  string $viewPath = 'easyview::backend.pages.')
    {
        parent::__construct($routePrefix, $viewPath);
    }

    public function fieldsBuilder( array $fields) {
        $this->fields = new FormBuilder($fields);
    }

    public function setEntity( $entity )
    {
        $this->entity = $entity;
    }

    public function entity(){
        return $this->entity;
    }

    public function getFields()
    {
        return $this->fields->getFields();
    }


}
