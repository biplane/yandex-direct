<?php

namespace Biplane\YandexDirectBundle\Proxy;

use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Exception\ApiException;

/**
 * @version v4
 *
 * @codeCoverageIgnore
 */
class YandexApiService
{
    /**
     * @var \Biplane\YandexDirectBundle\Client\ClientInterface
     */
    private $client;

    /**
     * @param Client\ClientInterface $client
     */
    public function __construct(Client\ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getLastRequest()
    {
        return $this->client->getLastRequest();
    }

    /**
     * @return string
     */
    public function getLastResponse()
    {
        return $this->client->getLastResponse();
    }

    /**
     * @returns array
     */
    public function getVersion()
    {
        return $this->client->invoke('GetVersion', array());
    }

    /**
     * @param Contract\ClientInfoRequest $ClientInfoRequest
     * @returns Contract\ClientInfo[]
     */
    public function getClientsList(Contract\ClientInfoRequest $ClientInfoRequest)
    {
        return $this->client->invoke('GetClientsList', array($ClientInfoRequest));
    }

    /**
     * @param Contract\GetSubClientsRequest $GetSubClientsRequest
     * @returns Contract\ShortClientInfo[]
     */
    public function getSubClients(Contract\GetSubClientsRequest $GetSubClientsRequest)
    {
        return $this->client->invoke('GetSubClients', array($GetSubClientsRequest));
    }

    /**
     * @param Contract\AutoPriceInfo $AutoPriceInfo
     * @returns Contract\PhrasePriceInfo[]
     */
    public function setAutoPrice(Contract\AutoPriceInfo $AutoPriceInfo)
    {
        return $this->client->invoke('SetAutoPrice', array($AutoPriceInfo));
    }

    /**
     * @param int $id
     * @returns array
     */
    public function deleteReport($id)
    {
        return $this->client->invoke('DeleteReport', array($id));
    }

    /**
     * @param Contract\GetSummaryStatRequest $GetSummaryStatRequest
     * @returns Contract\StatItem[]
     */
    public function getSummaryStat(Contract\GetSummaryStatRequest $GetSummaryStatRequest)
    {
        return $this->client->invoke('GetSummaryStat', array($GetSummaryStatRequest));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns Contract\CampaignInfo
     */
    public function getCampaignParams(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('GetCampaignParams', array($CampaignIDInfo));
    }

    /**
     * @param Contract\CampaignIDSInfo $CampaignIDSInfo
     * @returns Contract\CampaignInfo[]
     */
    public function getCampaignsParams(Contract\CampaignIDSInfo $CampaignIDSInfo)
    {
        return $this->client->invoke('GetCampaignsParams', array($CampaignIDSInfo));
    }

    /**
     * @param int $id
     * @returns int
     */
    public function deleteForecastReport($id)
    {
        return $this->client->invoke('DeleteForecastReport', array($id));
    }

    /**
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function moderateBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ModerateBanners', array($CampaignBidsInfo));
    }

    /**
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function stopBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('StopBanners', array($CampaignBidsInfo));
    }

    /**
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function resumeBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ResumeBanners', array($CampaignBidsInfo));
    }

    /**
     * @paramContract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function archiveBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ArchiveBanners', array($CampaignBidsInfo));
    }

    /**
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function unArchiveBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('UnArchiveBanners', array($CampaignBidsInfo));
    }

    /**
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     * @returns array
     */
    public function deleteBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('DeleteBanners', array($CampaignBidsInfo));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns array
     */
    public function stopCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('StopCampaign', array($CampaignIDInfo));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns array
     */
    public function deleteCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('DeleteCampaign', array($CampaignIDInfo));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns array
     */
    public function unArchiveCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('UnArchiveCampaign', array($CampaignIDInfo));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns array
     */
    public function archiveCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('ArchiveCampaign', array($CampaignIDInfo));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns array
     */
    public function resumeCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('ResumeCampaign', array($CampaignIDInfo));
    }

    /**
     * @returns Contract\ReportInfo[]
     */
    public function getReportList()
    {
        return $this->client->invoke('GetReportList', array());
    }

    /**
     * @returns array
     */
    public function pingAPI()
    {
        return $this->client->invoke('PingAPI', array());
    }

    /**
     * @param array $string
     * @returns Contract\ClientsUnitInfo[]
     */
    public function getClientsUnits(array $string)
    {
        return $this->client->invoke('GetClientsUnits', array($string));
    }

    /**
     * @param array $string
     * @returns Contract\ClientInfo[]
     */
    public function getClientInfo(array $string)
    {
        return $this->client->invoke('GetClientInfo', array($string));
    }

    /**
     * @param Contract\ClientInfo[] $ClientInfo
     * @returns array
     */
    public function updateClientInfo(array $ClientInfo)
    {
        return $this->client->invoke('UpdateClientInfo', array($ClientInfo));
    }

    /**
     * @param Contract\GetBannersInfo $GetBannersInfo
     * @returns Contract\BannerInfo[]
     */
    public function getBanners(\Biplane\YandexDirectBundle\Contract\GetBannersInfo $GetBannersInfo)
    {
        return $this->client->invoke('GetBanners', array($GetBannersInfo));
    }

    /**
     * @param array $string
     * @returns Contract\ShortCampaignInfo[]
     */
    public function getCampaignsList(array $string)
    {
        return $this->client->invoke('GetCampaignsList', array($string));
    }

    /**
     * @param Contract\GetCampaignsInfo $GetCampaignsInfo
     * @returns Contract\ShortCampaignInfo[]
     */
    public function getCampaignsListFilter(Contract\GetCampaignsInfo $GetCampaignsInfo)
    {
        return $this->client->invoke('GetCampaignsListFilter', array($GetCampaignsInfo));
    }

    /**
     * @param array $int
     * @returns Contract\CampaignBalanceInfo[]
     */
    public function getBalance(array $int)
    {
        return $this->client->invoke('GetBalance', array($int));
    }

    /**
     * @param array $int
     * @returns Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrases(array $int)
    {
        return $this->client->invoke('GetBannerPhrases', array($int));
    }

    /**
     * @param Contract\BannerPhrasesFilterRequestInfo $BannerPhrasesFilterRequestInfo
     * @returns Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrasesFilter(Contract\BannerPhrasesFilterRequestInfo $BannerPhrasesFilterRequestInfo)
    {
        return $this->client->invoke('GetBannerPhrasesFilter', array($BannerPhrasesFilterRequestInfo));
    }

    /**
     * @returns Contract\RegionInfo[]
     */
    public function getRegions()
    {
        return $this->client->invoke('GetRegions', array());
    }

    /**
     * @param Contract\NewReportInfo $NewReportInfo
     * @returns array
     */
    public function createNewReport(Contract\NewReportInfo $NewReportInfo)
    {
        return $this->client->invoke('CreateNewReport', array($NewReportInfo));
    }

    /**
     * @param Contract\NewForecastInfo $NewForecastInfo
     * @returns array
     */
    public function createNewForecast(Contract\NewForecastInfo $NewForecastInfo)
    {
        return $this->client->invoke('CreateNewForecast', array($NewForecastInfo));
    }

    /**
     * @param int $id
     * @returns Contract\GetForecastInfo
     */
    public function getForecast($id)
    {
        return $this->client->invoke('GetForecast', array($id));
    }

    /**
     * @returns Contract\RubricInfo[]
     */
    public function getRubrics()
    {
        return $this->client->invoke('GetRubrics', array());
    }

    /**
     * @returns Contract\TimeZoneInfo[]
     */
    public function getTimeZones()
    {
        return $this->client->invoke('GetTimeZones', array());
    }

    /**
     * @returns Contract\ForecastStatusInfo[]
     */
    public function getForecastList()
    {
        return $this->client->invoke('GetForecastList', array());
    }

    /**
     * @param Contract\PhrasePriceInfo[] $PhrasePriceInfo
     * @returns array
     */
    public function updatePrices(array $PhrasePriceInfo)
    {
        return $this->client->invoke('UpdatePrices', array($PhrasePriceInfo));
    }

    /**
     * @param Contract\CampaignInfo $CampaignInfo
     * @returns array
     */
    public function createOrUpdateCampaign(Contract\CampaignInfo $CampaignInfo)
    {
        return $this->client->invoke('CreateOrUpdateCampaign', array($CampaignInfo));
    }

    /**
     * @param Contract\BannerInfo[] $BannerInfo
     * @returns array
     */
    public function createOrUpdateBanners(array $BannerInfo)
    {
        return $this->client->invoke('CreateOrUpdateBanners', array($BannerInfo));
    }

    /**
     * @returns Contract\VersionDesc[]
     */
    public function getAvailableVersions()
    {
        return $this->client->invoke('GetAvailableVersions', array());
    }

    /**
     * @param Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo
     * @returns array
     */
    public function getKeywordsSuggestion(\Biplane\YandexDirectBundle\Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo)
    {
        return $this->client->invoke('GetKeywordsSuggestion', array($KeywordsSuggestionInfo));
    }

    /**
     * @param Contract\CreateNewSubclientRequest $CreateNewSubclientRequest
     * @returns Contract\CreateNewSubclientResponse
     */
    public function createNewSubclient(Contract\CreateNewSubclientRequest $CreateNewSubclientRequest)
    {
        return $this->client->invoke('CreateNewSubclient', array($CreateNewSubclientRequest));
    }

    /**
     * @param Contract\NewWordstatReportInfo $NewWordstatReportInfo
     * @returns array
     */
    public function createNewWordstatReport(Contract\NewWordstatReportInfo $NewWordstatReportInfo)
    {
        return $this->client->invoke('CreateNewWordstatReport', array($NewWordstatReportInfo));
    }

    /**
     * @returns Contract\WordstatReportStatusInfo[]
     */
    public function getWordstatReportList()
    {
        return $this->client->invoke('GetWordstatReportList', array());
    }

    /**
     * @param int $id
     * @returns Contract\WordstatReportInfo[]
     */
    public function getWordstatReport($id)
    {
        return $this->client->invoke('GetWordstatReport', array($id));
    }

    /**
     * @param int $id
     * @returns array
     *
     * @since v4
     */
    public function deleteWordstatReport($id)
    {
        return $this->client->invoke('DeleteWordstatReport', array($id));
    }

    /**
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     * @returns Contract\StatGoalInfo[]
     */
    public function getStatGoals(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('GetStatGoals', array($CampaignIDInfo));
    }

    /**
     * @param Contract\GetChangesRequest $GetChangesRequest
     * @returns Contract\GetChangesResponse
     *
     * @since v4
     */
    public function getChanges(Contract\GetChangesRequest $GetChangesRequest)
    {
        return $this->client->invoke('GetChanges', array($GetChangesRequest));
    }

    /**
     * @param Contract\TransferMoneyInfo $TransferMoneyInfo
     * @returns array
     *
     * @since v4
     */
    public function transferMoney(Contract\TransferMoneyInfo $TransferMoneyInfo)
    {
        return $this->client->invoke('TransferMoney', array($TransferMoneyInfo));
    }

    /**
     * @returns Contract\CreditLimitsInfo
     *
     * @since v4
     */
    public function getCreditLimits()
    {
        return $this->client->invoke('GetCreditLimits', array());
    }

    /**
     * @param Contract\CreateInvoiceInfo $CreateInvoiceInfo
     * @returns array
     *
     * @since v4
     */
    public function createInvoice(Contract\CreateInvoiceInfo $CreateInvoiceInfo)
    {
        return $this->client->invoke('CreateInvoice', array($CreateInvoiceInfo));
    }

    /**
     * @param Contract\PayCampaignsInfo $PayCampaignsInfo
     * @returns Contract\PayCampaignsResponse
     *
     * @since v4
     */
    public function payCampaigns(Contract\PayCampaignsInfo $PayCampaignsInfo)
    {
        return $this->client->invoke('PayCampaigns', array($PayCampaignsInfo));
    }
}