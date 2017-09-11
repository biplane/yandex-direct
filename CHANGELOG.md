# Changelog

## master

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
