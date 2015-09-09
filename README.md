# BiplaneYandexDirect

Предоставляет инструменты для работы с API Яндекс.Директа.

## Установка

В `composer.json` необходимо добавить:

```
{
  ...
  "repositories: [{
    "type": "vcs",
    "url": "git@github.com:biplane/BiplaneYandexDirectBundle.git"
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
