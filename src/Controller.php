<?php


namespace EasyView\EasyView;


use EasyView\EasyView\Core\Configurators\Configurer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected $crud;
    protected $configurer;

    public function __construct()
    {
        $this->configurer = $this->configure();
    }

    public function index()
    {
        $list = $this->configurer->getListView();
        return view('easyview::backend.pages.list',compact("list"));
    }


    public function create()
    {
        $form = $this->configurer->getFormView();
        return view('easyview::backend.pages.form',compact("form"));
    }

    public function store(Request  $request){
        $data = $request->all();

        $this->configurer->getRepository()->save($data);

        return response()->json([
           'action'=>'success',
           'message'=>__('User Created')
        ]);
    }


    abstract function configure() : Configurer;


}
