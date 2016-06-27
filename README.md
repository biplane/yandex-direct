# Yandex.Direct API PHP Client [![Build Status](https://travis-ci.org/biplane/yandex-direct.svg?branch=master)](https://travis-ci.org/biplane/yandex-direct)

PHP library for [Yandex.Direct API](https://tech.yandex.ru/direct/).

## Requirements

 * PHP >= 5.4
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

### ConcurrentListener

This listener limits the number of simultaneous connections to API within the app. 
For this feature used Semaphore of [System V](http://docs.php.net/manual/en/book.sem.php).

> **NOTE:** Not available for Windows OS.
 
```php
use Biplane\SysV\Factory;
use Biplane\YandexDirect\EventListener\ConcurrentListener;

$factory = new Factory('/var/ipc');

$listener = new ConcurrentListener($factory, 10);

$user->getDispatcher()->addSubscriber($listener);
```

The number of max connections (from 1 to 12) passed to the constuctor of `ConcurrentListener`
as the second argument.  

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

## Integration with Symfony

This project contains bundle for integration with Symfony framework.

> **NOTE:** The bundle compatible with Symfony 2.3 or higher.

### Installation

Add the bundle to `app/AppKernel.php`:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Biplane\Bundle\YandexDirectBundle\BiplaneYandexDirectBundle(),
            // ...
        )
    };

### Bundle configuration

```yaml
biplane_yandex_direct:
    auth:

        # The identifier of application for OAuth authorization.
        app_id:               ~ # Required

        # The secret key of application for OAuth authorization.
        app_secret:           ~ # Required

    # The locale for localize message of errors.
    locale:               ru # One of "ru"; "en"; "ua"
    user:

        # The access token for OAuth authorization
        access_token:         ~ # Required

        # The Yandex's login. Required when the master_token is set.
        login:                ~

        # The master token needs for finance operations.
        master_token:         ~

    # Restricts a number of concurrent connections to API.
    concurrent_listener:
        enabled:              false

        # A number between 1 and 12.
        connections:          12
    dump_listener:
        enabled:              false
        directory:            '%kernel.cache_dir%/api_dumps'
        dump:                 all # One of "all"; "only-fail"
    ipc:
        directory:            '%kernel.cache_dir%/ipc'
```

DI service `biplane_yandex_direct.auth` will not be registered, if `biplane_yandex_direct.auth` is not configured.
