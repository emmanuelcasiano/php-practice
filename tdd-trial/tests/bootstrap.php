<?php

require dirname(__DIR__) . '/lib/functions.php';

// require dirname(__DIR__) . '/src/Person.php';

spl_autoload_register(function ($class) {
    $file = dirname(__DIR__) . '/src/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
