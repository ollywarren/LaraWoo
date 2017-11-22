<?php

namespace Ollywarren\LaraWoo\Services;

use Automattic\WooCommerce\Client;
use BadMethodCallException;

/**
 * WooCommerce Service Class that 
 * wraps around the Automattic WooCOmmerce Base Class
 * exposing the same methods and atrributes.\DeepCopy\f002\A
 * 
 * @author Olly Warren
 * @version 1.0
 * @license MIT
 */
class WooCommerceService
{
	private $url;
	private $consumer_key;
    private $consumer_token;
    private $options;
    
    private $client;

    /**
     * Constructor.
     * Sets up the client class and its configuration
     */
	public function __construct()
	{
        // Required Settings
		$this->url              = config('larawoo.url');
        $this->consumer_key     = config('larawoo.consumer_key');
        $this->consumer_token   = config('larawoo.consumer_token');

        // Optional Settings
        $this->options = $this->setDefaultOptions();

        // Instantiate a New Client Class
		$this->client = new Client( 
            $this->url,
            $this->consumer_key,
            $this->consumer_token,
            $this->options
        );
	}

    /**
     * Magic Call Method
     * Looks for a method name on the client class and 
     * if found fires it.
     *
     * @param string $method
     * @param array $args
     * @return void
     */
	public function __call($method, $args) {
		if( is_callable([$this->client, $method]) ) {
			return call_user_func_array([$this->client, $method],$args);
		} else {
			throw new BadMethodCallException("Method $method does not exist on the WooCommerce Library");
		}
	}

    /**
     * Magic Getter.
     * Gets any attributes from the client Class
     *
     * @param String $property
     * @return void
     */
	public function __get($property) {
		if( property_exists($this->client, $property) ) {
			return $this->client->{$property};
		} else {
			throw new BadMethodCallException("Property $property does not exist on the WooCommerce Library");
		}
    }
    
    /**
     * Set the Default Options Array from the Config File
     *
     * @return Array
     * @author Olly Warren
     * @version 1.0
     * @license MIT
     */
    public function setDefaultOptions()
    {
        return [
            'wp_api'                => config('larawoo.options_wp_api'),
            'wp_api_prefix'         => config('larawoo.options_wp_api_prefix'),
            'version'               => config('larawoo.options_version'),
            'timeout'               => config('larawoo.options_timeout'),
            'follow_redirects'      => config('larawoo.options_follow_redirects'),
            'verify_ssl'            => config('larawoo.options_verify_ssl'),
            'query_string_auth'     => config('larawoo.options_query_string_auth'),
            'oauth_timestamp'       => config('larawoo.options_oauth_timestamp'),
            'user_agent'            => config('larawoo.options_user_agent'),
        ];
    }
}