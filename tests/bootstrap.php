<?php

use Biplane\Tests\FixHeadersListener;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use VCR\Request;
use VCR\VCR;

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

VCR::turnOn();

/** @var EventDispatcherInterface $dispatcher */
$dispatcher = VCR::getEventDispatcher();
$dispatcher->addSubscriber(new FixHeadersListener());
