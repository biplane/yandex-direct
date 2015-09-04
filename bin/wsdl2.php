<?php

require __DIR__ . '/../vendor/autoload.php';

use Biplane\Wsdl2Php\Config;
use Biplane\Wsdl2Php\Generator;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;

$definition = new InputDefinition(array(
    new InputArgument('version', InputArgument::OPTIONAL, 'Version of API')
));

$argv = new ArgvInput(null, $definition);

$generator = new Generator();

if ($argv->getArgument('version') == '4') {
    $generator->generate(
        new Config(array(
            'inputFile'         => 'https://api.direct.yandex.ru/live/v4/wsdl/',
            'outputDir'         => __DIR__ . '/../src/YandexDirect/Api/V4',
            'namespaceName'     => 'Biplane\YandexDirect\Api\V4',
            'excludeTypes'      => array('PingAPI_XInfo', 'PingAPI_XStructInfo'),
            'excludeOperations' => array('PingAPI_X', 'PingAPI'),
            'fixApiNamespace'   => true,
        ))
    );
} else {
    echo '  Usage:' . PHP_EOL;
    echo '  php bin/wsdl2.php ' . $definition->getSynopsis() . PHP_EOL . PHP_EOL;
    echo '  <version> -- Version of API. (4 or 5)' . PHP_EOL;
}
