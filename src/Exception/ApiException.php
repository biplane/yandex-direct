<?php

namespace Biplane\YandexDirect\Exception;

/**
 * Thrown when API returned error.
 *
 * @author Denis Vasilev
 */
class ApiException extends RequestException
{
    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_CAMPAIGN_ID = 1;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const CAMPAIGN_STATS_NOT_FOUND = 2;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_BANNER_ID = 23;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_BANNER = 27;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_PHRASE_ID = 28;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_CAMPAIGN_TYPE = 29;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const AUTHENTICATION_TEMPORARILY_UNAVAILABLE = 52;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const AUTHORIZATION_ERROR = 53;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INSUFFICIENT_PRIVILEGES = 54;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const EXCEEDED_LIMIT_REQUESTS = 56;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INCOMPLETE_REGISTRATION = 58;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INCORRECT_PARAMETERS = 71;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_ID_INVALID = 72;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_NOT_FOUND = 73;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_PENDING = 74;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_PHRASE_INVALID = 76;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_GEO_INVALID = 77;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORECAST_NOT_AVAILABLE = 78;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const WORDSTAT_REPORT_IS_BEING_GENERATED = 92;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_CAMPAIGN_INFO = 111;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const CAMPAIGNS_OVERFLOW = 114;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_BANNER_INFO = 151;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const DEFICIENCY_POINTS = 152;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const OVERFLOW_BANNERS = 153;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_POINTONMAP_STRUCT = 154;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const OPERATION_NOT_ALLOWED = 155;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORBIDDEN_CHANGE_ARCHIVED_ITEM = 156;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const CAMPAIGN_OVERFLOW_BANNERS = 157;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const FORBIDDEN_CHANGE_CONTEXT_PRICE = 191;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_MINUS_WORDS = 192;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_PRICE = 242;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_AUTOBROKER_STATE = 243;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const LOGIN_INVALID = 251;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const LOGIN_DUPLICATE = 252;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const LOGIN_CREATING_ERROR = 253;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const CLIENT_NOT_EXIST = 259;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_FINANCE_TOKEN = 350;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INVALID_FINANCE_NUMBER = 351;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INTERNAL_ERROR = 500;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const BAD_REQUEST = 501;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const TEMPORARILY_UNAVAILABLE = 503;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const EXCEEDED_LIMIT_CONCURRENT_REQUESTS = 506;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const ACCESS_DENIED = 510;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const LOGIN_NOT_CONNECTED_TO_DIRECT = 513;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const SERVER_TEMPORARILY_UNAVAILABLE = 1000;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INITIALIZATION_ERROR = 1001;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const OPERATION_ERROR = 1002;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const UNSUPPORTED = 3500;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const PARAMETERS_INCORRECT = 4000;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const ELEMENTS_OUT_OF_RANGE = 7000;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const EXCEEDED_MAX_NUMBER_OF_OBJECTS = 7001;

    /**
     * @deprecated Will be removed in version 5.0
     */
    const INCORRECT_REQUEST = 8000;

    /**
     * @deprecated Will be removed in version 5.0
     */
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
