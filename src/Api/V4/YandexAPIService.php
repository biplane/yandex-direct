<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class YandexAPIService extends ApiSoapClientV4
{
    public const ENDPOINT = 'https://api.direct.yandex.ru/live/v4/wsdl/';

    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'NewReportFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewReportFilterInfo',
            'NewReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewReportInfo',
            'TimeZoneInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TimeZoneInfo',
            'StatGoalsCampaignIDInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalsCampaignIDInfo',
            'CampaignIDSInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignIDSInfo',
            'DayBudgetInfo' => 'Biplane\YandexDirect\Api\V4\Contract\DayBudgetInfo',
            'CampaignStrategy' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignStrategy',
            'CampaignContextStrategy' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignContextStrategy',
            'SmsNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\SmsNotificationInfo',
            'EmailNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\EmailNotificationInfo',
            'CampaignBalanceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignBalanceInfo',
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
            'BannerPhraseInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerPhraseInfo',
            'PhraseUserParams' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseUserParams',
            'PhraseAuctionBids' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseAuctionBids',
            'TransferMoneyInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TransferMoneyInfo',
            'PayCampElement' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampElement',
            'CreateInvoiceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo',
            'PayCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo',
            'PayCampaignsByCardInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsByCardInfo',
            'CheckPaymentInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CheckPaymentInfo',
            'Sitelink' => 'Biplane\YandexDirect\Api\V4\Contract\Sitelink',
            'RejectReason' => 'Biplane\YandexDirect\Api\V4\Contract\RejectReason',
            'CampaignsFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignsFilterInfo',
            'BannersFilterInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannersFilterInfo',
            'NewForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewForecastInfo',
            'ForecastCommonInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ForecastCommonInfo',
            'GetForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\GetForecastInfo',
            'NewWordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewWordstatReportInfo',
            'WordstatReportStatusInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportStatusInfo',
            'WordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportInfo',
            'WordstatItem' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatItem',
            'StatGoalInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalInfo',
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
            'GetChangesIntData' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesIntData',
            'GetChangesLongData' => 'Biplane\YandexDirect\Api\V4\Contract\GetChangesLongData',
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
            'KeywordActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordActionResult',
            'QualityIndex' => 'Biplane\YandexDirect\Api\V4\Contract\QualityIndex',
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
            'AccountDayBudgetInfo' => 'Biplane\YandexDirect\Api\V4\Contract\AccountDayBudgetInfo',
            'Account' => 'Biplane\YandexDirect\Api\V4\Contract\Account',
            'AccountManagementResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AccountManagementResponse',
            'AccountActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AccountActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * GetVersion.
     */
    public function getVersion(): int
    {
        return $this->__soapCall('GetVersion', []);
    }

    /**
     * GetClientsList.
     *
     * @return Contract\ClientInfo[]
     */
    public function getClientsList(Contract\ClientInfoRequest $params): array
    {
        return $this->__soapCall('GetClientsList', [$params]);
    }

    /**
     * GetSubClients.
     *
     * @return Contract\ShortClientInfo[]
     */
    public function getSubClients(Contract\GetSubClientsRequest $params): array
    {
        return $this->__soapCall('GetSubClients', [$params]);
    }

    /**
     * DeleteReport.
     */
    public function deleteReport(int $params): int
    {
        return $this->__soapCall('DeleteReport', [$params]);
    }

    /**
     * GetSummaryStat.
     *
     * @return Contract\StatItem[]
     */
    public function getSummaryStat(Contract\GetSummaryStatRequest $params): array
    {
        return $this->__soapCall('GetSummaryStat', [$params]);
    }

    /**
     * DeleteForecastReport.
     */
    public function deleteForecastReport(int $params): int
    {
        return $this->__soapCall('DeleteForecastReport', [$params]);
    }

    /**
     * GetReportList.
     *
     * @return Contract\ReportInfo[]
     */
    public function getReportList(): array
    {
        return $this->__soapCall('GetReportList', []);
    }

    /**
     * GetClientsUnits.
     *
     * @param string[] $params
     *
     * @return Contract\ClientsUnitInfo[]
     */
    public function getClientsUnits(array $params): array
    {
        return $this->__soapCall('GetClientsUnits', [$params]);
    }

    /**
     * GetClientInfo.
     *
     * @param string[] $params
     *
     * @return Contract\ClientInfo[]
     */
    public function getClientInfo(array $params): array
    {
        return $this->__soapCall('GetClientInfo', [$params]);
    }

    /**
     * UpdateClientInfo.
     *
     * @param Contract\ClientInfo[] $params
     */
    public function updateClientInfo(array $params): int
    {
        return $this->__soapCall('UpdateClientInfo', [$params]);
    }

    /**
     * GetBalance.
     *
     * @param int[] $params
     *
     * @return Contract\CampaignBalanceInfo[]
     */
    public function getBalance(array $params): array
    {
        return $this->__soapCall('GetBalance', [$params]);
    }

    /**
     * GetRegions.
     *
     * @return Contract\RegionInfo[]
     */
    public function getRegions(): array
    {
        return $this->__soapCall('GetRegions', []);
    }

    /**
     * CreateNewReport.
     */
    public function createNewReport(Contract\NewReportInfo $params): int
    {
        return $this->__soapCall('CreateNewReport', [$params]);
    }

    /**
     * GetBannersStat.
     */
    public function getBannersStat(Contract\NewReportInfo $params): Contract\GetBannersStatResponse
    {
        return $this->__soapCall('GetBannersStat', [$params]);
    }

    /**
     * CreateNewForecast.
     */
    public function createNewForecast(Contract\NewForecastInfo $params): int
    {
        return $this->__soapCall('CreateNewForecast', [$params]);
    }

    /**
     * GetForecast.
     */
    public function getForecast(int $params): Contract\GetForecastInfo
    {
        return $this->__soapCall('GetForecast', [$params]);
    }

    /**
     * GetRubrics.
     *
     * @return Contract\RubricInfo[]
     */
    public function getRubrics(): array
    {
        return $this->__soapCall('GetRubrics', []);
    }

    /**
     * GetTimeZones.
     *
     * @return Contract\TimeZoneInfo[]
     */
    public function getTimeZones(): array
    {
        return $this->__soapCall('GetTimeZones', []);
    }

    /**
     * GetForecastList.
     *
     * @return Contract\ForecastStatusInfo[]
     */
    public function getForecastList(): array
    {
        return $this->__soapCall('GetForecastList', []);
    }

    /**
     * GetAvailableVersions.
     *
     * @return Contract\VersionDesc[]
     */
    public function getAvailableVersions(): array
    {
        return $this->__soapCall('GetAvailableVersions', []);
    }

    /**
     * GetKeywordsSuggestion.
     *
     * @return string[]
     */
    public function getKeywordsSuggestion(Contract\KeywordsSuggestionInfo $params): array
    {
        return $this->__soapCall('GetKeywordsSuggestion', [$params]);
    }

    /**
     * CreateNewSubclient.
     */
    public function createNewSubclient(Contract\CreateNewSubclientRequest $params): Contract\CreateNewSubclientResponse
    {
        return $this->__soapCall('CreateNewSubclient', [$params]);
    }

    /**
     * CreateNewWordstatReport.
     */
    public function createNewWordstatReport(Contract\NewWordstatReportInfo $params): int
    {
        return $this->__soapCall('CreateNewWordstatReport', [$params]);
    }

    /**
     * GetWordstatReportList.
     *
     * @return Contract\WordstatReportStatusInfo[]
     */
    public function getWordstatReportList(): array
    {
        return $this->__soapCall('GetWordstatReportList', []);
    }

    /**
     * GetWordstatReport.
     *
     * @return Contract\WordstatReportInfo[]
     */
    public function getWordstatReport(int $params): array
    {
        return $this->__soapCall('GetWordstatReport', [$params]);
    }

    /**
     * DeleteWordstatReport.
     */
    public function deleteWordstatReport(int $params): int
    {
        return $this->__soapCall('DeleteWordstatReport', [$params]);
    }

    /**
     * GetStatGoals.
     *
     * @return Contract\StatGoalInfo[]
     */
    public function getStatGoals(Contract\StatGoalsCampaignIDInfo $params): array
    {
        return $this->__soapCall('GetStatGoals', [$params]);
    }

    /**
     * GetEventsLog.
     *
     * @return Contract\EventsLogItem[]
     */
    public function getEventsLog(Contract\GetEventsLogRequest $params): array
    {
        return $this->__soapCall('GetEventsLog', [$params]);
    }

    /**
     * GetCampaignsTags.
     *
     * @return Contract\CampaignTagsInfo[]
     */
    public function getCampaignsTags(Contract\CampaignIDSInfo $params): array
    {
        return $this->__soapCall('GetCampaignsTags', [$params]);
    }

    /**
     * UpdateCampaignsTags.
     *
     * @param Contract\CampaignTagsInfo[] $params
     *
     * @return Contract\CampaignTagsInfo[]
     */
    public function updateCampaignsTags(array $params): array
    {
        return $this->__soapCall('UpdateCampaignsTags', [$params]);
    }

    /**
     * GetBannersTags.
     *
     * @return Contract\BannerTagsInfo[]
     */
    public function getBannersTags(Contract\BannersRequestInfo $params): array
    {
        return $this->__soapCall('GetBannersTags', [$params]);
    }

    /**
     * UpdateBannersTags.
     *
     * @param Contract\BannerTagsInfo[] $params
     */
    public function updateBannersTags(array $params): int
    {
        return $this->__soapCall('UpdateBannersTags', [$params]);
    }

    /**
     * TransferMoney.
     */
    public function transferMoney(Contract\TransferMoneyInfo $params): int
    {
        return $this->__soapCall('TransferMoney', [$params]);
    }

    /**
     * GetCreditLimits.
     */
    public function getCreditLimits(): Contract\CreditLimitsInfo
    {
        return $this->__soapCall('GetCreditLimits', []);
    }

    /**
     * CreateInvoice.
     */
    public function createInvoice(Contract\CreateInvoiceInfo $params): string
    {
        return $this->__soapCall('CreateInvoice', [$params]);
    }

    /**
     * PayCampaigns.
     */
    public function payCampaigns(Contract\PayCampaignsInfo $params): int
    {
        return $this->__soapCall('PayCampaigns', [$params]);
    }

    /**
     * PayCampaignsByCard.
     */
    public function payCampaignsByCard(Contract\PayCampaignsByCardInfo $params): string
    {
        return $this->__soapCall('PayCampaignsByCard', [$params]);
    }

    /**
     * CheckPayment.
     */
    public function checkPayment(Contract\CheckPaymentInfo $params): string
    {
        return $this->__soapCall('CheckPayment', [$params]);
    }

    /**
     * GetRetargetingGoals.
     *
     * @return Contract\RetargetingGoal[]
     */
    public function getRetargetingGoals(Contract\GetRetargetingGoalsRequest $params): array
    {
        return $this->__soapCall('GetRetargetingGoals', [$params]);
    }

    /**
     * RetargetingCondition.
     */
    public function retargetingCondition(Contract\RetargetingConditionRequest $params): Contract\RetargetingConditionResponse
    {
        return $this->__soapCall('RetargetingCondition', [$params]);
    }

    /**
     * Retargeting.
     */
    public function retargeting(Contract\RetargetingRequest $params): Contract\RetargetingResponse
    {
        return $this->__soapCall('Retargeting', [$params]);
    }

    /**
     * AdImage.
     */
    public function adImage(Contract\AdImageRequest $params): Contract\AdImageResponse
    {
        return $this->__soapCall('AdImage', [$params]);
    }

    /**
     * AdImageAssociation.
     */
    public function adImageAssociation(Contract\AdImageAssociationRequest $params): Contract\AdImageAssociationResponse
    {
        return $this->__soapCall('AdImageAssociation', [$params]);
    }

    /**
     * EnableSharedAccount.
     */
    public function enableSharedAccount(Contract\EnableSharedAccountRequest $params): Contract\EnableSharedAccountResponse
    {
        return $this->__soapCall('EnableSharedAccount', [$params]);
    }

    /**
     * AccountManagement.
     */
    public function accountManagement(Contract\AccountManagementRequest $params): Contract\AccountManagementResponse
    {
        return $this->__soapCall('AccountManagement', [$params]);
    }
}
