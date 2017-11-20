<?php

namespace Ollywarren\Larawoo\Facades;
use Illuminate\Support\Facades\Facade;

class Larawoo extends Facade {

    /**
     * getFacadeAccessor
     *
     * NOTE: MUST BE PAIRED WITH A SERVICE PROVIDER
     * TWEAK FACADE ACCESSOR TO MATCH THE SERVICE PROVIDER REGISTRATION.
     */
    protected static function getFacadeAccessor()
    {
        return 'Larawoo';
    }

}