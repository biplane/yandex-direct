<?php

namespace Biplane\YandexDirect\Api\V4\Exception;

use Biplane\YandexDirect\Api\V4\YandexApiService;

/**
 * ApiException
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiException extends \RuntimeException
{
    /**
     * Неверный идентификатор кампании CampaignID.
     */
    const INVALID_CAMPAIGN_ID = 1;

    /**
     * Нет статистики для данной кампании.
     */
    const CAMPAIGN_STATS_NOT_FOUND = 2;

    /**
     * Неверный BannerID.
     */
    const INVALID_BANNER_ID = 23;

    /**
     * Неверно задан параметр BannerID.
     */
    const INVALID_BANNER = 27;

    /**
     * Неверно задан параметр PhraseID.
     */
    const INVALID_PHRASE_ID = 28;

    /**
     * Неверно указан тип кампании.
     */
    const INVALID_CAMPAIGN_TYPE = 29;

    /**
     * Аутентификация временно недоступна.
     */
    const AUTHENTICATION_TEMPORARILY_UNAVAILABLE = 52;

    /**
     * Ошибка авторизации.
     */
    const AUTHORIZATION_ERROR = 53;

    /**
     * Недостаточно прав.
     */
    const INSUFFICIENT_PRIVILEGES = 54;

    /**
     * Превышен лимит запросов.
     */
    const EXCEEDED_LIMIT_REQUESTS = 56;

    /**
     * Параметры запроса указаны неверно.
     */
    const INCORRECT_PARAMETERS = 71;

    /**
     * Неверный номер заявки на составление прогноза — параметр ForecastID.
     */
    const FORECAST_ID_INVALID = 72;

    /**
     * Прогноза бюджета с указанным идентификатором не создан.
     */
    const FORECAST_NOT_FOUND = 73;

    /**
     * Формирование прогноза бюджета не закончено.
     */
    const FORECAST_PENDING = 74;

    /**
     * Неверно задана фраза для расчета прогноза бюджета — параметр Phrases.
     */
    const FORECAST_PHRASE_INVALID = 76;

    /**
     * Неверно заданы регионы показа объявлений — параметр GeoID.
     */
    const FORECAST_GEO_INVALID = 77;

    /**
     * Отчет временно недоступен.
     */
    const FORECAST_NOT_AVAILABLE = 78;

    /**
     * Неверно указаны параметры кампании.
     */
    const INVALID_CAMPAIGN_INFO = 111;

    /**
     * Превышен лимит количества кампаний.
     */
    const CAMPAIGNS_OVERFLOW = 114;

    /**
     * Неправильно описана структура BannerInfo.
     */
    const INVALID_BANNER_INFO = 151;

    /**
     * Недостаточно баллов.
     */
    const DEFICIENCY_POINTS = 152;

    /**
     * Превышен лимит баннеров в запросе.
     */
    const OVERFLOW_BANNERS = 153;

    /**
     * Структура PointOnMap заполнена неверно.
     */
    const INVALID_POINTONMAP_STRUCT = 154;

    /**
     * Операция для рекламной кампании или объявления недоступна.
     */
    const OPERATION_NOT_ALLOWED = 155;

    /**
     * Не позволяется изменение архивных кампаний или объявлений.
     */
    const FORBIDDEN_CHANGE_ARCHIVED_ITEM = 156;

    /**
     * Превышен лимит объявлений в кампании.
     */
    const CAMPAIGN_OVERFLOW_BANNERS = 157;

    /**
     * Запрещено менять ContextPrice для активных на поиске фраз.
     */
    const FORBIDDEN_CHANGE_CONTEXT_PRICE = 191;

    /**
     * Неверно указаны минус-слова.
     */
    const INVALID_MINUS_WORDS = 192;

    /**
     * Неверно указана цена.
     */
    const INVALID_PRICE = 242;

    /**
     * Неверно указано значение поля Autobroker.
     */
    const INVALID_AUTOBROKER_STATE = 243;

    /**
     * Неверный логин пользователя.
     */
    const LOGIN_INVALID = 251;

    /**
     * Логин используется на Яндексе другим пользователем.
     */
    const LOGIN_DUPLICATE = 252;

    /**
     * Указанный логин занят.
     */
    const LOGIN_CREATING_ERROR = 253;

    /**
     * Клиент не существует.
     */
    const CLIENT_NOT_EXIST = 259;

    /**
     * Неверный токен для финансовых операций.
     */
    const INVALID_FINANCE_TOKEN = 350;

    /**
     * Неверный номер финансовой операции.
     */
    const INVALID_FINANCE_NUMBER = 351;

    /**
     * Внутренняя ошибка сервера.
     */
    const INTERNAL_ERROR = 500;

    /**
     * Неверный запрос.
     */
    const BAD_REQUEST = 501;

    /**
     * Сервис временно недоступен.
     */
    const TEMPORARILY_UNAVAILABLE = 503;

    /**
     * Превышен лимит одновременных запросов.
     */
    const EXCEEDED_LIMIT_CONCURRENT_REQUESTS = 506;

    /**
     * Доступ заблокирован.
     */
    const ACCESS_DENIED = 510;

    /**
     * Ваш логин не подключен к Яндекс.Директу.
     */
    const LOGIN_NOT_CONNECTED_TO_DIRECT = 513;

    protected $proxy;

    private $apiMethod;
    private $detailMessage;

    /**
     * Constructor.
     *
     * @param string           $methodName The method name of API
     * @param string           $message    The message
     * @param string           $detail     The additional message
     * @param int              $code       The number of code exception
     * @param \Exception|null  $previous   The previous exception
     * @param YandexApiService $proxy      The proxy of API
     */
    public function __construct(
        $methodName,
        $message,
        $detail = null,
        $code = 0,
        \Exception $previous = null,
        YandexApiService $proxy = null
    ) {
        parent::__construct($message, (int)$code, $previous);

        $this->apiMethod = $methodName;
        $this->proxy = $proxy;
        $this->detailMessage = $detail;
    }

    /**
     * Creates a new instance of exception by SoapFault object.
     *
     * @param \SoapFault       $fault      The fault
     * @param YandexApiService $proxy      The proxy of API
     * @param string           $methodName The method name of API
     *
     * @return self
     */
    public static function createFromFault(\SoapFault $fault, YandexApiService $proxy, $methodName)
    {
        if (strtolower($fault->faultcode) === 'http') {
            return new NetworkException($methodName, $fault->getMessage(), null, 0, $fault, $proxy);
        }

        $code = 0;
        $message = $fault->getMessage();
        $detail = property_exists($fault, 'detail') ? $fault->detail : null;

        if (false !== $pos = strrpos($fault->faultcode, ':')) {
            $code = substr($fault->faultcode, $pos + 1);
        }

        if (!empty($detail)) {
            $message .= "\nDetail: " . $detail;
        }

        return new self($methodName, $message, $detail, $code, $fault, $proxy);
    }

    /**
     * Gets a method name of API.
     *
     * @return string|null
     */
    public function getMethodName()
    {
        return $this->apiMethod;
    }

    /**
     * Gets the request content with headers.
     *
     * @return string|null The raw request or null
     */
    public function getRequest()
    {
        if ($this->proxy !== null) {
            return $this->proxy->getLastRequest();
        }

        return null;
    }

    /**
     * Gets the response content with headers.
     *
     * @return string|null The raw response or null
     */
    public function getResponse()
    {
        if ($this->proxy !== null) {
            return $this->proxy->getLastResponse();
        }

        return null;
    }

    /**
     * Gets the detail message.
     *
     * @return string
     */
    public function getDetailMessage()
    {
        return $this->detailMessage;
    }
}
