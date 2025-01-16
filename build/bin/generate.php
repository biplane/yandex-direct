#!/usr/bin/env php
<?php

declare(strict_types=1);

namespace Biplane\Build;

use Biplane\Build\Wsdl2Php\Config;
use Biplane\Build\Wsdl2Php\Generator;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Wsdl2PhpGenerator\Xml\SchemaDocument;
use ReflectionProperty;

require dirname(__DIR__) . '/vendor/autoload.php';

$libSourceDir = dirname(__DIR__, 2) . '/src';

$logger = new Logger('build', [
    new StreamHandler('php://output'),
]);

$generator = new Generator();
$generator->setLogger($logger);

$defaultOptions = [
    'outputDir' => $libSourceDir . '/Api/V5',
    'namespaceName' => 'Biplane\YandexDirect\Api\V5',
];

function generate(Generator $generator, array $options)
{
    static $reflProp;

    if (null === $reflProp) {
        $reflProp = new ReflectionProperty(SchemaDocument::class, 'loadedUrls');
        $reflProp->setAccessible(true);
    }

    $reflProp->setValue(null, []);

    $generator->generate(new Config($options));
}

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.ru/live/v4/wsdl/',
    'outputDir' => $libSourceDir . '/Api/V4',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/adextensions?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get)(Request|Response)$#',
            '$1AdExtensions$2',
            $typeName
        );
    },
] + $defaultOptions);

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v501/adgroups?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/adimages?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/ads?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/agencyclients?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/audiencetargets?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Suspend|Resume|Get|SetBids)(Request|Response)$#',
            '$1AudienceTargets$2',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/bids?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/bidmodifiers?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/campaigns?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/changes?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/clients?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/dictionaries?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/dynamictextadtargets?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/feeds?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Update)(Request|Response)$#',
            '$1Feeds$2',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/keywordbids?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/keywords?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/keywordsresearch?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/leads?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/negativekeywordsharedsets?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Delete|Get|Update)(Request|Response)$#',
            '$1NegativeKeywordSharedSets$2',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/retargetinglists?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/sitelinks?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/smartadtargets?wsdl',
    'renameType' => function ($typeName) {
        if ($typeName === 'SetBidsItem') {
            return 'SmartAdTargetSetBidsItem';
        }

        if ($typeName === 'StringConditionOperatorEnum') {
            return 'SmartAdTargetStringConditionOperatorEnum';
        }

        return preg_replace(
            '#^(Add|Delete|Get|Resume|SetBids|Suspend|Update)(Request|Response)$#',
            '$1SmartAdTargets$2',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/strategies?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Add|Archive|Get|Unarchive|Update)(Request|Response)$#',
            '$1Strategies$2',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/turbopages?wsdl',
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
    'inputFile' => 'https://api.direct.yandex.com/v501/vcards?wsdl',
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

generate($generator, [
    'inputFile' => 'https://api.direct.yandex.com/v501/businesses?wsdl',
    'renameType' => function ($typeName) {
        return preg_replace(
            '#^(Get)(Request|Response)$#',
            '$1Businesses$2',
            $typeName
        );
    },
    'excludeTypes' => [
        'ArrayOfString',
        'ArrayOfInteger',
        'ArrayOfLong',
    ],
] + $defaultOptions);
