<?php

namespace Biplane\YandexDirect\Exception;

/**
 * Thrown when API returned error.
 *
 * @author Denis Vasilev
 */
class ApiException extends RequestException
{
    const INVALID_CAMPAIGN_ID = 1;
    const CAMPAIGN_STATS_NOT_FOUND = 2;
    const INVALID_BANNER_ID = 23;
    const INVALID_BANNER = 27;
    const INVALID_PHRASE_ID = 28;
    const INVALID_CAMPAIGN_TYPE = 29;
    const AUTHENTICATION_TEMPORARILY_UNAVAILABLE = 52;
    const AUTHORIZATION_ERROR = 53;
    const INSUFFICIENT_PRIVILEGES = 54;
    const EXCEEDED_LIMIT_REQUESTS = 56;
    const INCOMPLETE_REGISTRATION = 58;
    const INCORRECT_PARAMETERS = 71;
    const FORECAST_ID_INVALID = 72;
    const FORECAST_NOT_FOUND = 73;
    const FORECAST_PENDING = 74;
    const FORECAST_PHRASE_INVALID = 76;
    const FORECAST_GEO_INVALID = 77;
    const FORECAST_NOT_AVAILABLE = 78;
    const INVALID_CAMPAIGN_INFO = 111;
    const CAMPAIGNS_OVERFLOW = 114;
    const INVALID_BANNER_INFO = 151;
    const DEFICIENCY_POINTS = 152;
    const OVERFLOW_BANNERS = 153;
    const INVALID_POINTONMAP_STRUCT = 154;
    const OPERATION_NOT_ALLOWED = 155;
    const FORBIDDEN_CHANGE_ARCHIVED_ITEM = 156;
    const CAMPAIGN_OVERFLOW_BANNERS = 157;
    const FORBIDDEN_CHANGE_CONTEXT_PRICE = 191;
    const INVALID_MINUS_WORDS = 192;
    const INVALID_PRICE = 242;
    const INVALID_AUTOBROKER_STATE = 243;
    const LOGIN_INVALID = 251;
    const LOGIN_DUPLICATE = 252;
    const LOGIN_CREATING_ERROR = 253;
    const CLIENT_NOT_EXIST = 259;
    const INVALID_FINANCE_TOKEN = 350;
    const INVALID_FINANCE_NUMBER = 351;
    const INTERNAL_ERROR = 500;
    const BAD_REQUEST = 501;
    const TEMPORARILY_UNAVAILABLE = 503;
    const EXCEEDED_LIMIT_CONCURRENT_REQUESTS = 506;
    const ACCESS_DENIED = 510;
    const LOGIN_NOT_CONNECTED_TO_DIRECT = 513;
    const SERVER_TEMPORARILY_UNAVAILABLE = 1000;
    const INITIALIZATION_ERROR = 1001;
    const OPERATION_ERROR = 1002;
    const UNSUPPORTED = 3500;
    const PARAMETERS_INCORRECT = 4000;
    const ELEMENTS_OUT_OF_RANGE = 7000;
    const EXCEEDED_MAX_NUMBER_OF_OBJECTS = 7001;
    const INCORRECT_REQUEST = 8000;
    const ENTITY_DUPLICATED = 9800;

    private $methodRef;
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
}
