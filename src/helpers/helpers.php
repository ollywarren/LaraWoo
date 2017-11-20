<?php
if (!function_exists('larawoo')) {
    /**
     * Get the Larawoo
     *
     * @return \Ollywarren\LaraWoo\LaraWooServiceProvider
     */
    function larawoo()
    {
        return app('LaraWoo');
    }
}