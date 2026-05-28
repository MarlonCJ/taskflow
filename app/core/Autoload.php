<?php

class Autoload
{
    public function __construct()
    {
        spl_autoload_register([$this, 'loadClass']);
    }

    private function loadClass($class)
    {
        $paths = [
            BASE_PATH . '/app/controllers/',
            BASE_PATH . '/app/models/',
            BASE_PATH . '/app/core/',
        ];

        foreach ($paths as $path) {

            $file = $path . $class . '.php';

            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
}