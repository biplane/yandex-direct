# Yandex.Direct API PHP Client 
[![Packagist](https://img.shields.io/packagist/vpre/biplane/yandex-direct.svg?maxAge=2592000)](https://packagist.org/packages/biplane/yandex-direct)
[![Build Status](https://travis-ci.org/biplane/yandex-direct.svg?branch=master)](https://travis-ci.org/biplane/yandex-direct)

PHP library for [Yandex.Direct API](https://tech.yandex.ru/direct/).

## Requirements

 * PHP >= 5.5
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
use Biplane\YandexDirect\Api\V5\Contract\GetAdRequest;
use Biplane\YandexDirect\Api\V5\Contract\StateEnum;
use Biplane\YandexDirect\User;

$user = new User(array(
    'access_token' => 'INSERT_YOUR_ACCESS_TOKEN',
    'login' => 'YANDEX_DIRECT_CLIENT_LOGIN',
    'locale' => User::LOCALE_RU,
));

$criteria = AdsSelectionCriteria::create()
    ->setCampaignIds(array(123))
    ->setStates(array(StateEnum::ON));
    
$payload = GetAdRequest::create()
    ->setSelectionCriteria($criteria)
    ->setFieldNames(array(
        AdFieldEnum::AD_CATEGORIES,
        AdFieldEnum::AGE_LABEL,
        AdFieldEnum::AD_GROUP_ID,
        AdFieldEnum::ID,
        AdFieldEnum::STATUS
    ));

$response = $user->getAdsService()->get($payload);

foreach ($response->getAds() as $ad) {
    // here $ad is instance of Biplane\YandexDirect\Api\V5\Contract\AdGetItem
}
```

In this example will be fetched all actived ads for campaign with ID 123.

## Options

The `Biplane\YandexDirect\User` object supported some options:

#### access_token 

**Required**

The [access token](https://tech.yandex.ru/direct/doc/dg-v4/concepts/auth-token-docpage/) for OAuth 


#### locale

Default: `en`

You can specify the locale for messages from API. Allowed values: `ru`, `ua` or `en`.

#### master_token
 
The master token needs for [access to financial methods](https://tech.yandex.ru/direct/doc/dg-v4/concepts/finance-token-docpage/). 

#### login
 
**Required** in some cases.

The [client login](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#request). 
It's required for financial operations and when a request is made on behalf of the agency.

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

You can specify which requests should be dumped, all (`LEVEL_ALL_REQUEST`) or only with errors (`LEVEL_FAIL_REQUEST`).
