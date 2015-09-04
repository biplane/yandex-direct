<?php

namespace Biplane\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\V4\Exception\ApiException;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Provides proxy of API.
 *
 * @version v4.live
 */
class YandexApiService extends \SoapClient
{
    const ENDPOINT   = 'https://api.direct.yandex.ru/live/v4/wsdl/';
    const API_NS     = 'API';
    const INVALID_NS = 'http://namespaces.soaplite.com/perl';

    private static $classmap = array(
        'NewReportFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewReportFilterInfo',
        'NewReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewReportInfo',
        'TimeZoneInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TimeZoneInfo',
        'StatGoalsCampaignIDInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalsCampaignIDInfo',
        'CampaignIDInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignIDInfo',
        'CampaignIDSInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignIDSInfo',
        'CampaignInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignInfo',
        'DayBudgetInfo' => 'Biplane\YandexDirect\Api\V4\Contract\DayBudgetInfo',
        'CampaignStrategy' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignStrategy',
        'CampaignContextStrategy' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignContextStrategy',
        'SmsNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\SmsNotificationInfo',
        'EmailNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\EmailNotificationInfo',
        'CampaignBalanceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignBalanceInfo',
        'ShortCampaignInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ShortCampaignInfo',
        'ClientsUnitInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ClientsUnitInfo',
        'RubricInfo' => 'Biplane\YandexDirect\Api\V4\Contract\RubricInfo',
        'ForecastStatusInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ForecastStatusInfo',
        'ReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ReportInfo',
        'GetSummaryStatRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetSummaryStatRequest',
        'StatItem' => 'Biplane\YandexDirect\Api\V4\Contract\StatItem',
        'ContactInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ContactInfo',
        'RegionInfo' => 'Biplane\YandexDirect\Api\V4\Contract\RegionInfo',
        'MapPoint' => 'Biplane\YandexDirect\Api\V4\Contract\MapPoint',
        'TimeTargetInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TimeTargetInfo',
        'TimeTargetItem' => 'Biplane\YandexDirect\Api\V4\Contract\TimeTargetItem',
        'CoverageInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CoverageInfo',
        'BannerPhrasesFilterRequestInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerPhrasesFilterRequestInfo',
        'PhrasePriceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PhrasePriceInfo',
        'BannerPhraseInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerPhraseInfo',
        'PhraseUserParams' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseUserParams',
        'TransferMoneyInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TransferMoneyInfo',
        'PayCampElement' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampElement',
        'CreateInvoiceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo',
        'PayCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo',
        'BannerInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerInfo',
        'Sitelink' => 'Biplane\YandexDirect\Api\V4\Contract\Sitelink',
        'RejectReason' => 'Biplane\YandexDirect\Api\V4\Contract\RejectReason',
        'CampaignBidsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignBidsInfo',
        'GetCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\GetCampaignsInfo',
        'CampaignsFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignsFilterInfo',
        'BannersFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannersFilterInfo',
        'GetBannersInfo' => 'Biplane\YandexDirect\Api\V4\Contract\GetBannersInfo',
        'NewForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewForecastInfo',
        'ForecastCommonInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ForecastCommonInfo',
        'GetForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\GetForecastInfo',
        'NewWordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewWordstatReportInfo',
        'WordstatReportStatusInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportStatusInfo',
        'WordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportInfo',
        'WordstatItem' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatItem',
        'StatGoalInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalInfo',
        'AutoPriceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\AutoPriceInfo',
        'ClientInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ClientInfo',
        'ShortClientInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ShortClientInfo',
        'GetSubClientsRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetSubClientsRequest',
        'ClientInfoRequest' => 'Biplane\YandexDirect\Api\V4\Contract\ClientInfoRequest',
        'ClientFilter' => 'Biplane\YandexDirect\Api\V4\Contract\ClientFilter',
        'ClientRight' => 'Biplane\YandexDirect\Api\V4\Contract\ClientRight',
        'VersionDesc' => 'Biplane\YandexDirect\Api\V4\Contract\VersionDesc',
        'KeywordsSuggestionInfo' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordsSuggestionInfo',
        'GetEventsLogRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetEventsLogRequest',
        'GetEventsLogFilter' => 'Biplane\YandexDirect\Api\V4\Contract\GetEventsLogFilter',
        'EventsLogItem' => 'Biplane\YandexDirect\Api\V4\Contract\EventsLogItem',
        'EventsLogItemAttributes' => 'Biplane\YandexDirect\Api\V4\Contract\EventsLogItemAttributes',
        'CampaignTagsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignTagsInfo',
        'TagInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TagInfo',
        'BannersRequestInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannersRequestInfo',
        'BannerTagsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerTagsInfo',
        'BannersStatItem' => 'Biplane\YandexDirect\Api\V4\Contract\BannersStatItem',
        'GetBannersStatResponse' => 'Biplane\YandexDirect\Api\V4\Contract\GetBannersStatResponse',
        'GetChangesRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesRequest',
        'GetChangesResponse' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesResponse',
        'GetChangesIntData' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesIntData',
        'GetChangesStringData' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesStringData',
        'CampaignStatChangeItem' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignStatChangeItem',
        'CreateNewSubclientRequest' => 'Biplane\YandexDirect\Api\V4\Contract\CreateNewSubclientRequest',
        'CreateNewSubclientResponse' => 'Biplane\YandexDirect\Api\V4\Contract\CreateNewSubclientResponse',
        'CreditLimitsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreditLimitsInfo',
        'CreditLimitsItem' => 'Biplane\YandexDirect\Api\V4\Contract\CreditLimitsItem',
        'Error' => 'Biplane\YandexDirect\Api\V4\Contract\Error',
        'Warning' => 'Biplane\YandexDirect\Api\V4\Contract\Warning',
        'GetRetargetingGoalsRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetRetargetingGoalsRequest',
        'RetargetingGoal' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingGoal',
        'RetargetingConditionRequest' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionRequest',
        'RetargetingCondition' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingCondition',
        'RetargetingConditionItem' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionItem',
        'RetargetingConditionGoalItem' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionGoalItem',
        'RetargetingConditionSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionSelectionCriteria',
        'RetargetingConditionActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionActionResult',
        'RetargetingConditionResponse' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionResponse',
        'RetargetingRequest' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingRequest',
        'RetargetingRequestOptions' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingRequestOptions',
        'Retargeting' => 'Biplane\YandexDirect\Api\V4\Contract\Retargeting',
        'RetargetingSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingSelectionCriteria',
        'RetargetingActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingActionResult',
        'RetargetingResponse' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingResponse',
        'AdImageRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageRequest',
        'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageSelectionCriteria',
        'AdImageRaw' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageRaw',
        'AdImageURL' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageURL',
        'AdImageResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageResponse',
        'KeywordRequest' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordRequest',
        'KeywordActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordActionResult',
        'QualityIndex' => 'Biplane\YandexDirect\Api\V4\Contract\QualityIndex',
        'KeywordResponse' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordResponse',
        'AdImageLimit' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageLimit',
        'AdImage' => 'Biplane\YandexDirect\Api\V4\Contract\AdImage',
        'AdImageUpload' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageUpload',
        'AdImageActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageActionResult',
        'AdImageAssociationRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationRequest',
        'AdImageAssociationSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationSelectionCriteria',
        'AdImageAssociation' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociation',
        'AdImageAssociationResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationResponse',
        'AdImageAssociationActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationActionResult',
        'EnableSharedAccountRequest' => 'Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountRequest',
        'EnableSharedAccountResponse' => 'Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountResponse',
        'AccountManagementRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest',
        'AccountSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AccountSelectionCriteria',
        'Payment' => 'Biplane\YandexDirect\Api\V4\Contract\Payment',
        'Transfer' => 'Biplane\YandexDirect\Api\V4\Contract\Transfer',
        'Account' => 'Biplane\YandexDirect\Api\V4\Contract\Account',
        'AccountManagementResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AccountManagementResponse',
        'AccountActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AccountActionResult'
    );

    private $dispatcher;
    private $user;

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher The event dispatcher
     * @param User                     $user       The configuration
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        $options = array(
            'classmap'     => self::$classmap,
            'soap_version' => SOAP_1_1,
            'encoding'     => 'UTF-8',
            'trace'        => true,
            'exception'    => true,
            'cache_wsdl'   => WSDL_CACHE_BOTH
        );

        $headers = array(
            new \SoapHeader(self::API_NS, 'locale', $user->getLocale()),
            new \SoapHeader(self::API_NS, 'token', $user->getAccessToken())
        );

        parent::__construct(self::ENDPOINT, $options);

        $this->__setSoapHeaders($headers);

        $this->dispatcher = $dispatcher;
        $this->user = $user;
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
     * Gets the number of the latest API version.
     *
     * @return int The number of the last API version
     */
    public function getVersion()
    {
        return $this->invoke('GetVersion', array());
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
        return $this->invoke('GetClientsList', array($ClientInfoRequest));
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
        return $this->invoke('GetSubClients', array($GetSubClientsRequest));
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
        return $this->invoke('SetAutoPrice', array($AutoPriceInfo));
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
        return $this->invoke('DeleteReport', array($id));
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
        return $this->invoke('GetSummaryStat', array($GetSummaryStatRequest));
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
        return $this->invoke('GetCampaignParams', array($CampaignIDInfo));
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
        return $this->invoke('GetCampaignsParams', array($CampaignIDSInfo));
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
        return $this->invoke('DeleteForecastReport', array($id));
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
        return $this->invoke('ModerateBanners', array($CampaignBidsInfo));
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
        return $this->invoke('StopBanners', array($CampaignBidsInfo));
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
        return $this->invoke('ResumeBanners', array($CampaignBidsInfo));
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
        return $this->invoke('ArchiveBanners', array($CampaignBidsInfo));
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
        return $this->invoke('UnArchiveBanners', array($CampaignBidsInfo));
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
        return $this->invoke('DeleteBanners', array($CampaignBidsInfo));
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
        return $this->invoke('StopCampaign', array($CampaignIDInfo));
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
        return $this->invoke('DeleteCampaign', array($CampaignIDInfo));
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
        return $this->invoke('UnArchiveCampaign', array($CampaignIDInfo));
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
        return $this->invoke('ArchiveCampaign', array($CampaignIDInfo));
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
        return $this->invoke('ResumeCampaign', array($CampaignIDInfo));
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
        return $this->invoke('GetReportList', array());
    }

    /**
     * Checks API availability and whether the user was successfully authorized.
     *
     * @return int 1 when user authorization was successful
     */
    public function pingAPI()
    {
        return $this->invoke('PingAPI', array());
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
        return $this->invoke('GetClientsUnits', array($logins));
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
        return $this->invoke('GetClientInfo', array($logins));
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
        return $this->invoke('UpdateClientInfo', array($ClientInfo));
    }

    /**
     * Gets ad parameters.
     *
     * @param Contract\GetBannersInfo $GetBannersInfo
     *
     * @return Contract\BannerInfo[]
     */
    public function getBanners(Contract\GetBannersInfo $GetBannersInfo)
    {
        return $this->invoke('GetBanners', array($GetBannersInfo));
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
        return $this->invoke('GetCampaignsList', array($logins));
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
        return $this->invoke('GetCampaignsListFilter', array($GetCampaignsInfo));
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
        return $this->invoke('GetBalance', array($ids));
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
        return $this->invoke('GetBannerPhrases', array($ids));
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
        return $this->invoke('GetBannerPhrasesFilter', array($BannerPhrasesFilterRequestInfo));
    }

    /**
     * Gets a list of regions registered in Yandex.Direct.
     *
     * @return Contract\RegionInfo[]
     */
    public function getRegions()
    {
        return $this->invoke('GetRegions', array());
    }

    /**
     * Generates a campaign statistics report on the server.
     *
     * @param Contract\NewReportInfo $params
     *
     * @return int The ID of the future report
     */
    public function createNewReport(Contract\NewReportInfo $params)
    {
        return $this->invoke('CreateNewReport', array($params));
    }

    /**
     * Gets statistics that campaign for a period not exceeding seven days.
     *
     * @param Contract\NewReportInfo $params
     *
     * @return Contract\GetBannersStatResponse
     *
     * @since v4.live
     */
    public function getBannersStat(Contract\NewReportInfo $params)
    {
        return $this->invoke('GetBannersStat', array($params));
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
        return $this->invoke('CreateNewForecast', array($NewForecastInfo));
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
        return $this->invoke('GetForecast', array($id));
    }

    /**
     * Gets a list of Yandex.Catalog categories.
     *
     * @return Contract\RubricInfo[]
     */
    public function getRubrics()
    {
        return $this->invoke('GetRubrics', array());
    }

    /**
     * Gets a list of time zones.
     *
     * @return Contract\TimeZoneInfo[]
     */
    public function getTimeZones()
    {
        return $this->invoke('GetTimeZones', array());
    }

    /**
     * Gets a list of reports that have been generated or are being generated about
     * the projected number of impressions, clicks and campaign spending.
     *
     * @return Contract\ForecastStatusInfo[]
     */
    public function getForecastList()
    {
        return $this->invoke('GetForecastList', array());
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
        return $this->invoke('UpdatePrices', array($PhrasePriceInfo));
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
        return $this->invoke('CreateOrUpdateCampaign', array($CampaignInfo));
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
        return $this->invoke('CreateOrUpdateBanners', array($BannerInfo));
    }

    /**
     * Gets a list of API versions that are currently supported.
     *
     * @return Contract\VersionDesc[]
     */
    public function getAvailableVersions()
    {
        return $this->invoke('GetAvailableVersions', array());
    }

    /**
     * Gets suggestions for keywords.
     *
     * @param Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo
     *
     * @return array An array of suggestions for the keywords (up to 20 suggestions)
     */
    public function getKeywordsSuggestion(Contract\KeywordsSuggestionInfo $KeywordsSuggestionInfo)
    {
        return $this->invoke('GetKeywordsSuggestion', array($KeywordsSuggestionInfo));
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
        return $this->invoke('CreateNewSubclient', array($CreateNewSubclientRequest));
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
        return $this->invoke('CreateNewWordstatReport', array($NewWordstatReportInfo));
    }

    /**
     * Gets a list of query statistics reports that have been generated or are being generated.
     *
     * @return Contract\WordstatReportStatusInfo[]
     */
    public function getWordstatReportList()
    {
        return $this->invoke('GetWordstatReportList', array());
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
        return $this->invoke('GetWordstatReport', array($id));
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
        return $this->invoke('DeleteWordstatReport', array($id));
    }

    /**
     * Gets information about the Yandex.Metrica goals that are available for the campaign.
     *
     * @param Contract\StatGoalsCampaignIDInfo $params
     *
     * @return Contract\StatGoalInfo[]
     */
    public function getStatGoals(Contract\StatGoalsCampaignIDInfo $params)
    {
        return $this->invoke('GetStatGoals', array($params));
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
        return $this->invoke('GetChanges', array($GetChangesRequest));
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
        return $this->invoke('GetEventsLog', array($params));
    }

    /**
     * Gets an array of tags for specific campaigns.
     *
     * @param Contract\CampaignIDSInfo $params
     *
     * @return Contract\CampaignTagsInfo[]
     *
     * @since v4.live
     */
    public function getCampaignsTags(Contract\CampaignIDSInfo $params)
    {
        return $this->invoke('GetCampaignsTags', array($params));
    }

    /**
     * Updates tags of campaigns.
     *
     * @param Contract\CampaignTagsInfo[] $params
     *
     * @return Contract\CampaignTagsInfo[]
     *
     * @since v4.live
     */
    public function updateCampaignsTags(array $params)
    {
        return $this->invoke('UpdateCampaignsTags', array($params));
    }

    /**
     * Gets an array of tags for specific banners.
     *
     * @param Contract\BannersRequestInfo $params
     *
     * @return Contract\BannerTagsInfo[]
     *
     * @since v4.live
     */
    public function getBannersTags(Contract\BannersRequestInfo $params)
    {
        return $this->invoke('GetBannersTags', array($params));
    }

    /**
     * Updates tags of banners.
     *
     * @param Contract\BannerTagsInfo[] $params
     *
     * @return int
     *
     * @since v4.live
     */
    public function updateBannersTags(array $params)
    {
        return $this->invoke('UpdateBannersTags', array($params));
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
        return $this->invoke('TransferMoney', array($TransferMoneyInfo), true);
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
        return $this->invoke('GetCreditLimits', array(), true);
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
        return $this->invoke('CreateInvoice', array($CreateInvoiceInfo), true);
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
        return $this->invoke('PayCampaigns', array($PayCampaignsInfo), true);
    }

    /**
     * Gets an array of RetargetingGoal instances.
     *
     * @param Contract\GetRetargetingGoalsRequest $params
     *
     * @return Contract\RetargetingGoal[]
     *
     * @since v4.live
     */
    public function getRetargetingGoals(Contract\GetRetargetingGoalsRequest $params)
    {
        return $this->invoke('GetRetargetingGoals', array($params));
    }

    /**
     * Retargeting condition.
     *
     * @param Contract\RetargetingConditionRequest $params
     *
     * @return Contract\RetargetingConditionResponse
     *
     * @since v4.live
     */
    public function retargetingCondition(Contract\RetargetingConditionRequest $params)
    {
        return $this->invoke('RetargetingCondition', array($params));
    }

    /**
     * Retargeting
     *
     * @param Contract\RetargetingRequest $params
     *
     * @return Contract\RetargetingResponse
     *
     * @since v4.live
     */
    public function retargeting(Contract\RetargetingRequest $params)
    {
        return $this->invoke('Retargeting', array($params));
    }

    /**
     * Manages ad image.
     *
     * @param Contract\AdImageRequest $params
     *
     * @return Contract\AdImageResponse
     *
     * @since v4.live
     */
    public function adImage(Contract\AdImageRequest $params)
    {
        return $this->invoke('AdImage', array($params));
    }

    /**
     * Manages associations of ad image.
     *
     * @param Contract\AdImageAssociationRequest $params
     *
     * @return Contract\AdImageAssociationResponse
     *
     * @since v4.live
     */
    public function adImageAssociation(Contract\AdImageAssociationRequest $params)
    {
        return $this->invoke('AdImageAssociation', array($params));
    }

    /**
     * Enables shared account for specific client.
     *
     * @param Contract\EnableSharedAccountRequest $params
     *
     * @return Contract\EnableSharedAccountResponse
     *
     * @since v4.live
     */
    public function enableSharedAccount(Contract\EnableSharedAccountRequest $params)
    {
        return $this->invoke('EnableSharedAccount', array($params));
    }

    /**
     * Manages shared account.
     *
     * @param Contract\AccountManagementRequest $params
     *
     * @return Contract\AccountManagementResponse
     *
     * @since v4.live
     */
    public function accountManagement(Contract\AccountManagementRequest $params)
    {
        return $this->invoke('AccountManagement', array($params));
    }

    /**
     * Manages keywords.
     *
     * @param Contract\KeywordRequest $params
     *
     * @return Contract\KeywordResponse
     *
     * @since v4.live
     */
    public function keyword(Contract\KeywordRequest $params)
    {
        return $this->invoke('Keyword', array($params));
    }

    /**
     * Performs a SOAP request.
     *
     * @param string $request  The XML SOAP request
     * @param string $location The URL to request
     * @param string $action   The SOAP action
     * @param int    $version  The SOAP version
     * @param int    $oneWay   If one_way is set to 1, this method returns nothing.
     *                         Use this where a response is not expected
     *
     * @return string The XML SOAP response
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
     * @param string $method            A method name
     * @param array  $params            An array of parameters for API method
     * @param bool   $isFinancialMethod If true, when should be send the finance token
     *
     * @throws \Exception
     *
     * @return mixed
     */
    private function invoke($method, array $params = array(), $isFinancialMethod = false)
    {
        $this->dispatcher->dispatch(
            Events::BEFORE_REQUEST,
            new PreCallEvent($method, $params, $this->user)
        );

        try {
            $headers = array();

            if ($isFinancialMethod) {
                $operationNum = time();
                $financeToken = $this->user->createFinanceToken($method, $operationNum);

                $headers[] = new \SoapHeader(self::API_NS, 'finance_token', $financeToken);
                $headers[] = new \SoapHeader(self::API_NS, 'operation_num', $operationNum);
            }

            $response = $this->__soapCall($method, $params, array(), $headers);
        } catch (\Exception $ex) {
            if ($ex instanceof \SoapFault) {
                $ex = ApiException::createFromFault($ex, $this, $method);
            }

            $this->dispatcher->dispatch(
                Events::FAIL_REQUEST,
                new FailCallEvent($method, $params, $this->user, $ex)
            );

            throw $ex;
        }

        $this->dispatcher->dispatch(
            Events::AFTER_REQUEST,
            new PostCallEvent($method, $params, $this->user, $response)
        );

        return $response;
    }
}
