<?php

namespace Biplane\YandexDirect\Api\V4;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V4SoapClient;

/**
 * Auto-generated code.
 */
class YandexAPIService extends V4SoapClient
{
    const ENDPOINT = 'https://api.direct.yandex.ru/live/v4/wsdl/';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct(self::ENDPOINT, $dispatcher, $user, array(
            'classmap' => array(
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
                'PhraseAuctionBids' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseAuctionBids',
                'TransferMoneyInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TransferMoneyInfo',
                'PayCampElement' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampElement',
                'CreateInvoiceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo',
                'PayCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo',
                'PayCampaignsByCardInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsByCardInfo',
                'CheckPaymentInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CheckPaymentInfo',
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
            )
        ));
    }

    /**
     * GetVersion.
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->invoke('GetVersion', array());
    }

    /**
     * GetClientsList.
     *
     * @param Contract\ClientInfoRequest $params
     * @return Contract\ClientInfo[]
     */
    public function getClientsList(Contract\ClientInfoRequest $params)
    {
        return $this->invoke('GetClientsList', array($params));
    }

    /**
     * GetSubClients.
     *
     * @param Contract\GetSubClientsRequest $params
     * @return Contract\ShortClientInfo[]
     */
    public function getSubClients(Contract\GetSubClientsRequest $params)
    {
        return $this->invoke('GetSubClients', array($params));
    }

    /**
     * SetAutoPrice.
     *
     * @param Contract\AutoPriceInfo $params
     * @return Contract\PhrasePriceInfo[]
     */
    public function setAutoPrice(Contract\AutoPriceInfo $params)
    {
        return $this->invoke('SetAutoPrice', array($params));
    }

    /**
     * DeleteReport.
     *
     * @param int $params
     * @return int
     */
    public function deleteReport($params)
    {
        return $this->invoke('DeleteReport', array($params));
    }

    /**
     * GetSummaryStat.
     *
     * @param Contract\GetSummaryStatRequest $params
     * @return Contract\StatItem[]
     */
    public function getSummaryStat(Contract\GetSummaryStatRequest $params)
    {
        return $this->invoke('GetSummaryStat', array($params));
    }

    /**
     * GetCampaignParams.
     *
     * @param Contract\CampaignIDInfo $params
     * @return Contract\CampaignInfo
     */
    public function getCampaignParams(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('GetCampaignParams', array($params));
    }

    /**
     * GetCampaignsParams.
     *
     * @param Contract\CampaignIDSInfo $params
     * @return Contract\CampaignInfo[]
     */
    public function getCampaignsParams(Contract\CampaignIDSInfo $params)
    {
        return $this->invoke('GetCampaignsParams', array($params));
    }

    /**
     * DeleteForecastReport.
     *
     * @param int $params
     * @return int
     */
    public function deleteForecastReport($params)
    {
        return $this->invoke('DeleteForecastReport', array($params));
    }

    /**
     * ModerateBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function moderateBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('ModerateBanners', array($params));
    }

    /**
     * StopBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function stopBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('StopBanners', array($params));
    }

    /**
     * ResumeBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function resumeBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('ResumeBanners', array($params));
    }

    /**
     * ArchiveBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function archiveBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('ArchiveBanners', array($params));
    }

    /**
     * UnArchiveBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function unArchiveBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('UnArchiveBanners', array($params));
    }

    /**
     * DeleteBanners.
     *
     * @param Contract\CampaignBidsInfo $params
     * @return int
     */
    public function deleteBanners(Contract\CampaignBidsInfo $params)
    {
        return $this->invoke('DeleteBanners', array($params));
    }

    /**
     * StopCampaign.
     *
     * @param Contract\CampaignIDInfo $params
     * @return int
     */
    public function stopCampaign(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('StopCampaign', array($params));
    }

    /**
     * DeleteCampaign.
     *
     * @param Contract\CampaignIDInfo $params
     * @return int
     */
    public function deleteCampaign(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('DeleteCampaign', array($params));
    }

    /**
     * UnArchiveCampaign.
     *
     * @param Contract\CampaignIDInfo $params
     * @return int
     */
    public function unArchiveCampaign(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('UnArchiveCampaign', array($params));
    }

    /**
     * ArchiveCampaign.
     *
     * @param Contract\CampaignIDInfo $params
     * @return int
     */
    public function archiveCampaign(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('ArchiveCampaign', array($params));
    }

    /**
     * ResumeCampaign.
     *
     * @param Contract\CampaignIDInfo $params
     * @return int
     */
    public function resumeCampaign(Contract\CampaignIDInfo $params)
    {
        return $this->invoke('ResumeCampaign', array($params));
    }

    /**
     * GetReportList.
     *
     * @return Contract\ReportInfo[]
     */
    public function getReportList()
    {
        return $this->invoke('GetReportList', array());
    }

    /**
     * GetClientsUnits.
     *
     * @param string[] $params
     * @return Contract\ClientsUnitInfo[]
     */
    public function getClientsUnits(array $params)
    {
        return $this->invoke('GetClientsUnits', array($params));
    }

    /**
     * GetClientInfo.
     *
     * @param string[] $params
     * @return Contract\ClientInfo[]
     */
    public function getClientInfo(array $params)
    {
        return $this->invoke('GetClientInfo', array($params));
    }

    /**
     * UpdateClientInfo.
     *
     * @param Contract\ClientInfo[] $params
     * @return int
     */
    public function updateClientInfo(array $params)
    {
        return $this->invoke('UpdateClientInfo', array($params));
    }

    /**
     * GetBanners.
     *
     * @param Contract\GetBannersInfo $params
     * @return Contract\BannerInfo[]
     */
    public function getBanners(Contract\GetBannersInfo $params)
    {
        return $this->invoke('GetBanners', array($params));
    }

    /**
     * GetCampaignsList.
     *
     * @param string[] $params
     * @return Contract\ShortCampaignInfo[]
     */
    public function getCampaignsList(array $params)
    {
        return $this->invoke('GetCampaignsList', array($params));
    }

    /**
     * GetCampaignsListFilter.
     *
     * @param Contract\GetCampaignsInfo $params
     * @return Contract\ShortCampaignInfo[]
     */
    public function getCampaignsListFilter(Contract\GetCampaignsInfo $params)
    {
        return $this->invoke('GetCampaignsListFilter', array($params));
    }

    /**
     * GetBalance.
     *
     * @param int[] $params
     * @return Contract\CampaignBalanceInfo[]
     */
    public function getBalance(array $params)
    {
        return $this->invoke('GetBalance', array($params));
    }

    /**
     * GetBannerPhrases.
     *
     * @param int[] $params
     * @return Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrases(array $params)
    {
        return $this->invoke('GetBannerPhrases', array($params));
    }

    /**
     * GetBannerPhrasesFilter.
     *
     * @param Contract\BannerPhrasesFilterRequestInfo $params
     * @return Contract\BannerPhraseInfo[]
     */
    public function getBannerPhrasesFilter(Contract\BannerPhrasesFilterRequestInfo $params)
    {
        return $this->invoke('GetBannerPhrasesFilter', array($params));
    }

    /**
     * GetRegions.
     *
     * @return Contract\RegionInfo[]
     */
    public function getRegions()
    {
        return $this->invoke('GetRegions', array());
    }

    /**
     * CreateNewReport.
     *
     * @param Contract\NewReportInfo $params
     * @return int
     */
    public function createNewReport(Contract\NewReportInfo $params)
    {
        return $this->invoke('CreateNewReport', array($params));
    }

    /**
     * GetBannersStat.
     *
     * @param Contract\NewReportInfo $params
     * @return Contract\GetBannersStatResponse
     */
    public function getBannersStat(Contract\NewReportInfo $params)
    {
        return $this->invoke('GetBannersStat', array($params));
    }

    /**
     * CreateNewForecast.
     *
     * @param Contract\NewForecastInfo $params
     * @return int
     */
    public function createNewForecast(Contract\NewForecastInfo $params)
    {
        return $this->invoke('CreateNewForecast', array($params));
    }

    /**
     * GetForecast.
     *
     * @param int $params
     * @return Contract\GetForecastInfo
     */
    public function getForecast($params)
    {
        return $this->invoke('GetForecast', array($params));
    }

    /**
     * GetRubrics.
     *
     * @return Contract\RubricInfo[]
     */
    public function getRubrics()
    {
        return $this->invoke('GetRubrics', array());
    }

    /**
     * GetTimeZones.
     *
     * @return Contract\TimeZoneInfo[]
     */
    public function getTimeZones()
    {
        return $this->invoke('GetTimeZones', array());
    }

    /**
     * GetForecastList.
     *
     * @return Contract\ForecastStatusInfo[]
     */
    public function getForecastList()
    {
        return $this->invoke('GetForecastList', array());
    }

    /**
     * UpdatePrices.
     *
     * @param Contract\PhrasePriceInfo[] $params
     * @return int
     */
    public function updatePrices(array $params)
    {
        return $this->invoke('UpdatePrices', array($params));
    }

    /**
     * CreateOrUpdateCampaign.
     *
     * @param Contract\CampaignInfo $params
     * @return int
     */
    public function createOrUpdateCampaign(Contract\CampaignInfo $params)
    {
        return $this->invoke('CreateOrUpdateCampaign', array($params));
    }

    /**
     * CreateOrUpdateBanners.
     *
     * @param Contract\BannerInfo[] $params
     * @return int[]
     */
    public function createOrUpdateBanners(array $params)
    {
        return $this->invoke('CreateOrUpdateBanners', array($params));
    }

    /**
     * GetAvailableVersions.
     *
     * @return Contract\VersionDesc[]
     */
    public function getAvailableVersions()
    {
        return $this->invoke('GetAvailableVersions', array());
    }

    /**
     * GetKeywordsSuggestion.
     *
     * @param Contract\KeywordsSuggestionInfo $params
     * @return string[]
     */
    public function getKeywordsSuggestion(Contract\KeywordsSuggestionInfo $params)
    {
        return $this->invoke('GetKeywordsSuggestion', array($params));
    }

    /**
     * CreateNewSubclient.
     *
     * @param Contract\CreateNewSubclientRequest $params
     * @return Contract\CreateNewSubclientResponse
     */
    public function createNewSubclient(Contract\CreateNewSubclientRequest $params)
    {
        return $this->invoke('CreateNewSubclient', array($params));
    }

    /**
     * CreateNewWordstatReport.
     *
     * @param Contract\NewWordstatReportInfo $params
     * @return int
     */
    public function createNewWordstatReport(Contract\NewWordstatReportInfo $params)
    {
        return $this->invoke('CreateNewWordstatReport', array($params));
    }

    /**
     * GetWordstatReportList.
     *
     * @return Contract\WordstatReportStatusInfo[]
     */
    public function getWordstatReportList()
    {
        return $this->invoke('GetWordstatReportList', array());
    }

    /**
     * GetWordstatReport.
     *
     * @param int $params
     * @return Contract\WordstatReportInfo[]
     */
    public function getWordstatReport($params)
    {
        return $this->invoke('GetWordstatReport', array($params));
    }

    /**
     * DeleteWordstatReport.
     *
     * @param int $params
     * @return int
     */
    public function deleteWordstatReport($params)
    {
        return $this->invoke('DeleteWordstatReport', array($params));
    }

    /**
     * GetStatGoals.
     *
     * @param Contract\StatGoalsCampaignIDInfo $params
     * @return Contract\StatGoalInfo[]
     */
    public function getStatGoals(Contract\StatGoalsCampaignIDInfo $params)
    {
        return $this->invoke('GetStatGoals', array($params));
    }

    /**
     * GetChanges.
     *
     * @param Contract\GetChangesRequest $params
     * @return Contract\GetChangesResponse
     */
    public function getChanges(Contract\GetChangesRequest $params)
    {
        return $this->invoke('GetChanges', array($params));
    }

    /**
     * GetEventsLog.
     *
     * @param Contract\GetEventsLogRequest $params
     * @return Contract\EventsLogItem[]
     */
    public function getEventsLog(Contract\GetEventsLogRequest $params)
    {
        return $this->invoke('GetEventsLog', array($params));
    }

    /**
     * GetCampaignsTags.
     *
     * @param Contract\CampaignIDSInfo $params
     * @return Contract\CampaignTagsInfo[]
     */
    public function getCampaignsTags(Contract\CampaignIDSInfo $params)
    {
        return $this->invoke('GetCampaignsTags', array($params));
    }

    /**
     * UpdateCampaignsTags.
     *
     * @param Contract\CampaignTagsInfo[] $params
     * @return Contract\CampaignTagsInfo[]
     */
    public function updateCampaignsTags(array $params)
    {
        return $this->invoke('UpdateCampaignsTags', array($params));
    }

    /**
     * GetBannersTags.
     *
     * @param Contract\BannersRequestInfo $params
     * @return Contract\BannerTagsInfo[]
     */
    public function getBannersTags(Contract\BannersRequestInfo $params)
    {
        return $this->invoke('GetBannersTags', array($params));
    }

    /**
     * UpdateBannersTags.
     *
     * @param Contract\BannerTagsInfo[] $params
     * @return int
     */
    public function updateBannersTags(array $params)
    {
        return $this->invoke('UpdateBannersTags', array($params));
    }

    /**
     * TransferMoney.
     *
     * @param Contract\TransferMoneyInfo $params
     * @return int
     */
    public function transferMoney(Contract\TransferMoneyInfo $params)
    {
        return $this->invoke('TransferMoney', array($params));
    }

    /**
     * GetCreditLimits.
     *
     * @return Contract\CreditLimitsInfo
     */
    public function getCreditLimits()
    {
        return $this->invoke('GetCreditLimits', array());
    }

    /**
     * CreateInvoice.
     *
     * @param Contract\CreateInvoiceInfo $params
     * @return string
     */
    public function createInvoice(Contract\CreateInvoiceInfo $params)
    {
        return $this->invoke('CreateInvoice', array($params));
    }

    /**
     * PayCampaigns.
     *
     * @param Contract\PayCampaignsInfo $params
     * @return int
     */
    public function payCampaigns(Contract\PayCampaignsInfo $params)
    {
        return $this->invoke('PayCampaigns', array($params));
    }

    /**
     * PayCampaignsByCard.
     *
     * @param Contract\PayCampaignsByCardInfo $params
     * @return string
     */
    public function payCampaignsByCard(Contract\PayCampaignsByCardInfo $params)
    {
        return $this->invoke('PayCampaignsByCard', array($params));
    }

    /**
     * CheckPayment.
     *
     * @param Contract\CheckPaymentInfo $params
     * @return string
     */
    public function checkPayment(Contract\CheckPaymentInfo $params)
    {
        return $this->invoke('CheckPayment', array($params));
    }

    /**
     * GetRetargetingGoals.
     *
     * @param Contract\GetRetargetingGoalsRequest $params
     * @return Contract\RetargetingGoal[]
     */
    public function getRetargetingGoals(Contract\GetRetargetingGoalsRequest $params)
    {
        return $this->invoke('GetRetargetingGoals', array($params));
    }

    /**
     * RetargetingCondition.
     *
     * @param Contract\RetargetingConditionRequest $params
     * @return Contract\RetargetingConditionResponse
     */
    public function retargetingCondition(Contract\RetargetingConditionRequest $params)
    {
        return $this->invoke('RetargetingCondition', array($params));
    }

    /**
     * Retargeting.
     *
     * @param Contract\RetargetingRequest $params
     * @return Contract\RetargetingResponse
     */
    public function retargeting(Contract\RetargetingRequest $params)
    {
        return $this->invoke('Retargeting', array($params));
    }

    /**
     * AdImage.
     *
     * @param Contract\AdImageRequest $params
     * @return Contract\AdImageResponse
     */
    public function adImage(Contract\AdImageRequest $params)
    {
        return $this->invoke('AdImage', array($params));
    }

    /**
     * AdImageAssociation.
     *
     * @param Contract\AdImageAssociationRequest $params
     * @return Contract\AdImageAssociationResponse
     */
    public function adImageAssociation(Contract\AdImageAssociationRequest $params)
    {
        return $this->invoke('AdImageAssociation', array($params));
    }

    /**
     * EnableSharedAccount.
     *
     * @param Contract\EnableSharedAccountRequest $params
     * @return Contract\EnableSharedAccountResponse
     */
    public function enableSharedAccount(Contract\EnableSharedAccountRequest $params)
    {
        return $this->invoke('EnableSharedAccount', array($params));
    }

    /**
     * AccountManagement.
     *
     * @param Contract\AccountManagementRequest $params
     * @return Contract\AccountManagementResponse
     */
    public function accountManagement(Contract\AccountManagementRequest $params)
    {
        return $this->invoke('AccountManagement', array($params));
    }

    /**
     * Keyword.
     *
     * @param Contract\KeywordRequest $params
     * @return Contract\KeywordResponse
     */
    public function keyword(Contract\KeywordRequest $params)
    {
        return $this->invoke('Keyword', array($params));
    }
}
