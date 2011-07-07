YandexDirectBundle
==================

Предоставляет инструменты по работе с API Яндекс.Директа.

Установка
---------

Чтобы установить bundle, поместите его в vendor/bundles/Biplane/YandexDirectBundle вашего проекта.
Варианты подключения:

  1. Использование **submodule**

        git submodule add git@git.assembla.com:yandexdirectbundle.git vendor/bundles/Biplane/YandexDirectBundle

  2. Использование скрипта **vendors**

     Нужно добавить следующие строчки в `deps` файл:

        [BiplaneYandexDirectBundle]
            git=git@git.assembla.com:yandexdirectbundle.git
            target=/bundles/Biplane/YandexDirectBundle

     И запустить скрипт (для Win-платфоры необходимо указать интерпретатор - `php.exe`):

        ./bin/vendors install

Зарегестрируйте bundle в `app/AppKernel`:

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Biplane\YandexDirectBundle\BiplaneYandexDirectBundle(),
            // ...
        )
    };

Зарегестрируйте namespace в `app/autoload.php`:

    $loader->registerNamespaces(array(
        'Biplane'               => __DIR__.'/../vendor/bundles'
        // ...
    ));


Конфигурация
------------

Пример конфигурации бандла:

    biplane_yandex_direct:
        default_profile: foo
        profiles:
            foo:
                type:      soap
                locale:    ru
                is_agency: true
                cert:
                    local_cert: path/to/local_cert.pem
            bar:
                type:  json
                token:
                    login:          yandex_login
                    application_id: APPLICATIONID
                    token:          TOKEN
            # другие профили

*В каждом профиле может быть указан только один тип авторизации, `cert` или `token`.*

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