<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * SoapClient
 *
 * @author Denis Vasilev
 */
abstract class SoapClient extends \SoapClient
{
    protected $user;
    protected $dispatcher;

    /**
     * Gets the identifier of the latest request.
     *
     * @return string|null
     */
    abstract public function getRequestId();

    /**
     * Handles the fault.
     *
     * @param \SoapFault $fault     The thrown exception
     * @param string     $methodRef The fullname of called API method
     * @param array      $params    An array of parameters for API method
     *
     * @return \Exception
     */
    abstract protected function handleFault(\SoapFault $fault, $methodRef, array $params);

    /**
     * Constructor.
     *
     * @param string                   $wsdl       URI of the WSDL file
     * @param EventDispatcherInterface $dispatcher The event dispatcher
     * @param User                     $user       The profile
     * @param array                    $options    The options
     */
    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = array())
    {
        $defaults = array(
            'soap_version' => SOAP_1_1,
            'encoding'     => 'UTF-8',
            'trace'        => true,
            'exception'    => true,
            'cache_wsdl'   => version_compare(PHP_VERSION, '7.0') >= 0 ? WSDL_CACHE_DISK : WSDL_CACHE_BOTH,
            'features'     => SOAP_SINGLE_ELEMENT_ARRAYS,
        );

        parent::__construct($wsdl, $options + $user->getSoapOptions() + $defaults);

        $this->dispatcher = $dispatcher;
        $this->user = $user;
    }

    /**
     * Gets a content of the last request.
     *
     * @return string
     */
    public function getLastRequest()
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }

    /**
     * Gets a content of the last response.
     *
     * @return string
     */
    public function getLastResponse()
    {
        return $this->__getLastResponseHeaders() . "\n\n" . $this->__getLastResponse();
    }

    /**
     * Invokes API method with specified name.
     *
     * @param string $method A method name
     * @param array  $params An array of parameters for API method
     *
     * @throws \Exception
     *
     * @return mixed
     */
    protected function invoke($method, array $params = array())
    {
        $qualifiedClassName = get_class($this);

        if (false !== $pos = strrpos($qualifiedClassName, '\\')) {
            $methodRef = substr($qualifiedClassName, $pos + 1) . ':' . $method;
        } else {
            $methodRef = $qualifiedClassName . ':' . $method;
        }

        $this->dispatcher->dispatch(
            Events::BEFORE_REQUEST,
            new PreCallEvent($methodRef, $params, $this->user)
        );

        try {
            $response = $this->__soapCall($method, $params);
        } catch (\Exception $ex) {
            if ($ex instanceof \SoapFault) {
                if (strtolower($ex->faultcode) === 'http') {
                    $ex = new NetworkException($ex->getMessage(), 0, $ex);
                } else {
                    $ex = $this->handleFault($ex, $methodRef, $params);
                }
            }

            $this->dispatcher->dispatch(
                Events::FAIL_REQUEST,
                new FailCallEvent($methodRef, $params, $this->user, $this, $ex)
            );

            throw $ex;
        }

        $this->dispatcher->dispatch(
            Events::AFTER_REQUEST,
            new PostCallEvent($methodRef, $params, $this->user, $this, $response)
        );

        return $response;
    }
}
