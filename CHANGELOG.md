# Changelog

## Unreleased

### Changed

* Минимальная версия PHP - 7.1
* Совместимость с PHP 8 (PR #34)
* [**BC Break**] `ApiException` теперь наследуется от `RuntimeException`, вместо `RequestException`.
* [**BC Break**] Исключение с типом `ApiException` будет выброшено только в том случае,
  когда ошибка относится к API. В остальных случаях (ошибки транспорта, парсинга XML и т.п.)
  будет выброшено исключение с типом `SoapFault`.

### Deprecated

* `Biplane\YandexDirect\User` будет удален в 6.0, в пользу `Biplane\YandexDirect\Config`
  и `Biplane\YandexDirect\Api\ApiSoapClientFactory`.
* `Biplane\YandexDirect\UserBuilder` будет удален в 6.0.
* `Biplane\YandexDirect\EventListener\LoggerListener` будет удален в 6.0.

### Removed

* Удален `Biplane\YandexDirect\Helper\Invoker`, который предоставлял логику повторных запросов
  при временных ошибках.
* Удалены параметры `invoker`, `retry_factor`, `retry_max_attempts` и `retry_max_delay` для `User`.

## 4.16.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.15.0...4.16.0)

### Added

* Добавлена поддержка сервиса [Feeds](https://yandex.ru/dev/direct/doc/ref-v5/feeds/feeds-docpage/).
* Добавлена поддержка сервиса [SmartAdTargets](https://yandex.ru/dev/direct/doc/ref-v5/smartadtargets/smartadtargets-docpage/).

### Changed

* Сервисы совместимы с изменениями в API от 16.03.2020.
  Добавлена поддержка смарт-баннеров.

## 4.15.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.14.1...4.15.0)

### Added

* Добавлена поддержка сервиса `AudienceTargets` (PR #23)

### Changed

* Обновлены контракты данных для совместимости с последней версией API, включая изменения от 2020-02-06.

## 4.14.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.14.0...4.14.1)

### Fixed

* Отменены изменения в части генерации кода для массива-подобных типов, сделанные в f954f725.
  Так как, эти изменения несовместимы с нативным `SoapClient`, в случае десериализации XML.

## 4.14.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.13.0...4.14.0)

### Changed

* Теперь опция `stream_context` поддерживается всеми сервисами, где используется `SoapClient` (issue #20)

## 4.13.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.12.0...4.13.0)

### Added

* Добавлена поддержка следующих сервисов: [Leads](https://yandex.ru/dev/direct/doc/ref-v5/leads/leads-docpage/),
  [NegativeKeywordSharedSets](https://yandex.ru/dev/direct/doc/ref-v5/negativekeywordsharedsets/negativekeywordsharedsets-docpage/)
  и [TurboPages](https://yandex.ru/dev/direct/doc/ref-v5/turbopages/turbopages-docpage/).

## Changed

* Обновлены контракты данных для совместимости с последней версией API, включая изменения от 01.10.2019.
* Улучшена логика определения массивов по данным WSDL, с учетом специфики Яндекс.Директ API.
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\CpmBannerAdBuilderAdGet::setTrackingPixels()`

     ```patch
     - public function setTrackingPixels(TrackingPixelGetArray $value = null)
     + public function setTrackingPixels(array $value = null)
     ```
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\CpmVideoAdBuilderAdGet::setTrackingPixels()`
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem::setPriorityGoals()`

     ```patch
     - public function setPriorityGoals(PriorityGoalsArray $value = null)
     + public function setPriorityGoals(array $value = null)
     ```
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignGetItem::setPriorityGoals()`
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem::setPriorityGoals()`
  * [**BC Break**] Изменилась сигнатура метода `Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem::setPriorityGoals()`

## 4.12.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.11.0...4.12.0)

* Обновлены сервисы и контракты данных для совместимости с имзенениями в API от 15 мая 2019 г.

  В сервисе `Sitelinks` есть изменения, нарушающие обратную совместимость.
  Метод `SitelinksSetGetItem::getItems()` возвращает массив объектов
  `Biplane\YandexDirect\Api\V5\Contract\SitelinkGetItem`, вместо
  `Biplane\YandexDirect\Api\V5\Contract\Sitelink`.

## 4.11.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.10.0...4.11.0)

* Для ошибок с кодом `500` резрешен повторный запрос.

* Обновлены контракты данных и сервисы, для совместимости с последними изменениями **API**
  (включая изменения от 08.04.2019). (PR [#18](https://github.com/biplane/yandex-direct/pull/18))

## 4.10.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.9.1...4.10.0)

* Обновлены контракты данных и сервисы, для совместимости с последними изменениями **API**
  (включая изменения от 11.03.2019).

## 4.9.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.9.0...4.9.1)

* Добавлена поддержка *Песочницы* для сервиса `Reports` (PR [#16](https://github.com/biplane/yandex-direct/pull/16))

## 4.9.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.8.0...4.9.0)

* Исправлен конфликт типа `Notification` между сервисами `Campaigns` и `AgencyClients`/`Clients`.

  Класс `Biplane\YandexDirect\Api\V5\Contract\Notification` удален. Вместо этого
  нужно использовать `Biplane\YandexDirect\Api\V5\Contract\CampaignNotification`
  или `Biplane\YandexDirect\Api\V5\Contract\ClientNotification`.

  Так же переименованы следующие классы:

  * `NotificationAdd` -> `ClientNotificationAdd`
  * `NotificationGet` -> `ClientNotificationGet`

## 4.8.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.7.1...4.8.0)

* В `ReportResult` добавлены методы, `retryIn` и `reportsInQueue`.
  Для предоставления доступа к [заголовкам ответа](https://tech.yandex.ru/direct/doc/reports/headers-docpage/#ariaid-title3).

## 4.7.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.7.0...4.7.1)

* Исправлена ошибка при формировании финансового токена для метода `AccountManagement`
  (fix [#13](https://github.com/biplane/yandex-direct/issues/13))

## 4.7.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.6.1...4.7.0)

* Добавлена поддержка медийных кампаний.

## 4.6.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.6.0...4.6.1)

* Исправлена ошибка, когда XML-документ с описанием запроса не соответствует схеме.
  (fix [#12](https://github.com/biplane/yandex-direct/issues/12))

## 4.6.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.5.0...4.6.0)

* В `ReportDefinitionBuilder` добавлена поддержка входных параметров:
  `Goals` и `AttributionModels`. (close [#11](https://github.com/biplane/yandex-direct/issues/11))

* Обновлены контракты данных и сервисы, для совместимости с последними изменениями
  в **API 5**.

## 4.5.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.4.1...4.5.0)

* Исправления в генерации PHPDoc.

* Исправлено преобразование данных для WSDL-типов: `ArrayOfString`, `ArrayOfInterger` и `ArrayOfLong`.
  Теперь соответствующие геттеры в контрактах данных будут возвращать массив,
  в соответствии с аннотацией в PHPDoc.
  Например, `Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem::getNegativeKeywords()`:

  **Было**

        print_r($campaign->getNegativeKeywords())

        > stdClass Object
        > (
        >     [Items] => Array
        >         (
        >             [0] => бесплатно
        >             [1] => плохие отзывы
        >             [2] => самостоятельно
        >         )
        > )

  **Стало**

        print_r($campaign->getNegativeKeywords())

        > Array
        > (
        >     [0] => бесплатно
        >     [1] => плохие отзывы
        >     [2] => самостоятельно
        > )

  Список методов, которых коснулось изменение:

  * `Biplane\YandexDirect\Api\V5\Contract\AdGroupAddItem::getNegativeKeywords()`
  * `Biplane\YandexDirect\Api\V5\Contract\AdGroupBase::getNegativeKeywords()`
  * `Biplane\YandexDirect\Api\V5\Contract\AdGroupGetItem::getRestrictedRegionIds()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem::getNegativeKeywords()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem::getBlockedIps()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem::getExcludedSites()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem::getNegativeKeywords()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem::getBlockedIps()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem::getExcludedSites()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem::getNegativeKeywords()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem::getBlockedIps()`
  * `Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem::getExcludedSites()`
  * `Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem::getCounterIds()`
  * `Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignBase::getCounterIds()`
  * `Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem::getCounterIds()`
  * `Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase::getCounterIds()`
  * `Biplane\YandexDirect\Api\V5\Contract\TimeTargetingBase::getSchedule()`

## 4.4.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.4.0...4.4.1)

* Исправлена ошибка с отсутствующим классом для контракта `CampaignIDSInfo`.

## 4.4.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.3.0...4.4.0)

* Добавлена поддержка [редактирования отдельных параметров](https://tech.yandex.ru/direct/doc/dg/best-practice/part-update-docpage/).
  Если нужно сбросить значение для какого-то параметра, необходимо явным образом
  вызвать соответствующий метод со значением `null`.

        TextAdUpdate::create()
            ->setTitle2(null);

## 4.3.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.2.0...4.3.0)

* Добавлена поддержка сервиса [KeywordBids](https://tech.yandex.ru/direct/doc/ref-v5/keywordbids/keywordbids-docpage/).

## 4.2.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.1.1...4.2.0)

* Добавлена поддержка Symfony 4.x

## 4.1.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.1.0...4.1.1)

* Добавлена поддержка типов объявлений, `TEXT_AD_BUILDER_AD` и `MOBILE_APP_AD_BUILDER_AD`.

* Исправлена ошибка в методе `ReportResult::save`.

## 4.1.0 [commit logs](https://github.com/biplane/yandex-direct/compare/4.1.0-beta2...4.1.0)

* Добавлена поддержка сервисов [AgencyClients](https://tech.yandex.ru/direct/doc/ref-v5/agencyclients/agencyclients-docpage/)
  и [RetargetingLists](https://tech.yandex.ru/direct/doc/ref-v5/retargetinglists/retargetinglists-docpage/).

* Добавлена поддержка метода `Update` в сервис `Biplane\YandexDirect\Api\V5\Contract\Clients`,
  переименованы некоторые классы:

  **Было**

        Biplane\YandexDirect\Api\V5\Contract\UpdateRequest
        Biplane\YandexDirect\Api\V5\Contract\UpdateResponse

  **Стало**

        Biplane\YandexDirect\Api\V5\Contract\UpdateClientsRequest
        Biplane\YandexDirect\Api\V5\Contract\UpdateClientsResponse

## 4.1.0-beta2 [commit logs](https://github.com/biplane/yandex-direct/compare/4.1.0-beta1...4.1.0-beta2)

* Восстановлен `Biplane\YandexDirect\Api\V4\Contract\BannerPhraseInfo`. Данная структура
  необходима для метода `YandexAPIService::getForecast()`.

* Добавлена возможность повторного вызова метода API, если предыдущий вызов завершился
  с ошибкой и её можно классифицировать как временную.

* Изменена сигнатура методов у сервиса `Biplane\YandexDirect\Api\V5\Reports` (PR #8).

  **Было**

        get($reportDefinition, array $options = null);
        getReady($reportDefinition, array $options = null, $retryInterval = null);
        download($reportFile, $reportDefinition, array $options = null, $retryInterval = null);

  **Стало**

        get(ReportRequest $request);
        getReady(ReportRequest $request, $retryInterval = null);
        download($reportFile, ReportRequest $request, $retryInterval = null);

* Для сервиса `Biplane\YandexDirect\Api\V5\Reports` добавлена поддержка событий,
  `biplane_yandex_direct.before_request`, `biplane_yandex_direct.after_request`
  и `biplane_yandex_direct.fail_request`.

## 4.1.0-beta1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.0.1...4.1.0-beta1)

* Добавлен `LoggerListener`.

* Добавлена поддержка заголовка [Use-Operator-Units](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#use-operator-units).
  Issue #3.

* Добавлена поддержка сервисов
  [AdImages](https://tech.yandex.ru/direct/doc/ref-v5/adimages/adimages-docpage/)
  и [KeywordsResearch](https://tech.yandex.ru/direct/doc/ref-v5/keywordsresearch/keywordsresearch-docpage/)

* Удалена поддержка устаревших методов `CreateOfflineReport`, `DeleteOfflineReport`
  и `GetOfflineReportList`.

* Добавлена поддержка [API для работы с отчётами](https://tech.yandex.ru/direct/doc/reports/reports-docpage/).

## 4.0.1 [commit logs](https://github.com/biplane/yandex-direct/compare/4.0...4.0.1)

* В объекты событий, `PostCallEvent` и `FailCallEvent` добавлен метод `getUnits`.

* Обновление контрактов данных и сервисов, для совместимости с последними изменениями
  в **API 5**.

## 4.0 [commit logs](https://github.com/biplane/yandex-direct/compare/3.4.2...4.0)

 * Бандл для интеграции с Symfony фреймфорком переехал в отдельный
   [репозиторий](https://github.com/biplane/BiplaneYandexDirectBundle).

 * `Biplane\YandexDirect\Api\V4SoapClient` переименован в `Biplane\YandexDirect\Api\SoapClientV4`,
   `Biplane\YandexDirect\Api\V5SoapClient` переименован в `Biplane\YandexDirect\Api\SoapClientV5`.

 * Удален `ConcurrentListener`.

 * Удален `Authenticator`. Для получения токена можно использовать отдельные решения,
   например, [aego/oauth2-yandex](https://github.com/rakeev/oauth2-yandex).

 * В сервисы для API 5 добавлен метод `getUnits`, который возвращает информацию
   о баллах (заголовок [Units](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#units)),
   актуальную для последнего запроса к API.

 * Из `YandexAPIService` удалены методы: CreateOrUpdateCampaign, GetCampaignsList,
   GetCampaignsListFilter, GetCampaignsParams, GetCampaignParams, DeleteCampaign,
   ResumeCampaign, StopCampaign, ArchiveCampaign, UnArchiveCampaign, SetAutoPrice,
   UpdatePrices, CreateOrUpdateBanners, GetBanners, DeleteBanners, ModerateBanners,
   ResumeBanners, StopBanners, ArchiveBanners, UnArchiveBanners, GetBannerPhrases,
   GetBannerPhrasesFilter, Keyword, GetChanges.

## 3.4.2 [commit logs](https://github.com/biplane/yandex-direct/compare/3.4.1...3.4.2)

 * Hot fix for issue #1

## 3.4.1 [commit logs](https://github.com/biplane/yandex-direct/compare/3.4.0...3.4.1)

 * Обновление контрактов данных и сервисов, для совместимости с последними изменениями
   в версиях **API 4 Live** и **API 5**.

 * ID запроса для API версии 4 формируется на основании результата `microtime()`,
   для минимизации коллизий.

## 3.4.0 [commit logs](https://github.com/biplane/yandex-direct/compare/3.3.0...3.4.0)

 * Добавлены константы для некоторых новых ошибок.

 * Добавлена поддержка сервисов `AdExtensions`, `Dictionaries` и `DynamicTextAdTargets`.

## 3.3.0 [commit logs](https://github.com/biplane/yandex-direct/compare/3.2.1...3.3.0)

 * В конфигурацию бандла добавлен параметр `sandbox` (`biplane_yandex_direct.sandbox`),
   принимающий значение `true` или `false`.

 * Добавлена поддержка [*Песочницы*](https://tech.yandex.ru/direct/doc/dg-v4/concepts/sandbox-init-docpage/).
   Для активации режима работы с "Песочницей" при создании экземпляра `Biplane\YandexDirect\User` необходимо
   передать опцию `sandbox` со значением `true`:

        new \Biplane\YandexDirect\User([
            'sandbox' => true
            ...
        ]);

 * Поддержка Symfony 2.8 и 3.0

## 3.2.1 [commit logs](https://github.com/biplane/yandex-direct/compare/3.2.0...3.2.1)

 * Исправлена ошибка в определении сервиса `biplane_yandex_direct.factory`.

## 3.2.0 [commit logs](https://github.com/biplane/yandex-direct/compare/3.1.0...3.2.0)

 * Обновлены контракты для совместимости с последней версией API, **4 Live** и **5**.

 * Логика сохранения данных запроса и ответа в файл вынесена в отдельный хелпер
   `Biplane\YandexDirect\Helper\Dumper`

 * **[BC BREAK]** Параметр `biplane_yandex_direct.dump_listener.directory` удален
   из в конфигурации бандла. Вместо него появился параметр `biplane_yandex_direct.dump.directory`
   и сервис `biplane_yandex_direct.dumper`

## 3.1.0 [commit logs](https://github.com/biplane/yandex-direct/compare/3.0.2...3.1.0)

 * Изменен уровень доступа для метода `SoapClient::getRequestId`, с `protected` на `public`.
   Метод вернет ID последнего запроса к API или null, если запросов не было.

 * В классы событий и `ApiException` добавлен метод `getMethodRef`, который возвращает
   полное имя метода (включая название сервиса) в формате `{ServiceName}:{MethodName}`.
   Где, `{ServiceName}` - имя сервиса. Например, **Bids** или **YandexAPIService**;
   `{MethodName}` - имя вызываемого метода API. Например, **Get** или **GetCampaignsParams**.

 * **[BC BREAK]** Класс `YandexApiService` переименован в `YandexAPIService`, для соответствия с WSDL.

## 3.0.2 [commit logs](https://github.com/biplane/yandex-direct/compare/3.0.1...3.0.2)

 * Исправлена ошибка с отсутствием прав на запись, когда директория создается рекурсивно
   с помощью функции `mkdir`.

 * Обновлены клиенты для работы с API. Включают изменения в API от 09.11.2015.

## 3.0.1 [commit logs](https://github.com/biplane/yandex-direct/compare/3.0.0...3.0.1)

 * Исправлена ошибка, когда директория создавалась без прав на запись для группы,
   так как на `mkdir` влияет `umask`.

## 3.0.0 [commit logs](https://github.com/biplane/yandex-direct/compare/2.0.0...3.0.0)

 * **[BC BREAK]** Изменена структура проекта, чтобы можно было подключать как Bundle для проекта на Symfony 2
   так и использовать как отдельную библиотеку, без зависимости от фреймворка Syfmony.

 * **[BC BREAK]** Изменилось пространство имен для класса `YandexApiService`.
   Если раньше полное имя класса было `Biplane\YandexDirectBundle\Proxy\YandexApiService`,
   то теперь `Biplane\YandexDirect\Api\V4\YandexApiService`

 * **[BC BREAK]** Изменилось пространство имен для контрактов данных.

   **Было**

        Biplane\YandexDirectBundle\Contract\BannerInfo

   **Стало**

        Biplane\YandexDirect\Api\V4\Contract\BannerInfo

 * **[BC BREAK]** Изменилось пространство имен для исключений.

   **Было**

        Biplane\YandexDirectBundle\Exception\ApiException
        Biplane\YandexDirectBundle\Exception\NetworkException
        Biplane\YandexDirectBundle\Exception\AuthException
        Biplane\YandexDirectBundle\Exception\BuzzClientException

   **Стало**

        Biplane\YandexDirect\Exception\ApiException
        Biplane\YandexDirect\Exception\NetworkException
        Biplane\YandexDirect\Auth\Exception\AuthException
        Biplane\YandexDirect\Auth\Exception\NetworkException

   * Класс `Biplane\YandexDirectBundle\Exception\BuzzClientException` переименован в
     `Biplane\YandexDirect\Auth\Exception\NetworkException`.

 * Изменения в `ApiException`:

    * **[BC BREAK]** Изменилась сигнатура конструктора у класса `ApiException`.

    * **[BC BREAK]** Был удален метод-фабрика `create` у класса `ApiException`.

    * **[BC BREAK]** Удалены методы `getRequest` и `getResponse` у класса `ApiException`.

    * Добавлен метод `getRequestId` у класса `ApiException`.

 * Добавлен базовый тип исключения `Biplane\YandexDirect\Exception\RequestException`,
   от него наследуются все остальные типы исключений в простренстве имен `Biplane\YandexDirect\Exception`.

 * **[BC BREAK]** Класс `Biplane\YandexDirect\Exception\NetworkException` теперь наследуется от
   `Biplane\YandexDirect\Exception\RequestException`.

 * **[BC BREAK]** Классы конфигурации, `AuthTokenConfiguration` и `CertificateConfiguration`, упразднены.
   Вместо этого добавлен класс `Biplane\YandexDirect\User`, через который можно получить экземпляр сервиса
   для работы с API.

 * **[BC BREAK]** Изменилось пространство имен для у классов событий.

   **Было**

        Biplane\YandexDirectBundle\Event\PreCallEvent
        Biplane\YandexDirectBundle\Events

   **Стало**

        Biplane\YandexDirect\Event\PreCallEvent
        Biplane\YandexDirect\Events

 * **[BC BREA]** Метод `getResponse` в `PostCallEvent`, возвращающий результат ответа от API,
   был переименован в `getResult`.

   * Удален метод `getApiService`. Доступ к сервису API можно получить через метод `getUser`

        $event->getUser()->getApiService();

   * Метод `getConfiguration` переименован в `getUser`, который теперь возвращает объект `Biplane\YandexDirect\User`.

   * Добавлен метод `getMethodParams`, возвращающий массив с параметрами,
     которые будут/были переданы при вызове метода API.

   * Для `FailCallEvent` и `PostCallEvent` добавлен метод `getRequestId`,
     который возвращает уникальных идентификатор запроса к API.

   * Для `FailCallEvent` и `PostCallEvent` добавлены методы `getRequest` и `getResponse`,
     которые возвращают заголовки и контент HTTP-запроса и HTTP-ответа, соответственно.

 * **[BC BREAK]** Изменилось пространство имен для `Authenticator`

   **Было**

        Biplane\YandexDirectBundle\Authenticator

   **Стало**

        Biplane\YandexDirect\Auth\Authenticator

 * **[BC BREAK]** Удалена поддержка JSON.

 * Удалена зависимость от библиотеки `biplane/common`.

 * Добавлена поддержка Яндекс.Директ API версии 5.

 * **[BC BREAK]** Конфигурация бандла сильно изменилась. Больше не поддерживаются профили.
   Так же изменилось полное имя бандла:

    **Было**

         Biplane\YandexDirectBundle\BiplaneYandexDirectBundle

    **Стало**

         Biplane\Bundle\YandexDirectBundle\BiplaneYandexDirectBundle


## 2.0.0 [commit logs](https://github.com/biplane/yandex-direct/compare/1.0.0...2.0.0)

 * Переход на версию Live 4.

## 1.0.0 (2013-10-04)

 * Поддержка Яндекс.Директ API версии 4.
