<?php

namespace Biplane\YandexDirectBundle\Proxy\Client;

use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;
use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Biplane\YandexDirectBundle\Exception\ApiException;
use Biplane\YandexDirectBundle\Exception\NetworkException;
use Biplane\YandexDirectBundle\Factory\ConverterFactory;

/**
 * SoapClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 * @author Alexey Popikov <a.popkov@biplane.ru>
 */
class SoapClient extends \SoapClient implements ClientInterface
{
    const ENDPOINT = 'http://soap.direct.yandex.ru/live/v4/wsdl/';
    const API_NS = 'API';
    const INVALID_NS = 'http://namespaces.soaplite.com/perl';

    private static $classmap = array(
        'NewReportFilterInfo' => 'Biplane\YandexDirectBundle\Contract\NewReportFilterInfo',
        'NewReportInfo' => 'Biplane\YandexDirectBundle\Contract\NewReportInfo',
        'TimeZoneInfo' => 'Biplane\YandexDirectBundle\Contract\TimeZoneInfo',
        'StatGoalsCampaignIDInfo' => 'Biplane\YandexDirectBundle\Contract\StatGoalsCampaignIDInfo',
        'CampaignIDInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignIDInfo',
        'CampaignIDSInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignIDSInfo',
        'CampaignInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignInfo',
        'CampaignStrategy' => 'Biplane\YandexDirectBundle\Contract\CampaignStrategy',
        'CampaignContextStrategy' => 'Biplane\YandexDirectBundle\Contract\CampaignContextStrategy',
        'SmsNotificationInfo' => 'Biplane\YandexDirectBundle\Contract\SmsNotificationInfo',
        'EmailNotificationInfo' => 'Biplane\YandexDirectBundle\Contract\EmailNotificationInfo',
        'CampaignBalanceInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignBalanceInfo',
        'ShortCampaignInfo' => 'Biplane\YandexDirectBundle\Contract\ShortCampaignInfo',
        'ClientsUnitInfo' => 'Biplane\YandexDirectBundle\Contract\ClientsUnitInfo',
        'RubricInfo' => 'Biplane\YandexDirectBundle\Contract\RubricInfo',
        'ForecastStatusInfo' => 'Biplane\YandexDirectBundle\Contract\ForecastStatusInfo',
        'ReportInfo' => 'Biplane\YandexDirectBundle\Contract\ReportInfo',
        'GetSummaryStatRequest' => 'Biplane\YandexDirectBundle\Contract\GetSummaryStatRequest',
        'StatItem' => 'Biplane\YandexDirectBundle\Contract\StatItem',
        'ContactInfo' => 'Biplane\YandexDirectBundle\Contract\ContactInfo',
        'RegionInfo' => 'Biplane\YandexDirectBundle\Contract\RegionInfo',
        'MapPoint' => 'Biplane\YandexDirectBundle\Contract\MapPoint',
        'TimeTargetInfo' => 'Biplane\YandexDirectBundle\Contract\TimeTargetInfo',
        'TimeTargetItem' => 'Biplane\YandexDirectBundle\Contract\TimeTargetItem',
        'CoverageInfo' => 'Biplane\YandexDirectBundle\Contract\CoverageInfo',
        'BannerPhrasesFilterRequestInfo' => 'Biplane\YandexDirectBundle\Contract\BannerPhrasesFilterRequestInfo',
        'PhrasePriceInfo' => 'Biplane\YandexDirectBundle\Contract\PhrasePriceInfo',
        'BannerPhraseInfo' => 'Biplane\YandexDirectBundle\Contract\BannerPhraseInfo',
        'PhraseUserParams' => 'Biplane\YandexDirectBundle\Contract\PhraseUserParams',
        'TransferMoneyInfo' => 'Biplane\YandexDirectBundle\Contract\TransferMoneyInfo',
        'PayCampElement' => 'Biplane\YandexDirectBundle\Contract\PayCampElement',
        'CreateInvoiceInfo' => 'Biplane\YandexDirectBundle\Contract\CreateInvoiceInfo',
        'PayCampaignsInfo' => 'Biplane\YandexDirectBundle\Contract\PayCampaignsInfo',
        'BannerInfo' => 'Biplane\YandexDirectBundle\Contract\BannerInfo',
        'Sitelink' => 'Biplane\YandexDirectBundle\Contract\Sitelink',
        'RejectReason' => 'Biplane\YandexDirectBundle\Contract\RejectReason',
        'CampaignBidsInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignBidsInfo',
        'GetCampaignsInfo' => 'Biplane\YandexDirectBundle\Contract\GetCampaignsInfo',
        'CampaignsFilterInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignsFilterInfo',
        'BannersFilterInfo' => 'Biplane\YandexDirectBundle\Contract\BannersFilterInfo',
        'GetBannersInfo' => 'Biplane\YandexDirectBundle\Contract\GetBannersInfo',
        'NewForecastInfo' => 'Biplane\YandexDirectBundle\Contract\NewForecastInfo',
        'ForecastCommonInfo' => 'Biplane\YandexDirectBundle\Contract\ForecastCommonInfo',
        'GetForecastInfo' => 'Biplane\YandexDirectBundle\Contract\GetForecastInfo',
        'NewWordstatReportInfo' => 'Biplane\YandexDirectBundle\Contract\NewWordstatReportInfo',
        'WordstatReportStatusInfo' => 'Biplane\YandexDirectBundle\Contract\WordstatReportStatusInfo',
        'WordstatReportInfo' => 'Biplane\YandexDirectBundle\Contract\WordstatReportInfo',
        'WordstatItem' => 'Biplane\YandexDirectBundle\Contract\WordstatItem',
        'StatGoalInfo' => 'Biplane\YandexDirectBundle\Contract\StatGoalInfo',
        'AutoPriceInfo' => 'Biplane\YandexDirectBundle\Contract\AutoPriceInfo',
        'ClientInfo' => 'Biplane\YandexDirectBundle\Contract\ClientInfo',
        'ShortClientInfo' => 'Biplane\YandexDirectBundle\Contract\ShortClientInfo',
        'GetSubClientsRequest' => 'Biplane\YandexDirectBundle\Contract\GetSubClientsRequest',
        'ClientInfoRequest' => 'Biplane\YandexDirectBundle\Contract\ClientInfoRequest',
        'ClientFilter' => 'Biplane\YandexDirectBundle\Contract\ClientFilter',
        'ClientRight' => 'Biplane\YandexDirectBundle\Contract\ClientRight',
        'VersionDesc' => 'Biplane\YandexDirectBundle\Contract\VersionDesc',
        'KeywordsSuggestionInfo' => 'Biplane\YandexDirectBundle\Contract\KeywordsSuggestionInfo',
        'GetEventsLogRequest' => 'Biplane\YandexDirectBundle\Contract\GetEventsLogRequest',
        'GetEventsLogFilter' => 'Biplane\YandexDirectBundle\Contract\GetEventsLogFilter',
        'EventsLogItem' => 'Biplane\YandexDirectBundle\Contract\EventsLogItem',
        'EventsLogItemAttributes' => 'Biplane\YandexDirectBundle\Contract\EventsLogItemAttributes',
        'CampaignTagsInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignTagsInfo',
        'TagInfo' => 'Biplane\YandexDirectBundle\Contract\TagInfo',
        'BannersRequestInfo' => 'Biplane\YandexDirectBundle\Contract\BannersRequestInfo',
        'BannerTagsInfo' => 'Biplane\YandexDirectBundle\Contract\BannerTagsInfo',
        'BannersStatItem' => 'Biplane\YandexDirectBundle\Contract\BannersStatItem',
        'GetBannersStatResponse' => 'Biplane\YandexDirectBundle\Contract\GetBannersStatResponse',
        'GetChangesRequest' => 'Biplane\YandexDirectBundle\Contract\GetChangesRequest',
        'GetChangesResponse' => 'Biplane\YandexDirectBundle\Contract\GetChangesResponse',
        'GetChangesIntData' => 'Biplane\YandexDirectBundle\Contract\GetChangesIntData',
        'GetChangesStringData' => 'Biplane\YandexDirectBundle\Contract\GetChangesStringData',
        'CampaignStatChangeItem' => 'Biplane\YandexDirectBundle\Contract\CampaignStatChangeItem',
        'CreateNewSubclientRequest' => 'Biplane\YandexDirectBundle\Contract\CreateNewSubclientRequest',
        'CreateNewSubclientResponse' => 'Biplane\YandexDirectBundle\Contract\CreateNewSubclientResponse',
        'CreditLimitsInfo' => 'Biplane\YandexDirectBundle\Contract\CreditLimitsInfo',
        'CreditLimitsItem' => 'Biplane\YandexDirectBundle\Contract\CreditLimitsItem',
        'Error' => 'Biplane\YandexDirectBundle\Contract\Error',
        'Warning' => 'Biplane\YandexDirectBundle\Contract\Warning',
        'GetRetargetingGoalsRequest' => 'Biplane\YandexDirectBundle\Contract\GetRetargetingGoalsRequest',
        'RetargetingGoal' => 'Biplane\YandexDirectBundle\Contract\RetargetingGoal',
        'RetargetingConditionRequest' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionRequest',
        'RetargetingCondition' => 'Biplane\YandexDirectBundle\Contract\RetargetingCondition',
        'RetargetingConditionItem' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionItem',
        'RetargetingConditionGoalItem' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionGoalItem',
        'RetargetingConditionSelectionCriteria' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionSelectionCriteria',
        'RetargetingConditionActionResult' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionActionResult',
        'RetargetingConditionResponse' => 'Biplane\YandexDirectBundle\Contract\RetargetingConditionResponse',
        'RetargetingRequest' => 'Biplane\YandexDirectBundle\Contract\RetargetingRequest',
        'RetargetingRequestOptions' => 'Biplane\YandexDirectBundle\Contract\RetargetingRequestOptions',
        'Retargeting' => 'Biplane\YandexDirectBundle\Contract\Retargeting',
        'RetargetingSelectionCriteria' => 'Biplane\YandexDirectBundle\Contract\RetargetingSelectionCriteria',
        'RetargetingActionResult' => 'Biplane\YandexDirectBundle\Contract\RetargetingActionResult',
        'RetargetingResponse' => 'Biplane\YandexDirectBundle\Contract\RetargetingResponse',
        'AdImageRequest' => 'Biplane\YandexDirectBundle\Contract\AdImageRequest',
        'AdImageSelectionCriteria' => 'Biplane\YandexDirectBundle\Contract\AdImageSelectionCriteria',
        'AdImageRaw' => 'Biplane\YandexDirectBundle\Contract\AdImageRaw',
        'AdImageURL' => 'Biplane\YandexDirectBundle\Contract\AdImageURL',
        'AdImageResponse' => 'Biplane\YandexDirectBundle\Contract\AdImageResponse',
        'AdImageLimit' => 'Biplane\YandexDirectBundle\Contract\AdImageLimit',
        'AdImage' => 'Biplane\YandexDirectBundle\Contract\AdImage',
        'AdImageUpload' => 'Biplane\YandexDirectBundle\Contract\AdImageUpload',
        'AdImageActionResult' => 'Biplane\YandexDirectBundle\Contract\AdImageActionResult',
        'AdImageAssociationRequest' => 'Biplane\YandexDirectBundle\Contract\AdImageAssociationRequest',
        'AdImageAssociationSelectionCriteria' => 'Biplane\YandexDirectBundle\Contract\AdImageAssociationSelectionCriteria',
        'AdImageAssociation' => 'Biplane\YandexDirectBundle\Contract\AdImageAssociation',
        'AdImageAssociationResponse' => 'Biplane\YandexDirectBundle\Contract\AdImageAssociationResponse',
        'AdImageAssociationActionResult' => 'Biplane\YandexDirectBundle\Contract\AdImageAssociationActionResult'
    );

    private $converterFactory;
    private $configuration;

    /**
     * Constructor.
     *
     * @param BaseConfiguration $configuration    The configuration
     * @param ConverterFactory  $converterFactory A ConverterFactory instance
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(BaseConfiguration $configuration, ConverterFactory $converterFactory)
    {
        $this->configuration = $configuration;
        $this->converterFactory = $converterFactory;

        $options = array(
            'classmap'     => self::$classmap,
            'soap_version' => SOAP_1_1,
            'encoding'     => 'UTF-8',
            'trace'        => true,
            'exception'    => true,
            'cache_wsdl'   => WSDL_CACHE_BOTH
        );

        $headers = array(new \SoapHeader(self::API_NS, 'locale', $configuration->getLocale()));

        if ($configuration instanceof CertificateConfiguration) {
            $options['local_cert'] = $configuration->getHttpsCertificate();
            $options['passprase'] = $configuration->getPassphrase();
        } else if ($configuration instanceof AuthTokenConfiguration) {
            $headers[] = new \SoapHeader(self::API_NS, 'login', $configuration->getYandexLogin());
            $headers[] = new \SoapHeader(self::API_NS, 'token', $configuration->getToken());
            $headers[] = new \SoapHeader(self::API_NS, 'application_id', $configuration->getApplicationId());
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Configuration type "%" is not supported.', get_class($configuration)
            ));
        }

        if ($configuration->getProxyHost() !== null) {
            $options['proxy_host'] = $configuration->getProxyHost();
            $options['proxy_port'] = $configuration->getProxyPort();
        }

        parent::__construct(self::ENDPOINT, $options);

        $this->__setSoapHeaders($headers);
    }

    /**
     * Performs a SOAP request.
     *
     * @param string $request  The XML SOAP request.
     * @param string $location The URL to request.
     * @param string $action   The SOAP action.
     * @param int    $version  The SOAP version.
     * @param int    $oneWay   If one_way is set to 1, this method returns nothing.
     *                         Use this where a response is not expected.
     *
     * @return string The XML SOAP response.
     *
     * @internal
     */
    public function __doRequest($request, $location, $action, $version, $oneWay = null)
    {
        $response = parent::__doRequest($request, $location, $action, $version, $oneWay);

        if (!empty($response)) {
            $xml = new \SimpleXMLElement($response);
            $nss = array_flip($xml->getDocNamespaces(true));

            if (isset($nss[self::INVALID_NS]) && isset($nss[self::API_NS])) {
                $response = str_replace($nss[self::INVALID_NS].':', $nss[self::API_NS].':', $response);
            }
        }

        return $response;
    }

    /**
     * Invokes API method with specified name.
     *
     * @param string $methodName        A method name
     * @param array  $params            An array of parameters for API method
     * @param bool   $isFinancialMethod If true, when should be send the finance token
     *
     * @return mixed
     *
     * @throws NetworkException
     * @throws ApiException
     */
    public function invoke($methodName, array $params, $isFinancialMethod = false)
    {
        $headers = array();
        if ($isFinancialMethod) {
            $operationNum = time();
            $financeToken = $this->configuration->createFinanceToken($methodName, $operationNum);

            $headers[] = new \SoapHeader(self::API_NS, 'finance_token', $financeToken);
            $headers[] = new \SoapHeader(self::API_NS, 'operation_num', $operationNum);
        }

        try {
            $result = $this->__soapCall($methodName, $params, array(), $headers);
        } catch (\SoapFault $ex) {
            if (strtolower($ex->faultcode) === 'http') {
                throw NetworkException::create($this, $methodName, $ex->getMessage(), 0, null, $ex);
            }

            $code = 0;
            $detail = property_exists($ex, 'detail') ? $ex->detail : null;

            if (false !== $pos = strrpos($ex->faultcode, ':')) {
                $code = substr($ex->faultcode, $pos + 1);
            }

            throw ApiException::create($this, $methodName, $ex->getMessage(), $code, $detail, $ex);
        }

        return $result;
    }

    /**
     * Gets a content of last response.
     *
     * @return string
     */
    public function getLastResponse()
    {
        return $this->__getLastResponseHeaders() . "\n\n" . $this->__getLastResponse();
    }

    /**
     * Gets a content of last request.
     *
     * @return string
     */
    public function getLastRequest()
    {
        return $this->__getLastRequestHeaders() . "\n\n" . $this->__getLastRequest();
    }
}
