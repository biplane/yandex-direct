<?php

namespace Biplane\YandexDirect\Auth\Exception;

use Buzz\Exception\ClientException;
use Buzz\Message\RequestInterface;
use Buzz\Message\Response;

/**
 * NetworkException
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class NetworkException extends \RuntimeException
{
    private $request;
    private $response;

    /**
     * Constructor.
     *
     * @param ClientException  $previous The thrown exception
     * @param RequestInterface $request  The request context
     * @param Response         $response The response
     */
    public function __construct(ClientException $previous, RequestInterface $request, Response $response)
    {
        parent::__construct($previous->getMessage(), $previous->getCode(), $previous);

        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Gets the request context.
     *
     * @return RequestInterface
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Gets the response.
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
