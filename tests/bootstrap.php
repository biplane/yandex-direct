<?php

declare(strict_types=1);

use allejo\VCR\VCRCleaner;
use VCR\VCR;

require_once __DIR__ . '/../vendor/autoload.php';

VCR::configure()
    ->setCassettePath(__DIR__ . '/fixtures/vcr')
    ->setMode(VCR::MODE_ONCE)
    ->setWhiteList(['src/Soap/ApiSoapClient.php']);

VCRCleaner::enable([
    'request' => [
        'ignoreHeaders' => [
            'Authorization',
            'Client-Login',
        ],
        'bodyScrubbers' => [
            static function (?string $body): ?string {
                if ($body === null) {
                    return null;
                }

                return preg_replace('@(?<=<ns1:token>)([^<]+)(?=</ns1:token>)@iu', 'REDACTED', $body);
            },
        ],
    ],
    'response' => [
        'ignoreHeaders' => ['*'],
    ],
]);

// Required for monkey patching (registration of hooks)
VCR::turnOn();
VCR::turnOff();
