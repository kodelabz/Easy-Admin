<?php


namespace EasyView\EasyView\Core\Builder;


use EasyView\EasyView\Core\Easy;
use EasyView\EasyView\Core\Repository;
use EasyView\EasyView\Core\Viewable\FormView;
use EasyView\EasyView\Core\Viewable\ListView;

class EasyViewBuilder implements Builder
{
    private Easy $easy;

    private Repository $repository;

    private string $prefix;

    public function __construct(  ){
        $this->reset();
    }

    public function reset()
    {
        $this->easy = new Easy();
    }


    function listView(): EasyViewBuilder
    {
        $listView = new ListView($this->prefix);

        $listView->setOpenFields(
            $this->repository->getOpenFields()
        );

        $this->easy->setListView(
            $listView
        );
        return $this;
    }

    function formView(): EasyViewBuilder
    {
        $formView = new FormView($this->prefix);

        $formView->fieldsBuilder(
            $this->repository->describe()
        );

        $this->easy->setFormView(
            $formView
        );
        return $this;
    }

    function repository(string $model): EasyViewBuilder
    {
        $this->repository = new Repository($model);
        $this->easy->setRepository($this->repository);

        return $this;
    }


    function prefix($prefix) : EasyViewBuilder
    {
        $this->prefix = $prefix;
        return $this;
    }


    public function build()
    {
        return $this->easy;
    }

}
