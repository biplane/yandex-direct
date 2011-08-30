<?php

namespace Biplane\YandexDirectBundle\Exception;

/**
 * ApiException
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiException extends \RuntimeException
{
    private $apiMethod;

    /**
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     * @param string|null $apiMethod
     */
    public function __construct($message, $code = 0, \Exception $previous = null, $apiMethod = null)
    {
        parent::__construct($message, (int)$code, $previous);

        $this->apiMethod = $apiMethod;
    }

    /**
     * Creates a new instance of ApiException class.
     *
     * @param string $message
     * @param string|null $apiMethod
     * @param \Exception|null $previous
     * @return ApiException
     */
    public static function create($message, $apiMethod = null, \Exception $previous = null)
    {
        return new static($message, 0, $previous, $apiMethod);
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
}