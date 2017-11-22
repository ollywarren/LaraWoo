<?php
return [
    // Required Settings
    'url'                           => env('LARAWOO_URL', 'https://github.com'),
    'consumer_key'                  => env('LARAWOO_CONSUMER_KEY', 'ABC123'),
    'consumer_secret'                => env('LARAWOO_CONSUMER_SECRET', 'ABC123'),

    // Optional Configuration
    'options_wp_api'                => env('LARAWOO_OPT_WPAPI', true),
    'options_wp_api_prefix'         => env('LARAWOO_OPT_WPAPI_PREFIX', ''),
    'options_version'               => env('LARAWOO_OPT_VERSION', 'v3'),
    'options_timeout'               => env('LARAWOO_OPT_TIMEOUT', 15),
    'options_follow_redirects'      => env('LARAWOO_OPT_REDIRECTS', 'v3'),
    'options_verify_ssl'            => env('LARAWOO_OPT_VERIFY_SSL', true),
    'options_query_string_auth'     => env('LARAWOO_OPT_QUERY_STRING_AUTH', false),
    'options_oauth_timestamp'       => env('LARAWOO_OPT_OAUTH_TIMESTAMP', 'time()'),
    'options_user_agent'            => env('LARAWOO_OPT_USER_AGENT', 'LaraWoo WooCommerce API Client-Laravel'),

];