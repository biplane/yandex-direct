# BiplaneYandexDirect

Предоставляет инструменты для работы с API Яндекс.Директа.


## Установка

В `composer.json` необходимо добавить:

```
{
  ...
  "repositories: [{
    "type": "vcs",
    "url": "git@github.com:biplane/yandex-direct.git"
  }],
  ...
  "require": {
    ...
    "biplane/yandex-direct": "~3.0"
  }
}
```

И обновить пакеты:

```bash
$ composer install
```


## Использование

При использовании как отдельной библиотеки необходимо создать экземпляр `User`, где
в опциях необходимо передать Access Token, для авторизации на серверах API.

Через этот объект можно работать с сервисами API. Поддерживаемые версии: **4 Live** и **5**.

**Загрузка объявлений с использованием веб-сервиса [Ads](https://tech.yandex.ru/direct/doc/ref-v5/ads/ads-docpage/)**

В данном примере результатом будет массив всех включенных объявлений для рекламной кампании № 123.
Метод сервиса возвращает объект `GetAdResponse`, у которого есть метод `getAds`. Последний вернет
массив объектов `Biplane\YandexDirect\Api\V5\Contract\AdGetItem`.

```php
<?php

use Biplane\YandexDirect\Api\V5\Contract\AdFieldEnum;
use Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\Contract\GetAdRequest;
use Biplane\YandexDirect\Api\V5\Contract\StateEnum;
use Biplane\YandexDirect\User;

$user = new User(array(
    'access_token' => '<access_token>'
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


## Опции

При создании нового экземпляра класса `Biplane\YandexDirect\User`, первым аргументом
можно передать ассоциативный массив с опциями для данного экземпляра. Ниже перечислены
поддерживаемые опции:

**access_token** (обязательный параметр) - должен содержать маркер доступа для OAuth-авторизации. 
[Авторизационные токены](https://tech.yandex.ru/direct/doc/dg-v4/concepts/auth-token-docpage/)

**locale** (по умолчанию `en`) - задает язык ответных сообщений (статусы кампаний или баннеров; сообщения об ошибках). 
Доступные значения: `ru`, `ua` и `en`. Рекомендуется использовать константы `User::LOCALE_???`.

**master_token** - мастер-токен необходим для доступа к финансовым методам. 
[Доступ к финансовым методам](https://tech.yandex.ru/direct/doc/dg-v4/concepts/finance-token-docpage/)

**login** - логин, для которого задан **master_token**. Обязателен, если задан **master_token**.
Так же, эта опция **обязательна** при работе с API версии 5, когда используется **access_token**
для агентского аккаунта. В этом случае необходимо указывать клиентский логин, с рекламными кампаниями
которого подразумевается работать через API. Подробнее можно почитать [тут](https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#request).


## Обработчики событий

### ConcurrentListener

Позволяет контроллировать количество одновременных подключений к API для одного пользователя (`User`)
в рамках приложения. Если данный обработчик зарегестрирован, то перед каждым обращением к API будет 
запрашиваться блокировка, и только после успешного получения блокировки будет выполнен запрос к API. 

> Под ОС Windows работать не будет. Для работы данного функционала в PHP должно быть 
 доступно [расширение для работы с функциями System V](http://docs.php.net/manual/en/book.sem.php).
 
Если приложение работает только с одним экземпляром `User`, то зарегестрировать обработчик можно так:

```php
use Biplane\SysV\Factory;
use Biplane\YandexDirect\EventListener\ConcurrentListener;

$factory = new Factory('/var/ipc'); // задается директория, куда будут писаться файлы-токены
                                    // для формирования ключей для семейства функций System V IPC
                                    
$listener = new ConcurrentListener($factory, 10);

$user->getDispatcher()->addSubscriber($listener);
```

Вторым аргументом в конструктор передается число (от 1 до 12), указывающее на максимальное
количество одновременных запросов к API.

### DumpListener

Позволяет сохранять сетевую информацию, связанную с вызовом какого-либо метода API. Данный обработчик
сохраняет заголовки и контент HTTP-запроса и ответа от сервера на диске. Имена файлов будут
формироваться на основании ID запроса. 

Например, если идентификатор запроса — `f812d307e856329329f739a09ea7ee10`, то будут созданы два файла
в поддиректории, относительно указанной в конструкторе `DumpListener`:

    f8/1/f812d307e856329329f739a09ea7ee10_req.data
    f8/1/f812d307e856329329f739a09ea7ee10_resp.data

> Получить ID запроса в какой-либо части приложения, например чтобы записать в лог, можно через объект события, 
`FailCallEvent`, когда вызов метода API завершился с ошибкой, или `PostCallEvent`, когда вызов метода API 
завершился успешно. Необходимо написать свой обработчик событий и подписаться на события 
`biplane_yandex_direct.after_request` и `biplane_yandex_direct.fail_request`. 

Пример регистрации обработчика событий `DumpListener`, когда приложение работает с одним объектом `User`:

```php
use Biplane\YandexDirect\EventListener\DumpListener;

$listener = new DumpListener('/var/dumps');

$user->getDispatcher()->addSubscriber($listener);
```

Первым аргументом передаем путь, куда будут сохраняться файлы с дампом. 

Так же вторым аргументом можно указать какие именно запросы записывать. По умолчанию записываются все запросы. 
Используйте константы для данного аргумента:

 * `DumpListener::LEVEL_FAIL_REQUEST` - будут записываться только те вызовы API, которые завершились с ошибкой.
 
 * `DumpListener::LEVEL_ALL_REQUEST` - будут записываться все вызовы API.


## Интеграция с Symfony

Для интеграции в проект на Symfony можно использовать бандл - `BiplaneYandexDirectBundle`.

> NOTE: Бандл совместим с Symfony версии 2.3 и выше.
 

### Установка

Зарегестрируйте bundle в `app/AppKernel`:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Biplane\Bundle\YandexDirectBundle\BiplaneYandexDirectBundle(),
            // ...
        )
    };

### Конфигурация

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

Если не задавать `auth.app_id` и `auth.app_secret`, то сервис `biplane_yandex_direct.auth` будет недоступен.

В секции `biplane_yandex_direct.user` можно задать опции для доступа к API по умолчанию. Может быть удобно
в случаях, когда приложение работает только с одним Яндекс-аккаунтом. Не нужно придумывать, где хранить
маркер доступа и другие опции.


## Разработка

### Автоматическое тестирование

Для запуска unit-тестов необходим PHPUnit версии не ниже *3.5.10*.

Запуск набора тестов:

```bash
$ phpunit
```

Для изменения конфигурации PHPUnit для вашего окружения, скопируйте `phpunit.xml.dist`
в `phpunit.xml` и добавьте свои настройки в phpunit.xml.


## OAuth

Для получения авторизационного токена необходимо иметь идентификатор приложения (`application_id`).
Если его нет, необходимо сперва [зарегистрировать приложение](http://api.yandex.ru/oauth/doc/dg/tasks/register-client.xml).

> Если токен будет храниться в конфиге, то рекомендуется при регистрации приложения включить опцию *Клиент для разработки*

### Получение токена

Для получения токена необходимо в браузере перейти по этому адресу:

    https://oauth.yandex.ru/authorize?response_type=token&client_id=<client_id>

Где, `<client_id>` нужно заменить на идентификатор приложения.

Далее необходимо авторизоваться под аккаунтом Яндекса, для которого предоставляется доступ к API,
и поддтвердить доступ к Яндекс.Директу. После этого сервер перенаправит на страницу, и в адресе
будут добавлены параметры:

    #access_token=<token>[&expires_in=<seconds>][&state=<state>]

Значение `<token>` нужно сохранить в конфиге и в последствии использовать при создании экземпляра `User`.

[Официальная документация](http://api.yandex.ru/oauth/doc/dg/concepts/authorization-scheme.xml)
