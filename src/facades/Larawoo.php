<?php

namespace Ollywarren\Larawoo\Facades;
use Illuminate\Support\Facades\Facade;

class Larawoo extends Facade {

    /**
     * getFacadeAccessor
     */
    protected static function getFacadeAccessor()
    {
        return 'Larawoo';
    }

}