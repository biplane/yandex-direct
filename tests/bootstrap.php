<?php

use Biplane\Tests\FixHeadersListener;
use VCR\Request;
use VCR\VCR;
use VCR\VCRFactory;
use VCR\Videorecorder;

require_once __DIR__ . '/../vendor/autoload.php';

VCR::configure()
    ->setCassettePath(__DIR__ . '/fixtures/vcr')
    ->setMode(VCR::MODE_ONCE)
    ->setWhiteList([
        'src/Api/SoapClient.php',
    ])
    ->addRequestMatcher('headers', function (Request $first, Request $second) {
        $filterHeaders = function (array $headers) {
            unset($headers['Authorization'], $headers['Client-Login']);

            return array_filter($headers);
        };

        return $filterHeaders($first->getHeaders()) === $filterHeaders($second->getHeaders());
    });

/** @var Videorecorder $recorder */
$recorder = VCRFactory::get(Videorecorder::class);
$recorder->getEventDispatcher()->addSubscriber(new FixHeadersListener());

$recorder->turnOn();
