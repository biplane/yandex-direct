<?php

namespace Biplane\YandexDirectBundle\Proxy\Client;

use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;
use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;
use Biplane\YandexDirectBundle\Converter\ConverterInterface;
use Biplane\YandexDirectBundle\Exception\ApiException;
use Biplane\YandexDirectBundle\Factory\ConverterFactory;

/**
 * SoapClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 * @author Alexey Popikov <a.popkov@biplane.ru>
 */
class SoapClient extends \SoapClient implements ClientInterface
{
    const ENDPOINT = 'https://soap.direct.yandex.ru/wsdl/v4/';
    const API_NS = 'API';
    const INVALID_NS = 'http://namespaces.soaplite.com/perl';

    private static $classmap = array(
        'NewReportFilterInfo' => 'Biplane\YandexDirectBundle\Contract\NewReportFilterInfo',
        'NewReportInfo' => 'Biplane\YandexDirectBundle\Contract\NewReportInfo',
        'TimeZoneInfo' => 'Biplane\YandexDirectBundle\Contract\TimeZoneInfo',
        'CampaignIDInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignIDInfo',
        'CampaignIDSInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignIDSInfo',
        'CampaignInfo' => 'Biplane\YandexDirectBundle\Contract\CampaignInfo',
        'CampaignStrategy' => 'Biplane\YandexDirectBundle\Contract\CampaignStrategy',
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
        'PayCampaignsResponse' => 'Biplane\YandexDirectBundle\Contract\PayCampaignsResponse',
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
        'GetChangesRequest' => 'Biplane\YandexDirectBundle\Contract\GetChangesRequest',
        'GetChangesResponse' => 'Biplane\YandexDirectBundle\Contract\GetChangesResponse',
        'GetChangesIntData' => 'Biplane\YandexDirectBundle\Contract\GetChangesIntData',
        'GetChangesStringData' => 'Biplane\YandexDirectBundle\Contract\GetChangesStringData',
        'CampaignStatChangeItem' => 'Biplane\YandexDirectBundle\Contract\CampaignStatChangeItem',
        'CreateNewSubclientRequest' => 'Biplane\YandexDirectBundle\Contract\CreateNewSubclientRequest',
        'CreateNewSubclientResponse' => 'Biplane\YandexDirectBundle\Contract\CreateNewSubclientResponse',
        'CreditLimitsInfo' => 'Biplane\YandexDirectBundle\Contract\CreditLimitsInfo',
        'CreditLimitsItem' => 'Biplane\YandexDirectBundle\Contract\CreditLimitsItem'
    );

    /**
     * Список методов API, для которых нужно ручное преобразование.
     * @var array
     */
    private static $converterForMethods = array();

    /**
     * @var \Biplane\YandexDirectBundle\Proxy\Client\ConverterFactory
     */
    private $converterFactory;

    /**
     * Creates a new instance of SoapClient class.
     *
     * @param ConfigurationInterface $configuration Options of API service.
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(AbstractConfiguration $configuration, ConverterFactory $converterFactory)
    {
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
            $headers[] = new \SoapHeader(self::API_NS, 'login', $configuration->getLogin());
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
     * @param string $request The XML SOAP request.
     * @param string $location The URL to request.
     * @param string $action The SOAP action.
     * @param int $version The SOAP version.
     * @param int $one_way [optional] If one_way is set to 1, this method returns nothing.
     *        Use this where a response is not expected.
     * @return string The XML SOAP response.
     *
     * @internal
     */
    public function __doRequest($request, $location, $action, $version, $one_way = null)
    {
        $response = parent::__doRequest($request, $location, $action, $version, $one_way);

        $xml = new \SimpleXMLElement($response);
        $nss = array_flip($xml->getDocNamespaces(true));

        if (isset($nss[self::INVALID_NS]) && isset($nss[self::API_NS])) {
            $response = str_replace($nss[self::INVALID_NS].':', $nss[self::API_NS].':', $response);
        }

        return $response;
    }

    /**
     * Вызывает метод веб-сервиса.
     *
     * @param string $methodName Имя метода.
     * @param array $arguments Массив аргументов для вызываемого метода.
     *
     * @throws RemoteException
     */
    public function invoke($methodName, array $arguments)
    {
        try {
            $result = $this->__soapCall($methodName, $arguments);

            // Если для метода нужно ручное преобразование,
            // то пробуем создать конвертер через фабрику и выполнить преобразование
            if (in_array($methodName, self::$converterForMethods)) {
                if (null !== $converter = $this->converterFactory->createForResult($methodName)) {
                    return $converter->toContract($result);
                }
            }

            return $result;
        }
        catch (\SoapFault $ex) {
            $message = $ex->getMessage();

            if (!empty($ex->detail)) {
                $message .= "\n" . $ex->detail;
            }

            throw new ApiException($message, $ex->getCode(), $ex);
        }
    }

    /**
     * @return string
     */
    function getLastResponse()
    {
        return $this->__getLastResponse();
    }

    /**
     * @return string
     */
    function getLastRequest()
    {
        return $this->__getLastRequest();
    }
}