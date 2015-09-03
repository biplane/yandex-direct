<?php

ini_set('xdebug.max_nesting_level', 1024);

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in(__DIR__ . '/../src');

return new Sami($iterator, array(
    'title'                => 'Yandex.Direct API',
    'build_dir'            => __DIR__ . '/api',
    'cache_dir'            => __DIR__ . '/sami-cache',
    'default_opened_level' => 2,
));
