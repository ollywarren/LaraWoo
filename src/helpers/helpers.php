<?php
if (!function_exists('larawoo')) {
    /**
     * Get the Larawoo
     *
     * @return \Ollywarren\Larawoo\LaraWooServiceProvider
     */
    function larawoo()
    {
        return app('Larawoo');
    }
}