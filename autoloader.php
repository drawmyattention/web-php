<?php

/**
 * Register the library auto-loader.
 *
 * New library classes should be stored in the 'lib' directory.
 */
spl_autoload_register(function ($class) {
    include __DIR__ . DIRECTORY_SEPARATOR . 'lib' .
        DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class). '.php';
});
