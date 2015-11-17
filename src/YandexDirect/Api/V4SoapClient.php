<?php

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * V4SoapClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class V4SoapClient extends SoapClient
{
    private $requestId;

    public function __construct($wsdl, EventDispatcherInterface $dispatcher, User $user, array $options = array())
    {
        parent::__construct($wsdl, $dispatcher, $user, $options);

        $this->__setSoapHeaders(array(
            new \SoapHeader('API', 'locale', $user->getLocale()),
            new \SoapHeader('API', 'token', $user->getAccessToken())
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * {@inheritdoc}
     *
     * @internal
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        $this->requestId = md5($this->user->getHashCode() . ':' . time());

        $response = parent::__doRequest($request, $location, $action, $version, $oneWay);

        if (!empty($response)) {
            $xml = new \SimpleXMLElement($response);
            $nss = array_flip($xml->getDocNamespaces(true));
            $invalidNs = 'http://namespaces.soaplite.com/perl';

            if (isset($nss[$invalidNs]) && isset($nss['API'])) {
                $response = str_replace($nss[$invalidNs] . ':', $nss['API'] . ':', $response);
            }
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     *
     * @internal
     */
    public function __soapCall($methodName, $arguments, $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
        if ($this->isFinancialMethod($methodName, $arguments)) {
            $usedMethod = $methodName;

            if ($methodName === 'AccountManagement') {
                $usedMethod = $arguments[0]->getAction();
            }

            $operationNum = time();
            $financeToken = $this->user->createFinanceToken($usedMethod, $operationNum);

            if (!is_array($inputHeaders)) {
                $inputHeaders = array();
            }

            $inputHeaders[] = new \SoapHeader('API', 'finance_token', $financeToken);
            $inputHeaders[] = new \SoapHeader('API', 'operation_num', $operationNum);
        }

        return parent::__soapCall($methodName, $arguments, $options, $inputHeaders, $outputHeaders);
    }

    /**
     * {@inheritdoc}
     */
    protected function handleFault(\SoapFault $fault, $methodName, array $params)
    {
        $code = 0;
        $detail = property_exists($fault, 'detail') ? $fault->detail : null;

        if (false !== $pos = strrpos($fault->faultcode, ':')) {
            $code = (int)substr($fault->faultcode, $pos + 1);
        }

        return new ApiException($methodName, $detail ?: $fault->getMessage(), $code, $fault, $this->getRequestId());
    }

    private function isFinancialMethod($methodName, array $params)
    {
        if ($methodName === 'AccountManagement') {
            /** @var AccountManagementRequest $request */
            $request = $params[0];

            if (in_array($request->getAction(), array('Deposit', 'Invoice', 'TransferMoney'))) {
                return true;
            }
        }

        if (in_array($methodName, array(
            'TransferMoney',
            'GetCreditLimits',
            'CreateInvoice',
            'PayCampaigns',
        ))) {
            return true;
        }

        return false;
    }
}
