# Changelog

## 3.0.0

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

        Biplane\YandexDirect\Api\V4\Exception\ApiException
        Biplane\YandexDirect\Api\V4\Exception\NetworkException
        Biplane\YandexDirect\Exception\AuthException
        Biplane\YandexDirect\Exception\NetworkException

   * Класс `Biplane\YandexDirectBundle\Exception\BuzzClientException` переименован в
     `Biplane\YandexDirect\Exception\NetworkException`.

   * У класса `ApiException` изменилась сигнатура конструктора.
   
   * Метод `ApiException::create` заменен на `ApiException::createFromFault`

     **Было**

            public static function create(
                ClientInterface $client,
                $apiMethod,
                $message,
                $code,
                $detailMessage = null,
                \Exception $previous = null
            )

     **Стало**

            public static function createFromFault(\SoapFault $fault, YandexApiService $proxy, $methodName)
            
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
        
   * Удален метод `getApiService`. Доступ к сервису API можно получить через метод `getUser`

        $event->getUser()->getApiService();
        
   * Метод `getConfiguration` переименован в `getUser`, который теперь возвращает объект `Biplane\YandexDirect\User`.
   
   * Добавлен метод `getMethodParams`, возвращающий массив с параметрами, 
     которые будут/были переданы при вызове метода API.

 * **[BC BREAK]** Изменилось пространство имен для `Authenticator`

   **Было**

        Biplane\YandexDirectBundle\Authenticator

   **Стало**

        Biplane\YandexDirect\Auth\Authenticator

 * **[BC BREAK]** Удалена поддержка JSON.
 * Удалена зависимость от библиотеки `biplane/common`.

## 2.0.0 [commit logs](https://github.com/biplane/BiplaneYandexDirectBundle/compare/1.0.0...2.0.0)

 * Переход на версию Live 4.

## 1.0.0 (2013-10-04)

 * Поддержка Яндекс.Директ API версии 4.
