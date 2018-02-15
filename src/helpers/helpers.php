<?php
if ( ! function_exists('larawoo') ) {
    /**
     * Get the LaraWoo Service Instance
     * @return \Ollywarren\Larawoo\LaraWooServiceProvider
     */
    function larawoo()
    {
        return app('Larawoo');
    }
}