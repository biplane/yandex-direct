<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/')
    ->exclude(array('tests', 'vendor'));

return new Sami($iterator, array(
    'theme'                => 'enhanced',
    'title'                => 'BiplaneYandexDirectBundle API',
    'build_dir'            => __DIR__ . '/build/api',
    'cache_dir'            => __DIR__ . '/build/sami-cache',
    'default_opened_level' => 2,
));
