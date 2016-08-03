<?php

/**
 * Milky - A PHP Framework
 *
 * @package  Milky
 * @author   Penoaks Publishing Co. <developer@penoaks.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Milky
// application without having installed a "real" web server software here.
if ( $uri !== '/' && file_exists( __DIR__ . $uri ) )
{
    return false;
}

require_once __DIR__ . '/index.php';