<?php


namespace EasyView\EasyView\Core;


use EasyView\EasyView\Core\Viewable\FormView;
use EasyView\EasyView\Core\Viewable\ListView;
use EasyView\EasyView\Core\Viewable\MetaData;

class Easy
{
    protected $formView;
    protected $listView;
    protected $repository;

    /**
     * Easy constructor.
     * @param $formView
     * @param $listView
     * @param $repository
     */
    public function __construct(FormView $formView = null, ListView $listView = null, Repository $repository = null)
    {
        $this->formView = $formView;
        $this->listView = $listView;
        $this->repository = $repository;
    }


    public function setFormView(FormView  $formView){
        $this->formView = $formView;
    }

    public function setListView(ListView  $listView){
        $this->listView = $listView;
    }


    public function setRepository( $repository ){
        $this->repository = $repository;
    }

    public function getRepository(){
        return $this->repository;
    }



    public function listView(){
        $this->listView->setList(
            $this->repository->paginate(20)
        );
        return new MetaData($this->listView);
    }


    public function formView( $id = 0){
        if ($id !== 0)
            $this->formView->setEntity($this->repository->findById($id));

        return new MetaData($this->formView);
    }


}
