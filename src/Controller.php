<?php


namespace EasyView\EasyView;


use EasyView\EasyView\Core\Builder\EasyViewBuilder;
use EasyView\EasyView\Core\Builder\Worker;
use EasyView\EasyView\Core\Configurators\Configurer;
use EasyView\EasyView\Core\Validator\ProcessFields;
use EasyView\EasyView\Core\Viewable\Wrapper\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $crud;
    protected $easy;
    protected $view;
    /**
     * @var Configurer
     * @deprecated
     */
    protected $configurer;

    protected Worker $easyConfiguration;

    public function __construct()
    {
        //get builder
        $this->easyConfiguration = new Worker(
            new EasyViewBuilder()
        );
        //configure builder
        $this->configure();
        //finally build easy object
        $this->easy = $this->easyConfiguration->generateStandard();
        $this->view = new View();
    }


    public function index()
    {
        $metaData = $this->easy->listView();
        return $this->view->of('list',compact("metaData"));
    }

    public function create()
    {
        $metaData = $this->easy->formView();
        return $this->view->of('form',compact("metaData"));
    }

    public function edit( $id )
    {
        $metaData = $this->easy->formView($id);
        return view('easyview::backend.pages.form',compact("metaData"));
    }

    public function show($id){
        return $this->easy->findById($id);
    }

    public function destroy($id)
    {
        $this->easy->getRepository()->delete($id);
        return response()->json([
            'action'=>'success',
            'message'=>__('Entity Has Been Removed')
        ]);
    }

    public function store(Request  $request){
        $data = ProcessFields::transform($request->all());

        $this->easy->getRepository()->save($data);
        return response()->json([
           'action'=>'success',
           'message'=>__('User Created'),
           'redirect'=>route($this->easy->formView()->view->getRoutePrefix('.index'))
        ]);
    }


    abstract function configure() : void;


}
