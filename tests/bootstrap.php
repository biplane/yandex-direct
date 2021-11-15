<?php

declare(strict_types=1);

use Biplane\Tests\YandexDirect\FixHeadersListener;
use VCR\Request;
use VCR\VCR;
use VCR\VCRFactory;
use VCR\Videorecorder;

require_once __DIR__ . '/../vendor/autoload.php';

VCR::configure()
    ->setCassettePath(__DIR__ . '/fixtures/vcr')
    ->setMode(VCR::MODE_ONCE)
    ->setWhiteList(['src/Api/ApiSoapClient.php'])
    ->addRequestMatcher('headers', static function (Request $first, Request $second) {
        $filterHeaders = static function (array $headers) {
            unset($headers['Authorization'], $headers['Client-Login']);

            return array_filter($headers);
        };

        return $filterHeaders($first->getHeaders()) === $filterHeaders($second->getHeaders());
    });

$recorder = VCRFactory::get(Videorecorder::class);
assert($recorder instanceof Videorecorder);
$recorder->getEventDispatcher()->addSubscriber(new FixHeadersListener());

// Required for monkey patching (registration of hooks)
$recorder->turnOn();
$recorder->turnOff();
