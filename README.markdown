YandexDirectBundle
==================

Предоставляет инструменты для работы с API Яндекс.Директа.

Установка
---------

### A) Через composer

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
    "biplane/yandex-direct-bundle": "dev-master"
  }
}
```

И обновите пакеты:

```bash
$ composer update
```

### B) Без менеджера пакетов

Чтобы установить bundle, поместите его в vendor/bundles/Biplane/YandexDirectBundle вашего проекта.
Варианты подключения:

  1. Использование **submodule**

         git submodule add git@github.com:biplane/BiplaneYandexDirectBundle.git vendor/bundles/Biplane/YandexDirectBundle

  2. Использование скрипта **vendors**

     Нужно добавить следующие строчки в `deps` файл:

         [BiplaneYandexDirectBundle]
             git=git@github.com:biplane/BiplaneYandexDirectBundle.git
             target=/bundles/Biplane/YandexDirectBundle

     И запустить скрипт (для Win-платфоры необходимо указать интерпретатор - `php.exe`):

         ./bin/vendors install

Зарегестрируйте namespace в `app/autoload.php`:

    $loader->registerNamespaces(array(
        'Biplane'               => __DIR__.'/../vendor/bundles'
        // ...
    ));

Регистрация BiplaneYandexDirectBundle
-------------------------------------

Зарегестрируйте bundle в `app/AppKernel`:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Biplane\YandexDirectBundle\BiplaneYandexDirectBundle(),
            // ...
        )
    };

Конфигурация
------------

Пример конфигурации бандла:

```yml
biplane_yandex_direct:
    default_profile: foo
    application_id:  APpL1C4T10NiD
    profiles:
        foo:
            type:      soap
            locale:    ru
            is_agency: true
            cert:      path/to/local_cert.pem
        bar:
            type:   json
            locale: en
            login:  mr.bar
            token:  ACCESS-TOKEN
        # другие профили
```

> NOTE: В одном профиле может быть указан либо путь к сертификату (`cert`), либо
токен доступа (`token`) для OAuth авторизации.

**Параметр `type`**

Возможные значения: *soap* или *json*

В настоящий момент поддерживается только soap.

**Параметр `locale`**

Возможные значения: *ru*, *en* или *ua*

Данный параметр является необязательным. По умолчанию: *ru*.

**Параметр `is_agency`**

Возможные значения: *true* или *false*

Данный параметр является необязательным. По умолчанию: *false*.


Unit tests
----------

Для запуска unit-тестов необходим PHPUnit версии не ниже *3.5.10*.

Запуск набора тестов для бандла:

    cd vendor/bundles/Biplane/YandexDirectBundle
    phpunit

Для изменения конфигурации PHPUnit для вашего окружения, скопируйте `vendor/bundles/Biplane/YandexDirectBundle/phpunit.xml.dist`
в `vendor/bundles/Biplane/YandexDirectBundle/phpunit.xml` и добавьте свои настройки в phpunit.xml.


Поддержка OAuth
---------------

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

Значение `<token>` нужно сохранить в конфиге для соответствующего профиля.

[Официальная документация](http://api.yandex.ru/oauth/doc/dg/concepts/authorization-scheme.xml)
