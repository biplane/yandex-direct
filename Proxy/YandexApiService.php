<?php

namespace Biplane\YandexDirectBundle\Proxy;

use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Exception\ApiException;

/**
 * @version v4.live
 *
 * @codeCoverageIgnore
 */
class YandexApiService
{
    private $client;

    /**
     * Constructor.
     *
     * @param Client\ClientInterface $client
     */
    public function __construct(Client\ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Gets a content of last request.
     *
     * @return string
     */
    public function getLastRequest()
    {
        return $this->client->getLastRequest();
    }

    /**
     * Gets a content of last response.
     *
     * @return string
     */
    public function getLastResponse()
    {
        return $this->client->getLastResponse();
    }

    /**
     * Gets the number of the latest API version.
     *
     * @return int The number of the last API version
     */
    public function getVersion()
    {
        return $this->client->invoke('GetVersion', array());
    }

    /**
     * Gets the personal information of all users, or of those that meet the filtering conditions.
     *
     * @param Contract\ClientInfoRequest $ClientInfoRequest
     *
     * @return Contract\ClientInfo[]
     */
    public function getClientsList(Contract\ClientInfoRequest $ClientInfoRequest)
    {
        return $this->client->invoke('GetClientsList', array($ClientInfoRequest));
    }

    /**
     * Gets a list of users associated with the specified user or agency.
     *
     * @param Contract\GetSubClientsRequest $GetSubClientsRequest
     *
     * @return Contract\ShortClientInfo[]
     */
    public function getSubClients(Contract\GetSubClientsRequest $GetSubClientsRequest)
    {
        return $this->client->invoke('GetSubClients', array($GetSubClientsRequest));
    }

    /**
     * Sets the CPC for all phrases in the campaign, or only for those phrases that meet the filter conditions.
     *
     * @param Contract\AutoPriceInfo $AutoPriceInfo
     *
     * @return Contract\PhrasePriceInfo[]
     */
    public function setAutoPrice(Contract\AutoPriceInfo $AutoPriceInfo)
    {
        return $this->client->invoke('SetAutoPrice', array($AutoPriceInfo));
    }

    /**
     * Deletes a campaign statistics report from the server.
     *
     * @param int $id The ID of the report to delete
     *
     * @return int 1 when the report is deleted successfully
     */
    public function deleteReport($id)
    {
        return $this->client->invoke('DeleteReport', array($id));
    }

    /**
     * Gets statistics for each day of the specified period for the specified campaign.
     *
     * @param Contract\GetSummaryStatRequest $GetSummaryStatRequest
     *
     * @return Contract\StatItem[]
     */
    public function getSummaryStat(Contract\GetSummaryStatRequest $GetSummaryStatRequest)
    {
        return $this->client->invoke('GetSummaryStat', array($GetSummaryStatRequest));
    }

    /**
     * Gets the campaign parameters.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return Contract\CampaignInfo
     *
     * @deprecated
     */
    public function getCampaignParams(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('GetCampaignParams', array($CampaignIDInfo));
    }

    /**
     * Gets the parameters of one or more campaigns.
     *
     * @param Contract\CampaignIDSInfo $CampaignIDSInfo
     *
     * @return Contract\CampaignInfo[]
     */
    public function getCampaignsParams(Contract\CampaignIDSInfo $CampaignIDSInfo)
    {
        return $this->client->invoke('GetCampaignsParams', array($CampaignIDSInfo));
    }

    /**
     * Deletes a report on the server about the projected number of impressions, clicks and campaign spending.
     *
     * @param int $id The ID of the report to delete
     *
     * @return int If deletion was successful, the value 1 is returned
     */
    public function deleteForecastReport($id)
    {
        return $this->client->invoke('DeleteForecastReport', array($id));
    }

    /**
     * Submits an ad with "Draft" status for moderation.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @return int 1 when executed successfully
     */
    public function moderateBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ModerateBanners', array($CampaignBidsInfo));
    }

    /**
     * Stops displaying ads.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @return int 1 when executed successfully
     */
    public function stopBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('StopBanners', array($CampaignBidsInfo));
    }

    /**
     * Allows ad displays.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @return int 1 when executed successfully
     */
    public function resumeBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ResumeBanners', array($CampaignBidsInfo));
    }

    /**
     * Archives the ad.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @return int 1 when executed successfully
     */
    public function archiveBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('ArchiveBanners', array($CampaignBidsInfo));
    }

    /**
     * Removes an ad from the archive.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @returns int 1 when executed successfully
     */
    public function unArchiveBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('UnArchiveBanners', array($CampaignBidsInfo));
    }

    /**
     * Deletes the ad.
     *
     * You can only delete an ad that has not been displayed and does not have any statistics yet.
     * For other ads, archiving is available using the {@see archiveBanners} method.
     *
     * @param Contract\CampaignBidsInfo $CampaignBidsInfo
     *
     * @return int 1 when deleted successfully
     */
    public function deleteBanners(Contract\CampaignBidsInfo $CampaignBidsInfo)
    {
        return $this->client->invoke('DeleteBanners', array($CampaignBidsInfo));
    }

    /**
     * Stops displaying the ads in the campaign.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return int 1 when executed successfully
     */
    public function stopCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('StopCampaign', array($CampaignIDInfo));
    }

    /**
     * Deletes the campaign.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return int 1 when executed successfully
     */
    public function deleteCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('DeleteCampaign', array($CampaignIDInfo));
    }

    /**
     * Removes the campaign from the archive.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return int 1 when executed successfully
     */
    public function unArchiveCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('UnArchiveCampaign', array($CampaignIDInfo));
    }

    /**
     * Archives the campaign.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return int 1 when executed successfully
     */
    public function archiveCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('ArchiveCampaign', array($CampaignIDInfo));
    }

    /**
     * Allows ad displays for the campaign.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return int 1 when executed successfully
     */
    public function resumeCampaign(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('ResumeCampaign', array($CampaignIDInfo));
    }

    /**
     * Gets a list of campaign statistics reports that have been generated or are being generated.
     *
     * We don't recommend calling this method too often. On average, generating reports takes about
     * one to two minutes, so repeating calls for checking report status every 10-20 seconds
     * is frequent enough.
     *
     * @return Contract\ReportInfo[]
     */
    public function getReportList()
    {
        return $this->client->invoke('GetReportList', array());
    }

    /**
     * Checks API availability and whether the user was successfully authorized.
     *
     * @return int 1 when user authorization was successful
     */
    public function pingAPI()
    {
        return $this->client->invoke('PingAPI', array());
    }

    /**
     * Tells you how many points the user has.
     *
     * @param array $logins An array of user logins
     *
     * @return Contract\ClientsUnitInfo[]
     */
    public function getClientsUnits(array $logins)
    {
        return $this->client->invoke('GetClientsUnits', array($logins));
    }

    /**
     * Gets the user's personal data.
     *
     * @param array $logins An array of login names of the users whose personal data is being requested
     *
     * @return Contract\ClientInfo[]
     */
    public function getClientInfo(array $logins)
    {
        return $this->client->invoke('GetClientInfo', array($logins));
    }

    /**
     * Changes a user's personal data and permissions.
     *
     * @param Contract\ClientInfo[] $ClientInfo
     *
     * @return int 1 when data has been changed successfully
     */
    public function updateClientInfo(array $ClientInfo)
    {
        return $this->client->invoke('UpdateClientInfo', array($ClientInfo));
    }

    /**
     * Gets ad parameters.
     *
     * @param Contract\GetBannersInfo $GetBannersInfo
     *
     * @return Contract\BannerInfo[]
     */
    public function getBanners(\Biplane\YandexDirectBundle\Contract\GetBannersInfo $GetBannersInfo)
    {
        return $this->client->invoke('GetBanners', array($GetBannersInfo));
    }

    /**
     * Gets a list of campaigns with brief information about them.
     *
     * @param array $logins An array of login names. Is used only when making the request
     *                      on behalf of an advertising agency
     *
     * @return Contract\ShortCampaignInfo[]
     */
    public function getCampaignsList(array $logins = array())
    {
        return $this->client->invoke('GetCampaignsList', array($logins));
    }

    /**
     * Gets a list of campaigns that meet the filter conditions with brief information about these campaigns.
     *
     * @param Contract\GetCampaignsInfo $GetCampaignsInfo
     *
     * @return Contract\ShortCampaignInfo[]
     */
    public function getCampaignsListFilter(Contract\GetCampaignsInfo $GetCampaignsInfo)
    {
        return $this->client->invoke('GetCampaignsListFilter', array($GetCampaignsInfo));
    }

    /**
     * Gets information about the campaign balance.
     *
     * @param array $ids An array of IDs for campaigns that you need to get information for
     *
     * @return Contract\CampaignBalanceInfo[]
     */
    public function getBalance(array $ids)
    {
        return $this->client->invoke('GetBalance', array($ids));
    }

    /**
     * Gets information about phrases.
     *
     * @param array $ids An array of BannerID ad IDs (no more than 1000)
     *
     * @return Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrases(array $ids)
    {
        return $this->client->invoke('GetBannerPhrases', array($ids));
    }

    /**
     * Gets information about phrases and lets you limit what is included in returned data.
     *
     * @param Contract\BannerPhrasesFilterRequestInfo $BannerPhrasesFilterRequestInfo
     *
     * @return Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrasesFilter(Contract\BannerPhrasesFilterRequestInfo $BannerPhrasesFilterRequestInfo)
    {
        return $this->client->invoke('GetBannerPhrasesFilter', array($BannerPhrasesFilterRequestInfo));
    }

    /**
     * Gets a list of regions registered in Yandex.Direct.
     *
     * @return Contract\RegionInfo[]
     */
    public function getRegions()
    {
        return $this->client->invoke('GetRegions', array());
    }

    /**
     * Generates a campaign statistics report on the server.
     *
     * @param Contract\NewReportInfo $NewReportInfo
     *
     * @return int The ID of the future report
     */
    public function createNewReport(Contract\NewReportInfo $NewReportInfo)
    {
        return $this->client->invoke('CreateNewReport', array($NewReportInfo));
    }

    /**
     * Generates a report on the server about the projected number of impressions and clicks and campaign spending.
     *
     * The forecast is put together for one month for the specified phrases and Yandex.Catalog categories.
     *
     * @param Contract\NewForecastInfo $NewForecastInfo
     *
     * @return int The ID of the future report
     */
    public function createNewForecast(Contract\NewForecastInfo $NewForecastInfo)
    {
        return $this->client->invoke('CreateNewForecast', array($NewForecastInfo));
    }

    /**
     * Gets a report about the projected number of impressions, clicks and campaign spending.
     *
     * @param int $id The ID of the generated report
     *
     * @return Contract\GetForecastInfo
     */
    public function getForecast($id)
    {
        return $this->client->invoke('GetForecast', array($id));
    }

    /**
     * Gets a list of Yandex.Catalog categories.
     *
     * @return Contract\RubricInfo[]
     */
    public function getRubrics()
    {
        return $this->client->invoke('GetRubrics', array());
    }

    /**
     * Gets a list of time zones.
     *
     * @return Contract\TimeZoneInfo[]
     */
    public function getTimeZones()
    {
        return $this->client->invoke('GetTimeZones', array());
    }

    /**
     * Gets a list of reports that have been generated or are being generated about
     * the projected number of impressions, clicks and campaign spending.
     *
     * @return Contract\ForecastStatusInfo[]
     */
    public function getForecastList()
    {
        return $this->client->invoke('GetForecastList', array());
    }

    /**
     * For phrases, it sets the CPC on Yandex search and in the Yandex Advertising Network,
     * and also changes parameters for Autobudget and Autobroker.
     *
     * You can set prices for a maximum of 1000 phrases in a single request.
     *
     * @param Contract\PhrasePriceInfo[] $PhrasePriceInfo
     *
     * @return int 1 when executed successfully
     */
    public function updatePrices(array $PhrasePriceInfo)
    {
        return $this->client->invoke('UpdatePrices', array($PhrasePriceInfo));
    }

    /**
     * Creates a campaign with the specified parameters, or changes the parameters of an existing campaign.
     *
     * When editing a campaign, it is important to set all the optional parameters, even if they are not being changed.
     * If a parameter is omitted, its value may be replaced with the pre-set value.
     *
     * @param Contract\CampaignInfo $CampaignInfo
     *
     * @return int The ID of the created or edited campaign
     */
    public function createOrUpdateCampaign(Contract\CampaignInfo $CampaignInfo)
    {
        return $this->client->invoke('CreateOrUpdateCampaign', array($CampaignInfo));
    }

    /**
     * Creates an ad or edits the parameters of an existing ad.
     *
     * A campaign can have no more than 1000 ads, although the number of phrases per ad is not explicitly restricted.
     * There is a limit on the total size of phrases: 4096 bytes per ad.
     *
     * @param Contract\BannerInfo[] $BannerInfo
     *
     * @return array An array containing the IDs of created or updated ads
     */
    public function createOrUpdateBanners(array $BannerInfo)
    {
        return $this->client->invoke('CreateOrUpdateBanners', array($BannerInfo));
    }

    /**
     * Gets a list of API versions that are currently supported.
     *
     * @return Contract\VersionDesc[]
     */
    public function getAvailableVersions()
    {
        return $this->client->invoke('GetAvailableVersions', array());
    }

    /**
     * Gets suggestions for keywords.
     *
     * @param Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo
     *
     * @return array An array of suggestions for the keywords (up to 20 suggestions)
     */
    public function getKeywordsSuggestion(\Biplane\YandexDirectBundle\Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo)
    {
        return $this->client->invoke('GetKeywordsSuggestion', array($KeywordsSuggestionInfo));
    }

    /**
     * Registers a client of an advertising agency.
     *
     * @param Contract\CreateNewSubclientRequest $CreateNewSubclientRequest
     *
     * @return Contract\CreateNewSubclientResponse
     */
    public function createNewSubclient(Contract\CreateNewSubclientRequest $CreateNewSubclientRequest)
    {
        return $this->client->invoke('CreateNewSubclient', array($CreateNewSubclientRequest));
    }

    /**
     * Generates a search query statistics report on the server.
     *
     * @param Contract\NewWordstatReportInfo $NewWordstatReportInfo
     *
     * @return int The ID of the future report
     */
    public function createNewWordstatReport(Contract\NewWordstatReportInfo $NewWordstatReportInfo)
    {
        return $this->client->invoke('CreateNewWordstatReport', array($NewWordstatReportInfo));
    }

    /**
     * Gets a list of query statistics reports that have been generated or are being generated.
     *
     * @return Contract\WordstatReportStatusInfo[]
     */
    public function getWordstatReportList()
    {
        return $this->client->invoke('GetWordstatReportList', array());
    }

    /**
     * Gets a search query statistics report.
     *
     * @param int $id The ID of the generated report
     *
     * @return Contract\WordstatReportInfo[]
     */
    public function getWordstatReport($id)
    {
        return $this->client->invoke('GetWordstatReport', array($id));
    }

    /**
     * Deletes a search query statistics report.
     *
     * @param int $id The ID of the generated report
     *
     * @return int 1 when the report is deleted successfully
     *
     * @since v4
     */
    public function deleteWordstatReport($id)
    {
        return $this->client->invoke('DeleteWordstatReport', array($id));
    }

    /**
     * Gets information about the Yandex.Metrica goals that are available for the campaign.
     *
     * @param Contract\CampaignIDInfo $CampaignIDInfo
     *
     * @return Contract\StatGoalInfo[]
     */
    public function getStatGoals(Contract\CampaignIDInfo $CampaignIDInfo)
    {
        return $this->client->invoke('GetStatGoals', array($CampaignIDInfo));
    }

    /**
     * Checks for changes in campaigns and ads, as well as in the region and time zone directories,
     * and in the Yandex.Catalog.
     *
     * @param Contract\GetChangesRequest $GetChangesRequest
     *
     * @return Contract\GetChangesResponse
     *
     * @since v4
     */
    public function getChanges(Contract\GetChangesRequest $GetChangesRequest)
    {
        return $this->client->invoke('GetChanges', array($GetChangesRequest));
    }

    /**
     * Transfers funds between campaigns.
     *
     * @param Contract\TransferMoneyInfo $TransferMoneyInfo
     *
     * @return int 1 when executed successfully
     *
     * @since v4
     */
    public function transferMoney(Contract\TransferMoneyInfo $TransferMoneyInfo)
    {
        return $this->client->invoke('TransferMoney', array($TransferMoneyInfo), true);
    }

    /**
     * Gets information about credit available to pay for campaigns.
     *
     * @return Contract\CreditLimitsInfo
     *
     * @since v4
     */
    public function getCreditLimits()
    {
        return $this->client->invoke('GetCreditLimits', array(), true);
    }

    /**
     * Generates an invoice in HTML format for paying for one or more campaigns.
     *
     * @param Contract\CreateInvoiceInfo $CreateInvoiceInfo
     *
     * @return string If executed successfully, the method returns the URL of the payment invoice
     *
     * @since v4
     */
    public function createInvoice(Contract\CreateInvoiceInfo $CreateInvoiceInfo)
    {
        return $this->client->invoke('CreateInvoice', array($CreateInvoiceInfo), true);
    }

    /**
     * Pays for the campaign using available credit.
     *
     * @param Contract\PayCampaignsInfo $PayCampaignsInfo
     *
     * @return int 1 when executed successfully
     *
     * @since v4
     */
    public function payCampaigns(Contract\PayCampaignsInfo $PayCampaignsInfo)
    {
        return $this->client->invoke('PayCampaigns', array($PayCampaignsInfo), true);
    }

    /**
     * Gets the entries from the event log.
     *
     * @param Contract\GetEventsLogRequest $params
     *
     * @return Contract\EventsLogItem[]
     *
     * @since v4.live
     */
    public function getEventsLog(Contract\GetEventsLogRequest $params)
    {
        return $this->client->invoke('GetEventsLog', array($params));
    }
}