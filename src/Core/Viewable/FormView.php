<?php
namespace EasyView\EasyView\Core\Viewable;



use EasyView\EasyView\Core\Configurators\Configurer;
use EasyView\EasyView\Core\Viewable\Components\FormBuilder;

class FormView extends View
{
    protected $fields;
    public $action;

    public function __construct(Configurer $configurer, string $routePrefix, string $viewPath = 'easyview::backend.pages.')
    {
        parent::__construct($configurer, $routePrefix, $viewPath);
        $this->fields = new FormBuilder($this->configuration->getRepository()->describe());
    }

    public function getFields()
    {
        return $this->fields->getFields();
    }


}
