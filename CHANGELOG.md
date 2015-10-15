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


## 2.0.0 [commit logs](https://github.com/biplane/BiplaneYandexDirectBundle/compare/1.0.0...2.0.0)

 * Переход на версию Live 4.

## 1.0.0 (2013-10-04)

 * Поддержка Яндекс.Директ API версии 4.
