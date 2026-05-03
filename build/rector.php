<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/../src/Api/V4',
        __DIR__ . '/../src/Api/V5',
    ])
    ->withCache(__DIR__ . '/.cache/rector')
    ->withDowngradeSets(php83: true)
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0)
    ->withRules([
        AddOverrideAttributeToOverriddenMethodsRector::class,
    ]);
