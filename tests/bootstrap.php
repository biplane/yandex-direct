<?php

use VCR\VCR;

require_once __DIR__ . '/../vendor/autoload.php';

VCR::configure()
    ->setCassettePath(__DIR__ . '/fixtures/vcr')
    ->setMode(VCR::MODE_ONCE)
    ->setWhiteList([
        'src/Api/SoapClient.php',
    ]);
VCR::turnOn();
