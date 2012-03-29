<?php

namespace Biplane\YandexDirectBundle\Exception;

use Biplane\YandexDirectBundle\Proxy\Client\ClientInterface;

/**
 * ApiException
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiException extends \RuntimeException
{
    /**
     * Нет статистики для данной кампании.
     */
    const CAMPAIGN_STATS_NOT_FOUND = 2;

    /**
     * Ошибка авторизации
     */
    const AUTHORIZATION_ERROR = 53;
    /**
     * Недостаточно прав
     */
    const INSUFFICIENT_PRIVILEGES = 54;

    /**
     * Неверный токен для финансовых операций
     */
    const INVALID_FINANCE_TOKEN = 350;
    /**
     * Неверный номер финансовой операции
     */
    const INVALID_FINANCE_NUMBER = 351;

    /**
     * Внутренняя ошибка сервера
     */
    const INTERNAL_ERROR = 500;
    /**
     * Неверный запрос
     */
    const BAD_REQUEST = 501;
    /**
     * Превышен лимит одновременных запросов
     */
    const EXCEEDED_LIMIT_CONCURRENT_REQUESTS = 506;
    /**
     * Доступ заблокирован
     */
    const ACCESS_DENIED = 510;

    protected $client;

    private $apiMethod;

    /**
     * Constructor.
     *
     * @param string          $message   The message
     * @param int             $code      The number of code exception
     * @param \Exception|null $previous  The previous exception
     * @param string          $apiMethod The name of API method
     * @param ClientInterface $clien     A ClientInterface instance
     */
    public function __construct($message, $code = 0, \Exception $previous = null, $apiMethod = null, ClientInterface $client = null)
    {
        parent::__construct($message, (int)$code, $previous);

        $this->apiMethod = $apiMethod;
        $this->client = $client;
    }

    /**
     * Creates a new instance of ApiException class.
     *
     * @param ClientInterface $clien     A ClientInterface instance
     * @param string          $apiMethod The name of API method
     * @param string          $message   The message
     * @param int             $code      The number of code exception
     * @param \Exception|null $previous  The previous exception
     *
     * @return ApiException
     */
    public static function create(ClientInterface $client, $apiMethod, $message, $code, \Exception $previous = null)
    {
        return new static($message, $code, $previous, $apiMethod, $client);
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
        if ($this->client !== null) {
            return $this->client->getLastRequest();
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
        if ($this->client !== null) {
            return $this->client->getLastResponse();
        }

        return null;
    }
}