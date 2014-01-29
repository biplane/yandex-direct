<?php

if (file_exists($file = __DIR__ . '/../vendor/autoload.php')) {
    require_once $file;
} else {
    die(<<<'EOT'

You must set up the project dependencies, run the following commands:
wget http://getcomposer.org/composer.phar
php composer.phar install --dev


EOT
    );
}

spl_autoload_register(function($class) {
    if (0 === strpos($class, 'Biplane\\YandexDirectBundle\\')) {
        $path = __DIR__ . '/../' . implode('/', array_slice(explode('\\', $class), 2)) . '.php';
        if (!stream_resolve_include_path($path)) {
            return false;
        }
        require_once $path;

        return true;
    }
});