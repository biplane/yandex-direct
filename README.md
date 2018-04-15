# Yandex.Direct API PHP Client 
[![Packagist](https://img.shields.io/packagist/vpre/biplane/yandex-direct.svg?maxAge=2592000)](https://packagist.org/packages/biplane/yandex-direct)
[![Build Status](https://travis-ci.org/biplane/yandex-direct.svg?branch=master)](https://travis-ci.org/biplane/yandex-direct)

PHP library for [Yandex.Direct API](https://tech.yandex.ru/direct/).

## Requirements

 * PHP >= 5.6
 * ext-soap

## Installation

You may install this library via [Composer](https://getcomposer.org/).

```bash
$ composer require biplane/yandex-direct
```

## Basic usage

```php
<?php

use Biplane\YandexDirect\Api\V5\Contract\AdFieldEnum;
use Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\Contract\GetAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\StateEnum;
use Biplane\YandexDirect\User;

$user = new User([
    'access_token' => 'INSERT_YOUR_ACCESS_TOKEN',
    'login' => 'YANDEX_DIRECT_CLIENT_LOGIN',
    'locale' => User::LOCALE_RU,
]);

$criteria = AdsSelectionCriteria::create()
    ->setCampaignIds([123])
    ->setStates([
        StateEnum::ON,
    ]);

$payload = GetAdsRequest::create()
    ->setSelectionCriteria($criteria)
    ->setFieldNames([
        AdFieldEnum::AD_CATEGORIES,
        AdFieldEnum::AGE_LABEL,
        AdFieldEnum::AD_GROUP_ID,
        AdFieldEnum::ID,
        AdFieldEnum::STATUS,
    ]);

$response = $user->getAdsService()->get($payload);

foreach ($response->getAds() as $ad) {
    // here $ad is instance of Biplane\YandexDirect\Api\V5\Contract\AdGetItem
}
```

In this example will be fetched all actived ads for campaign with ID 123.

## Options

The `Biplane\YandexDirect\User` object supported some options:

#### access_token 

The [access token](https://tech.yandex.ru/direct/doc/dg-v4/concepts/auth-token-docpage/) for OAuth. **Required** 

#### locale

You can specify the locale for messages from API. Allowed values: `ru`, `ua` or `en`. 

Default: `en`

#### master_token

The master token needs for [access to financial methods](https://tech.yandex.ru/direct/doc/dg-v4/concepts/finance-token-docpage/). 

#### login

The [client login](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#request). 
It's **required** for financial operations and when a request is made on behalf of the agency.

#### use_operator_units

Enables to use an agency's units instead of an advertiser.
See [documentation](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#use-operator-units) for details.

Default: `false`

#### sandbox

This option allows to enable the sandbox.
See [documentation](https://tech.yandex.ru/direct/doc/dg/best-practice/quick-start-docpage/#sandbox) for details.

Default: `false`

## Supported API Services

You can get the proxy of a service through the `User` object, to interact with Yandex.Direct API.

* `User::getApiService()` - Service for API Live 4.

* `User::getAdExtensionsService()` - Service for manage ad's extensions (API 5).

* `User::getAdGroupsService()` - Service for for manage ad groups (API 5).

* `User::getAdImagesService()` - Service for for manage ad images (API 5).

* `User::getAdsService()` - Service for manage ads (API 5).

* `User::getAgencyClientsService()` - Service for manage an agency's clients (API 5).

* `User::getBidsService()` - Service for manage bids (API 5).

* `User::getBidModifiersService()` - Service for the adjustments of bids (API 5).

* `User::getCampaignsService()` - Service for manage campaigns (API 5).

* `User::getChangesService()` - Service to check for changes (API 5).

* `User::getClientsService()` - Service for manage clients (API 5).

* `User::getDictionariesService()` - Service for fetch info about dictionaries (API 5).

* `User::getDynamicTextAdTargetsService()` - Service for manage dynamic text ads (API 5).

* `User::getKeywordBidsService()` - Service for manage bids for keywords. (API 5)

* `User::getKeywordsService()` - Service for manage keywords (API 5).

* `User::getKeywordsResearchService()` - Service to get forecast of impressions for keywords. (API 5).

* `User::getRetargetingListsService()` - Service for manage lists of retargeting (API 5).

* `User::getSitelinksService()` - Service for manage sitelinks (API 5).

* `User::getVCardsService()` - Service for manage VCards (API 5).

## Event listeners

### DumpListener

This listener allows write to file info about request and response from server. File names generated 
on the basis of the [request identifier](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#response)

> **NOTE**: The request identifier will be generated on client side for API 4 requests.

Instance, for the RequestId `806811001464643172` will be created two files:

    80/6/806811001464643172_req.data
    80/6/806811001464643172_resp.data

You can get the RequestId from service instance or via the event object inside an event listener.

```php
use Biplane\YandexDirect\EventListener\DumpListener;

$listener = new DumpListener('/var/dumps', DumpListener::LEVEL_ALL_REQUEST);

$user->getDispatcher()->addSubscriber($listener);
```

You can specify which requests should be dumped, all (`LEVEL_ALL_REQUEST`) 
or only with errors (`LEVEL_FAIL_REQUEST`).

### LoggerListener

This listener allows to log errors from API, with the different level for network, 
temporary errors.

```php
use Biplane\YandexDirect\EventListener\LoggerListener;

$listener = new LoggerListener($logger);

$user->getDispatcher()->addSubscriber($listener);
```

Example a message in log:

    [1970-01-01 23:59:59] app.NOTICE: Call YandexAPIService:AccountManagement completed with network error: Error Fetching http headers {"method":"YandexAPIService:AccountManagement","login":null,"request_id":"794841001487675763","error":"Error Fetching http headers"} []

