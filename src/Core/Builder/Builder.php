<?php


namespace EasyView\EasyView\Core\Builder;


use EasyView\EasyView\Core\Viewable\FormView;
use EasyView\EasyView\Core\Viewable\ListView;

interface Builder
{

    function prefix( $prefix ) : self;

    function listView() : self;

    function formView() : self;

    function repository(string $model) : self;

    function build() ;

}
