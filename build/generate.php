#!/usr/bin/env php
<?php

namespace Biplane\Build;

require __DIR__ . '/../vendor/autoload.php';

use Biplane\Build\Wsdl2Php\Config;
use Biplane\Build\Wsdl2Php\Generator;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$logger = new Logger('build', [
    new StreamHandler('php://output'),
]);

$generator = new Generator();
$generator->setLogger($logger);

$defaultOptions = [
    'outputDir' => __DIR__ . '/../src/Api/V5',
    'namespaceName' => 'Biplane\YandexDirect\Api\V5',
];

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.ru/live/v4/wsdl/',
    'outputDir' => __DIR__ . '/../src/Api/V4',
    'namespaceName' => 'Biplane\YandexDirect\Api\V4',
    'excludeTypes' => [
        'PingAPI_XInfo',
        'PingAPI_XStructInfo',
        'AutoPriceInfo',
        'PhrasePriceInfo',
        'CampaignIDInfo',
        'CampaignInfo',
        'CampaignBidsInfo',
        'GetBannersInfo',
        'BannerInfo',
        'ShortCampaignInfo',
        'BannerPhrasesFilterRequestInfo',
        'GetChangesRequest',
        'GetChangesResponse',
        'KeywordRequest',
        'KeywordResponse',
        'GetCampaignsInfo',
        'CreateOfflineReportRequest',
        'OfflineReportInfo',
    ],
    'excludeOperations' => [
        'PingAPI_X',
        'PingAPI',
        'CreateOrUpdateCampaign',
        'GetCampaignsList',
        'GetCampaignsListFilter',
        'GetCampaignsParams',
        'GetCampaignParams',
        'DeleteCampaign',
        'ResumeCampaign',
        'StopCampaign',
        'ArchiveCampaign',
        'UnArchiveCampaign',
        'SetAutoPrice',
        'UpdatePrices',
        'CreateOrUpdateBanners',
        'GetBanners',
        'DeleteBanners',
        'ModerateBanners',
        'ResumeBanners',
        'StopBanners',
        'ArchiveBanners',
        'UnArchiveBanners',
        'GetBannerPhrases',
        'GetBannerPhrasesFilter',
        'Keyword',
        'GetChanges',
        'CreateOfflineReport',
        'DeleteOfflineReport',
        'GetOfflineReportList',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/adextensions?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get)(Request|Response)$#',
            '$1AdExtensions$2',
            $typeName
        );
    },
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/adgroups?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Update)(Request|Response)$#',
            '$1AdGroups$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/adimages?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get)(Request|Response)$#',
            '$1AdImages$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/ads?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Archive|Delete|Get|Moderate|Resume|Suspend|Unarchive|Update)(Request|Response)$#',
            '$1Ads$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/agencyclients?wsdl',
    'renameType' => function ($typeName) {
        if (false !== strpos($typeName, 'Notification')) {
            return preg_replace('#^Notification(Add|Get)?$#', 'Client$0', $typeName);
        }

        return preg_replace(
            '#^(Add|Get|Update)(Request|Response)$#',
            '$1AgencyClients$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/bids?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get|Set|SetAuto)(Request|Response)$#',
            '$1Bids$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/bidmodifiers?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Set|Toggle)(Request|Response)$#',
            '$1BidModifiers$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/campaigns?wsdl',
    'renameType' => function ($typeName) {
        if ('Notification' === $typeName) {
            return 'CampaignNotification';
        }

        return preg_replace(
            '#^(Add|Archive|Delete|Get|Resume|Suspend|Unarchive|Update)(Request|Response)$#',
            '$1Campaigns$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/changes?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Check)(Request|Response)$#',
            '$1Changes$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/clients?wsdl',
    'renameType' => function ($typeName) {
        if (false !== strpos($typeName, 'Notification')) {
            return preg_replace('#^Notification(Add|Get)?$#', 'Client$0', $typeName);
        }

        return preg_replace(
            '#^(Get|Update)(Request|Response)$#',
            '$1Clients$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/dictionaries?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get)(Request|Response)$#',
            '$1Dictionaries$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/dynamictextadtargets?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Suspend|Resume|Get|SetBids)(Request|Response)$#',
            '$1DynamicTextAdTargets$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/keywordbids?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get|Set)(Request|Response)$#',
            '$1KeywordBids$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/keywords?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Resume|Suspend|Update)(Request|Response)$#',
            '$1Keywords$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/keywordsresearch?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(HasSearchVolume)(Request|Response)$#',
            '$1Keywords$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/leads?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get)(Request|Response)$#',
            '$1Leads$2',
            $typeName
        );
    },
        'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/retargetinglists?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Update)(Request|Response)$#',
            '$1RetargetingLists$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/sitelinks?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get)(Request|Response)$#',
            '$1Sitelinks$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/turbopages?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get)(Request|Response)$#',
            '$1TurboPages$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v5/vcards?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get)(Request|Response)$#',
            '$1VCards$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);

function generate(Generator $generator, array $options)
{
    static $reflProp;

    if (null === $reflProp) {
        $reflProp = new \ReflectionProperty('Wsdl2PhpGenerator\Xml\SchemaDocument', 'loadedUrls');
        $reflProp->setAccessible(true);
    }

    $reflProp->setValue(null, []);

    $generator->generate(new Config($options));
}
