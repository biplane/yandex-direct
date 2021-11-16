# Yandex.Direct API PHP Client

[![Package version](https://img.shields.io/packagist/v/biplane/yandex-direct?style=flat-square)](https://packagist.org/packages/biplane/yandex-direct)
[![Travis](https://img.shields.io/travis/com/biplane/yandex-direct?style=flat-square)](https://travis-ci.com/github/biplane/yandex-direct)
[![License](https://img.shields.io/packagist/l/biplane/yandex-direct?style=flat-square)](LICENSE)

PHP library for [Yandex.Direct API](https://tech.yandex.ru/direct/).

## Requirements

 * PHP >= 7.1
 * ext-soap

## Installation

You may install this library via [Composer](https://getcomposer.org/).

```bash
$ composer require biplane/yandex-direct
```

## Basic usage

```php
<?php

use Biplane\YandexDirect\Api\ApiSoapClientFactory;
use Biplane\YandexDirect\Api\V5\Ads;
use Biplane\YandexDirect\Api\V5\Contract;
use Biplane\YandexDirect\ConfigBuilder;

$serviceFactory = new ApiSoapClientFactory();

$config = ConfigBuilder::create()
    ->setAccessToken('<INSERT_ACCESS_TOKEN>')
    ->setClientLogin('agrom')
    ->setLocale('ru')
    ->getConfig();

$service = $serviceFactory->createSoapClient($config, Ads::class);

$criteria = Contract\AdsSelectionCriteria::create()
    ->setCampaignIds([123])
    ->setStates([
        Contract\StateEnum::ON,
    ]);
$request = Contract\GetAdsRequest::create()
    ->setSelectionCriteria($criteria)
    ->setFieldNames([
        Contract\AdFieldEnum::AD_CATEGORIES,
        Contract\AdFieldEnum::AGE_LABEL,
        Contract\AdFieldEnum::AD_GROUP_ID,
        Contract\AdFieldEnum::ID,
        Contract\AdFieldEnum::STATUS,
    ]);

$response = $service->get($request);

foreach ($response->getAds() ?? [] as $item) {
    // here $item is instance of Contract\AdGetItem
    // $item->getAgeLabel();
}
```

## Supported API Services

| Service | Description |
|---------|-------------|
| `V4\YandexAPIService` | [API Live 4 doc](https://yandex.ru/dev/direct/doc/dg-v4/concepts/Versions_live4.html) |
| `V5\AdExtensions` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adextensions/adextensions.html) |
| `V5\AdGroups` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adgroups/adgroups.html) |
| `V5\AdImages` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adimages/adimages.html) |
| `V5\Ads` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/ads/ads.html) |
| `V5\AgencyClients` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/agencyclients/agencyclients.html) |
| `V5\AudienceTargets` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/audiencetargets/audiencetargets.html) |
| `V5\BidModifiers` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/bidmodifiers/bidmodifiers.html) |
| `V5\Bids` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/bids/bids.html) |
| `V5\Campaigns` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/campaigns/campaigns.html) |
| `V5\Changes` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/changes/changes.html) |
| `V5\Clients` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/clients/clients.html) |
| `V5\Dictionaries` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/dictionaries/dictionaries.html) |
| `V5\DynamicTextAdTargets` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/dynamictextadtargets/dynamictextadtargets.html) |
| `V5\Feeds` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/feeds/feeds.html) |
| `V5\KeywordBids` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywordbids/keywordbids.html) |
| `V5\Keywords` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywords/keywords.html) |
| `V5\KeywordsResearch` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywordsresearch/keywordsresearch.html) |
| `V5\Leads` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/leads/leads.html) |
| `V5\NegativeKeywordSharedSets` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/negativekeywordsharedsets/negativekeywordsharedsets.html) |
| `V5\RetargetingLists` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/retargetinglists/retargetinglists.html) |
| `V5\Sitelinks` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/sitelinks/sitelinks.html) |
| `V5\SmartAdTargets` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/smartadtargets/smartadtargets.html) |
| `V5\TurboPages` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/turbopages/turbopages.html) |
| `V5\VCards` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/vcards/vcards.html) |
