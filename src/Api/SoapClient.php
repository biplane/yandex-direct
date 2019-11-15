<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * SoapClient.
 *
 * @author Denis Vasilev
 */
abstract class SoapClient extends \SoapClient implements ClientInterface
{
    protected $user;
    protected $dispatcher;

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
     * Gets an information about units.
     *
     * @return Units|null
     */
    abstract protected function fetchUtits();

    /**
     * Constructor.
     *
     * @param string                   $wsdl       URI of the WSDL file
     * @param EventDispatcherInterface $dispatcher The event dispatcher
     * @param User                     $user       The profile
     * @param array                    $options    The options
     */
    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = [])
    {
        $defaults = [
            'soap_version' => SOAP_1_1,
            'encoding' => 'UTF-8',
            'trace' => true,
            'exception' => true,
            'cache_wsdl' => WSDL_CACHE_DISK,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ];

        parent::__construct($wsdl, array_merge($defaults, $user->getSoapOptions(), $options));

        $this->dispatcher = $dispatcher;
        $this->user = $user;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRequest()
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }

    /**
     * {@inheritdoc}
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
    protected function invoke($method, array $params = [])
    {
        $qualifiedClassName = get_class($this);

        if (false !== $pos = strrpos($qualifiedClassName, '\\')) {
            $methodRef = substr($qualifiedClassName, $pos + 1) . ':' . $method;
        } else {
            $methodRef = $qualifiedClassName . ':' . $method;
        }

        $invoker = $this->user->getInvoker();

        return $invoker(function () use ($methodRef, $method, $params) {
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
                    new FailCallEvent($methodRef, $params, $this->user, $this, $ex, $this->fetchUtits())
                );

                throw $ex;
            }

            $this->dispatcher->dispatch(
                Events::AFTER_REQUEST,
                new PostCallEvent($methodRef, $params, $this->user, $this, $response, $this->fetchUtits())
            );

            return $response;
        });
    }
}
