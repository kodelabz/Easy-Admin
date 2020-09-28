<?php

namespace EasyView\EasyView\Facades;

use Illuminate\Support\Facades\Facade;

class EasyView extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'easyview';
    }
}
