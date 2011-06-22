YandexDirectBundle
==================

Предоставляет инструменты по работе с API Яндекс.Директа.

Установка
---------

Чтобы установить bundle, поместите его в vendor/bundles/Biplane/YandexDirectBundle вашего проекта.
Можно подключить как submodule или просто скопировать исходники.

    git submodule add git@git.assembla.com:yandexdirectbundle.git vendor/bundles/Biplane/YandexDirectBundle

**Подключение бандла**

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