# Changelog

## Unreleased

### Fixed

* Исправлена ошибка при обработке `SoapFault`.
  ```
  Warning: Undefined property: SoapFault::$detail
  ```
* Исправлена ситуация, когда при разборе ответа от сервиса **Reports**
  могло быть выброшено исключение `Symfony\Component\Serializer\Exception\NotEncodableValueException`.

## 5.3.0 [commit logs](https://github.com/biplane/yandex-direct/compare/5.2.0...5.3.0)

### Changed

* Обновлены сервисы для совмести с последними изменениями в API 5, включая изменения от 2022-03-29.
  В частности, добавлена поддержка новых типов корректировок, `TABLET_ADJUSTMENT` и `DESKTOP_ONLY_ADJUSTMENT`

## 5.2.0 [commit logs](https://github.com/biplane/yandex-direct/compare/5.1.1...5.2.0)

### Changed

* Добавлена возможность передавать числовые значения в `Biplane\YandexDirect\Api\V5\Reports\FilterItem::create()` (Close #44)
* Обновлены сервисы для совмести с последней версией API 5, включая изменения от 2022-01-26.
* [**BC break**] Изменена конфигурация SOAP параметров для пресета `SoapOptions::default()`.
  Теперь WSDL включен по умолчанию.

## 5.1.1 [commit logs](https://github.com/biplane/yandex-direct/compare/5.1.0...5.1.1)

### Fixed

* Исправлена совместимость с PHP 8.1 ([#43](https://github.com/biplane/yandex-direct/pull/43))

## 5.1.0 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.3...5.1.0)

### Added

* Добавлена поддержка `symfony/serializer:^6` ([#38](https://github.com/biplane/yandex-direct/pull/38))

### Changed

* Явно указано требование 64-битной версии PHP ([#42](https://github.com/biplane/yandex-direct/pull/42))

### Removed

* Удалена поддержка PHP 7.1

## 5.0.3 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.2...5.0.3)

### Fixed

* Исправлено преобразование данных из XML к типу `float`, когда в схеме указан тип `xsd:decimal`.
  SoapClient в этом случае возвращает значение с типом `string`, что приводило к `TypeError`:

  ```
  TypeError: Return value of Biplane\YandexDirect\Api\V5\Contract\ClientGetItem::getAccountQuality() must be of the type float or null, string returned
  ```

## 5.0.2 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.1...5.0.2)

### Changed

* Переход на psalm

### Fixed

* В запрос к сервису `Reports` заголовок `Client-Login` добавлялся не зависимо от того,
  был ли задан логин в конфиге или нет.
  Данный заголовок обязателен только когда запрос выполняется от имени агенства.
* Исправлены ошибки с проверкой на `null`, приводившие к исключению `TypeError`.

## 5.0.1 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.0...5.0.1)

### Fixed

* При логировании SOAP запроса могла возникнуть ошибка `TypeError`,
  когда соединение с сервером было разорвано (в этом случае `SoapClient::__getLastResponse()`
  возвращает `null`).

## 5.0.0 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.0-beta4...5.0.0)

### Added

* Добавлен класс `Biplane\YandexDirect\ApiServiceFactory`.
  [**BC break**] Изначально фабрика была добавлена ещё в `5.0.0-beta1`,
  но под другим именем `Biplane\YandexDirect\Api\ApiSoapClientFactory`.
* Добавлен класс `Biplane\YandexDirect\ApiServiceFactoryBuilder`.
* Реализован новый API для логирования запросов к API (PR #36)
* Добавлен класс `Biplane\YandexDirect\ReportServiceFactory`
* Добавлен класс `Biplane\YandexDirect\Exception\DownloadReportException`.
  Данное исключение может быть выброшено в том случае, когда запрос к сервису Reports
  завершился с ошибкой. Например, когда HTTP-код `502`.
* Добавлен класс `Biplane\YandexDirect\Exception\ReportNotReadyException`

### Changed

* Обновлены сервисы для совмести с последней версией API 5, включая изменения от 2021-11-22.
* Изменена сигнатура конструктора `Biplane\YandexDirect\ApiServiceFactory`

  ```patch
  - public function __construct(?Runner $runner = null, ?TransactionNumberGenerator $transactionNumberGenerator = null, ?int $soapCallTimeout = null)
  + public function __construct(?Runner $runner = null, ?TransactionNumberGenerator $transactionNumberGenerator = null, ?int $soapCallTimeout = null, ?SoapLogger $logger = null, ?SoapLogContextFactory $logContextFactory = null)
  ```

* Для `Biplane\YandexDirect\Api\V4\YandexAPIService` идентификатор запроса читается
  из HTTP-заголовков ответа, так же как для сервисов API 5.
* [**BC break**] Изменена сигнатура метода `ApiSoapClientV5::getUnits()`. Теперь метод возвращает `null`,
  когда нет информации по баллам.

  ```patch
  - public function getUnits(): Units
  + public function getUnits(): ?Units
  ```
* В объект `Biplane\YandexDirect\Api\Units` добавлен метод `getUsedLogin`, который возвращает
  значение заголовка `Units-Used-Login`.
* [**BC break**] Для следующих классов изменено пространство имен.

  ```patch
  - Biplane\YandexDirect\Api\V5\Report
  + Biplane\YandexDirect\Api\V5\Reports
  ```

  * `DateRangeTypeEnum`
  * `FieldEnum`
  * `FilterOperatorEnum`
  * `ReportRequest`
  * `ReportResult`

* [**BC break**] У класса `Biplane\YandexDirect\Api\V5\Reports\ReportRequest` удалены все методы
  изменяющие состояние. Для сборки запроса рекомендуется использовать `Biplane\YandexDirect\Api\V5\Reports\ReportRequestBuilder`
* [**BC break**] Переработан `Biplane\YandexDirect\Api\V5\Reports\ReportResult`.
  * Добавлен метод `getStream()`
  * Метод `getData()` переименован в `getAsString()`
  * Метод `save()` переименован в `saveToFile()`. Ранее метод первым аргументом принимал строку или `resource`,
    теперь только строку - путь к файлу, куда сохранить результат.
* [**BC break**] Сервис `Biplane\YandexDirect\Api\V5\Reports` теперь совместим с [PSR-18](https://www.php-fig.org/psr/psr-18/).
  (PR #37)

  По умолчанию используется [`php-http/discovery`](https://packagist.org/packages/php-http/discovery)
  для поиска реализации HTTP-клиента. Но это поведение можно изменить при инициализации `ReportServiceFactory`.

  Для метода `getReady()` удалена поддержка переопределения интервала для проверки готовности отчёта.
  Теперь всегда полагаемся на данные заголовка [`retryIn`](https://yandex.ru/dev/direct/doc/reports/headers.html).

  ```patch
  - public function getReady(ReportRequest $reportRequest, ?int $retryInterval = null): ReportResult
  + public function getReady(Reports\ReportRequest $reportRequest): Reports\ReportResult
  ```
* [**BC break**] Интерфейс `TransactionNumberGeneratorInterface` переименован в `TransactionNumberGenerator`.
  Для реализаций изменено пространство имен:

  ```patch
  - Biplane\YandexDirect\Api\Finance\CallbackTransactionNumberGenerator
  + Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator\CallbackTransactionNumberGenerator
  - Biplane\YandexDirect\Api\Finance\ClockTransactionNumberGenerator
  + Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator\ClockTransactionNumberGenerator
  ```
* [**BC break**] Изменено пространство имен для `ApiSoapClient`

  ```patch
  - Biplane\YandexDirect\Api
  + Biplane\YandexDirect\Soap
  ```

### Deprecated

* `ClientInterface` будет удален в будущем. Используйте `SoapLogger` для полученния данных
  по запросу/ответу.
* `DumpListener` будет удален в будущем. Вместо этого используйте `SoapLogger`.
* Метод `Biplane\YandexDirect\Api\V5\Reports::download()` будет удален в будущем.
  Вместо этого используйте `Biplane\YandexDirect\Api\V5\Reports\ReportResult::saveToFile()`.
* Поддержка событий будет удалена в будущем.
  * `Biplane\YandexDirect\Events`
  * `Biplane\YandexDirect\Event\FailCallEvent`
  * `Biplane\YandexDirect\Event\PostCallEvent`
  * `Biplane\YandexDirect\Event\PreCallEvent`

### Removed

* Удален класс `Biplane\YandexDirect\Exception\ReportDefinitionException`.
* Удален класс `Biplane\YandexDirect\Exception\LogicException`.
* Удален класс `Biplane\YandexDirect\Exception\NetworkException`.
  Вместо этого следует использовать `SoapFault`.
* Удален класс `Biplane\YandexDirect\Exception\RequestException`.
  Вместо этого следует использовать `Biplane\YandexDirect\Exception\ApiException` или `SoapFault`.
* Удален класс `Biplane\YandexDirect\Api\V5\Report\AttributionModelEnum`.
  Вместо него следует использовать `Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum`.
* Удален класс `Biplane\YandexDirect\Api\V5\Report\FormatEnum`.
* Удален класс `Biplane\YandexDirect\Api\V5\Report\ReportDefinitionBuilder`.
  Вместо него следует использовать `Biplane\YandexDirect\Api\V5\Reports\ReportDefinition`.

## 5.0.0-beta4 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.0-beta3...5.0.0-beta4)

### Added

* Добавлен класс `SoapOptions`, которые позволяет переопределить
  некоторые опции (`compression` и `cache_wsdl`) для `SoapClient`.

### Changed

* Класс `Units` больше не реализует интерфейс `JsonSerializable`.
* Обновлены сервисы для совмести с последней версией API 5, включая изменения от 2021-11-01.

### Fixed

* Исправлена ошибка несоответствия типов при разборе заголовка `Units`.

## 5.0.0-beta3 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.0-beta2...5.0.0-beta3)

### Added

* Добавлена возможность применения стратегии для повторного вызова метода API при ошибках.
  (*альтернативная реализация `Invoker` из версии 4.x*).

  По умолчанию данный функционал не используется. Для активации необходимо сконфигурировать
  `Runner` и фабрику сервисов:

  ```php
  use Biplane\YandexDirect\Api\ApiSoapClientFactory;
  use Biplane\YandexDirect\Runner\Runner;
  use Biplane\YandexDirect\Runner\Runner\RetryStrategy\ExponentialRetryStrategy;

  $maxRetries = 3;
  $runner = new Runner(new ExponentialRetryStrategy(), $maxRetries);
  $apiServiceFactory = new ApiSoapClientFactory($runner);
  ```

### Changed

* Обновлены сервисы для совмести с последней версией API 5, включая изменения от 2021-09-03.
* [**BC break**] Код для сервисов и DTO генерируется для PHP 7.1+,
  * Включен режим `strict_types`
  * Используются type-hint для скалярных типов
* [**BC break**] Изменена сигнатура конструктора класса `ApiSoapClientFactory`.

  ```patch
  - public function __construct(?TransactionNumberGeneratorInterface $transactionNumberGenerator = null, ?int $soapCallTimeout = null)
  + public function __construct(?Runner $runner = null, ?TransactionNumberGeneratorInterface $transactionNumberGenerator = null, ?int $soapCallTimeout = null)
  ```

### Removed

* Из `Biplane\YandexDirect\Api\V5\Report\FieldEnum` удалены следующие методы:

    * `generateConversionRateFieldName()`
    * `generateConversionsFieldName()`
    * `generateCostPerConversionFieldName()`
    * `generateGoalsRoiFieldName()`
    * `generateRevenueFieldName()`

  В них нет необходимости, не используются при сборке запроса на новый отчет.

## 5.0.0-beta2 [commit logs](https://github.com/biplane/yandex-direct/compare/5.0.0-beta1...5.0.0-beta2)

### Added

* В `Biplane\YandexDirect\Api\V5\Report\FieldEnum` добавлены методы,
  которые позволяют сгенерировать поля для отчета, содержащие переменные.

    * `generateConversionRateFieldName(int $goalId, string $attributionModel): string`
    * `generateConversionsFieldName(int $goalId, string $attributionModel): string`
    * `generateCostPerConversionFieldName(int $goalId, string $attributionModel): string`
    * `generateGoalsRoiFieldName(int $goalId, string $attributionModel): string`
    * `generateRevenueFieldName(int $goalId, string $attributionModel): string`

### Changed

* В `Biplane\YandexDirect\Api\V5\Report\AttributionModelEnum` и `Biplane\YandexDirect\Api\V5\Report\FieldEnum`
  обновлены константы, добавлены недостающие и некоторые удалены, для полного соответствия
  спецификации сервиса Report.
* Обновлены DTO и сервисы для совместимости с последними изменениями в API,
  включая изменения от 2021-06-02.
* Метод `ApiSoapClientV5::getRequestId()` теперь не выбрасывает исключение,
  когда HTTP-ответ не содержит заголовок `RequestId`. Вместо этого будет возвращена пустая строка.

## 5.0.0-beta1

### Added

* `Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface` позволяет
  переопределить логику генерации значения для параметра `operation_num` для финансовых методов.

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
