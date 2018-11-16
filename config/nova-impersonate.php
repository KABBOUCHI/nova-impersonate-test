<?php

return [
    /**
     * To inject the 'nova-impersonate::reverse' view in every route when impersonating
     */
    'enable_middleware' => true,
    /**
     * false (nova path), true or <url>
     */
    'redirect_back'     => true,
    /**
     * Redirect path
     */
    'redirect_to'       => '/',
    /**
     * Bind on key press to impersonate user in details page
     */
    'key_down'          => 'i',
    /**
     * Middleware used for nova-impersonate routes
     */
    'middleware'        => [
        /**
         * Middleware used for nova-impersonate routes
         */
        'base'  => 'web',
        /**
         * Extra middleware used for leave route
         */
        'leave' => 'auth',
    ],
];