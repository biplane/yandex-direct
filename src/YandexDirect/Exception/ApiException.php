<?php

namespace Biplane\YandexDirect\Exception;

/**
 * Thrown when API returned error.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiException extends RequestException
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

    private $methodRef;
    private $detailMessage;
    private $requestId;

    /**
     * Constructor.
     *
     * @param string          $methodRef The fullname of called API method
     * @param string          $message   The message
     * @param int             $code      The number of code exception
     * @param \Exception|null $previous  The previous exception
     * @param string          $requestId The request identifier
     */
    public function __construct(
        $methodRef,
        $message,
        $code = 0,
        \Exception $previous = null,
        $requestId = null
    ) {
        parent::__construct($message, (int)$code, $previous);

        $this->methodRef = $methodRef;
        $this->requestId = $requestId;
    }

    /**
     * Gets the request identifier.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Gets the name of called method of API.
     *
     * @return string|null
     */
    public function getMethodName()
    {
        if (!empty($this->methodRef)) {
            return substr($this->methodRef, strpos($this->methodRef, ':') + 1);
        }

        return null;
    }

    /**
     * Gets the reference of called API method.
     *
     * Returns string in format {ServiceName}:{MethodName}
     *
     * @return string
     */
    public function getMethodRef()
    {
        return $this->methodRef;
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
