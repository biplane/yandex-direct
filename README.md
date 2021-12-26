# Yandex.Direct API PHP Client

[![Package version](https://img.shields.io/packagist/v/biplane/yandex-direct?style=flat-square)](https://packagist.org/packages/biplane/yandex-direct)
![Build Status](https://github.com/biplane/yandex-direct/actions/workflows/ci.yml/badge.svg)
[![License](https://img.shields.io/packagist/l/biplane/yandex-direct?style=flat-square)](LICENSE)

Библиотека для работы с [API Директа](https://yandex.ru/dev/direct/).

Формат взаимодействия: **SOAP**

**NOTE:** Библиотека совместима только с **64**-битной версией PHP.

## Установка

Проще всего установить с помощью менеджера пакетов - [composer](https://getcomposer.org/).

```bash
$ composer require biplane/yandex-direct
```

## Примеры использования

### Получение данных по объявлениям

Данный пример отражает взаимодействие с сервисом [Ads](https://yandex.ru/dev/direct/doc/ref-v5/ads/ads.html)
для получения списка объявлений.

```php
<?php

use Biplane\YandexDirect\ApiServiceFactory;
use Biplane\YandexDirect\Api\V5\Ads;
use Biplane\YandexDirect\Api\V5\Contract;
use Biplane\YandexDirect\ConfigBuilder;

$serviceFactory = new ApiServiceFactory();

$config = ConfigBuilder::create()
    ->setAccessToken('<INSERT_ACCESS_TOKEN>')
    ->setClientLogin('agrom')
    ->setLocale('ru')
    ->getConfig();
$service = $serviceFactory->createService($config, Ads::class);

$campaignsIds = [123];

$criteria = Contract\AdsSelectionCriteria::create()
    ->setCampaignIds($campaignsIds)
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
    // Здесь $item будет являться экземпляром `Biplane\YandexDirect\Api\V5\Contract\AdGetItem`
    // Например, получение информации о возрастной метке:
    // $item->getAgeLabel();
}
```

### Получение отчета

В данном примере делается запрос на подготовку отчета,
ожидаем его готовность, загружаем и сохраняем в файл.

```php

use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\ConfigBuilder;
use Biplane\YandexDirect\ReportServiceFactory;

$serviceFactory = new ReportServiceFactory();

$config = ConfigBuilder::create()
    ->setAccessToken('<INSERT_ACCESS_TOKEN>')
    ->setClientLogin('agrom')
    ->setLocale('ru')
    ->getConfig();
$service = $serviceFactory->createService($config);

$reportDefinition = Reports\ReportDefinition::create()
    ->setReportName('demo')
    ->setReportType(Reports\ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT)
    ->setDateRangeType(Reports\DateRangeTypeEnum::LAST_7_DAYS)
    ->setFieldNames([
        Reports\FieldEnum::CAMPAIGN_ID,
        Reports\FieldEnum::CAMPAIGN_NAME,
        Reports\FieldEnum::IMPRESSIONS,
        Reports\FieldEnum::CLICKS,
        Reports\FieldEnum::COST,
    ])
    ->setIncludeVAT(false);

$request = Reports\ReportRequestBuilder::create()
    ->setReportDefinition($reportDefinition)
    ->returnMoneyInMicros(false)
    ->skipReportHeader(true)
    ->getReportRequest();

$result = $service->getReady($request);

$result->saveToFile('/path/to/file.tsv');
```

### Логирование

Для логирования запросов к API можно реализовать интерфейс `Biplane\YandexDirect\Log\SoapLogger`.
Либо использовать адаптер для `psr/log`:

```php

use Biplane\YandexDirect\ApiServiceFactoryBuilder;
use Biplane\YandexDirect\Log\SoapLogger\PsrLogger;

$serviceFactory = ApiServiceFactoryBuilder::create()
    ->setLogger(new PsrLogger($psrLogger))
    ->getFactory();

// ...
```

В данной конфигурации все запросы к API будут записываться в журнал,
но уровень логирования будет определяться ответом, успех или ошибка.

| Response | Log level |
|----------|-----------|
| OK | `DEBUG` |
| Error | `ERROR` |

## Поддерживаемые сервисы API

| Сервис                         | Документация                                                                                            |
|--------------------------------|---------------------------------------------------------------------------------------------------------|
| `V4\YandexAPIService`          | [API Live 4 doc](https://yandex.ru/dev/direct/doc/dg-v4/concepts/Versions_live4.html)                   |
| `V5\AdExtensions`              | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adextensions/adextensions.html)                           |
| `V5\AdGroups`                  | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adgroups/adgroups.html)                                   |
| `V5\AdImages`                  | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/adimages/adimages.html)                                   |
| `V5\Ads`                       | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/ads/ads.html)                                             |
| `V5\AgencyClients`             | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/agencyclients/agencyclients.html)                         |
| `V5\AudienceTargets`           | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/audiencetargets/audiencetargets.html)                     |
| `V5\BidModifiers`              | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/bidmodifiers/bidmodifiers.html)                           |
| `V5\Bids`                      | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/bids/bids.html)                                           |
| `V5\Campaigns`                 | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/campaigns/campaigns.html)                                 |
| `V5\Changes`                   | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/changes/changes.html)                                     |
| `V5\Clients`                   | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/clients/clients.html)                                     |
| `V5\Dictionaries`              | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/dictionaries/dictionaries.html)                           |
| `V5\DynamicTextAdTargets`      | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/dynamictextadtargets/dynamictextadtargets.html)           |
| `V5\Feeds`                     | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/feeds/feeds.html)                                         |
| `V5\KeywordBids`               | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywordbids/keywordbids.html)                             |
| `V5\Keywords`                  | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywords/keywords.html)                                   |
| `V5\KeywordsResearch`          | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/keywordsresearch/keywordsresearch.html)                   |
| `V5\Leads`                     | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/leads/leads.html)                                         |
| `V5\NegativeKeywordSharedSets` | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/negativekeywordsharedsets/negativekeywordsharedsets.html) |
| `V5\RetargetingLists`          | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/retargetinglists/retargetinglists.html)                   |
| `V5\Sitelinks`                 | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/sitelinks/sitelinks.html)                                 |
| `V5\SmartAdTargets`            | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/smartadtargets/smartadtargets.html)                       |
| `V5\TurboPages`                | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/turbopages/turbopages.html)                               |
| `V5\VCards`                    | [Doc](https://yandex.ru/dev/direct/doc/ref-v5/vcards/vcards.html)                                       |
| `V5\Reports`                   | [Doc](https://yandex.ru/dev/direct/doc/reports/reports.html)                                            |

## License

This package is licensed using the MIT License.
