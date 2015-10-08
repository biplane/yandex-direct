<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * SoapClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class SoapClient extends \SoapClient
{
    private $dispatcher;
    private $user;

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
            'cache_wsdl'   => WSDL_CACHE_BOTH,
            'features'     => SOAP_SINGLE_ELEMENT_ARRAYS,
        );

        parent::__construct($wsdl, $defaults + $options);

        $this->__setSoapHeaders(array(
            new \SoapHeader('API', 'locale', $user->getLocale()),
            new \SoapHeader('API', 'token', $user->getAccessToken())
        ));

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
        $this->dispatcher->dispatch(
            Events::BEFORE_REQUEST,
            new PreCallEvent($method, $params, $this->user)
        );

        $requestId = md5($this->user->getHashCode() . ':' . time());

        try {
            $headers = array();

            if ($this->isFinancialMethod($method)) {
                $operationNum = time();
                $financeToken = $this->user->createFinanceToken($method, $operationNum);

                $headers[] = new \SoapHeader('API', 'finance_token', $financeToken);
                $headers[] = new \SoapHeader('API', 'operation_num', $operationNum);
            }

            $response = $this->__soapCall($method, $params, array(), $headers);
        } catch (\Exception $ex) {
            if ($ex instanceof \SoapFault) {
                $ex = ApiException::createFromFault($ex, $method, $requestId);
            }

            $this->dispatcher->dispatch(
                Events::FAIL_REQUEST,
                new FailCallEvent($method, $params, $this->user, $requestId, $this, $ex)
            );

            throw $ex;
        }

        $this->dispatcher->dispatch(
            Events::AFTER_REQUEST,
            new PostCallEvent($method, $params, $this->user, $requestId, $this, $response)
        );

        return $response;
    }

    private function isFinancialMethod($methodName)
    {
        return in_array($methodName, array(
            'TransferMoney',
            'GetCreditLimits',
            'CreateInvoice',
            'PayCampaigns'
        ));
    }
}
