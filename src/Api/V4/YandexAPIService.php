<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest;
use Biplane\YandexDirect\Api\V4\Contract\AccountManagementResponse;
use Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationRequest;
use Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationResponse;
use Biplane\YandexDirect\Api\V4\Contract\AdImageRequest;
use Biplane\YandexDirect\Api\V4\Contract\AdImageResponse;
use Biplane\YandexDirect\Api\V4\Contract\BannersRequestInfo;
use Biplane\YandexDirect\Api\V4\Contract\BannerTagsInfo;
use Biplane\YandexDirect\Api\V4\Contract\CampaignBalanceInfo;
use Biplane\YandexDirect\Api\V4\Contract\CampaignIDSInfo;
use Biplane\YandexDirect\Api\V4\Contract\CampaignTagsInfo;
use Biplane\YandexDirect\Api\V4\Contract\CheckPaymentInfo;
use Biplane\YandexDirect\Api\V4\Contract\ClientInfo;
use Biplane\YandexDirect\Api\V4\Contract\ClientInfoRequest;
use Biplane\YandexDirect\Api\V4\Contract\ClientsUnitInfo;
use Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo;
use Biplane\YandexDirect\Api\V4\Contract\CreateNewSubclientRequest;
use Biplane\YandexDirect\Api\V4\Contract\CreateNewSubclientResponse;
use Biplane\YandexDirect\Api\V4\Contract\CreditLimitsInfo;
use Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountRequest;
use Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountResponse;
use Biplane\YandexDirect\Api\V4\Contract\EventsLogItem;
use Biplane\YandexDirect\Api\V4\Contract\ForecastStatusInfo;
use Biplane\YandexDirect\Api\V4\Contract\GetBannersStatResponse;
use Biplane\YandexDirect\Api\V4\Contract\GetEventsLogRequest;
use Biplane\YandexDirect\Api\V4\Contract\GetForecastInfo;
use Biplane\YandexDirect\Api\V4\Contract\GetRetargetingGoalsRequest;
use Biplane\YandexDirect\Api\V4\Contract\GetSubClientsRequest;
use Biplane\YandexDirect\Api\V4\Contract\GetSummaryStatRequest;
use Biplane\YandexDirect\Api\V4\Contract\KeywordsSuggestionInfo;
use Biplane\YandexDirect\Api\V4\Contract\NewForecastInfo;
use Biplane\YandexDirect\Api\V4\Contract\NewReportInfo;
use Biplane\YandexDirect\Api\V4\Contract\NewWordstatReportInfo;
use Biplane\YandexDirect\Api\V4\Contract\PayCampaignsByCardInfo;
use Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo;
use Biplane\YandexDirect\Api\V4\Contract\RegionInfo;
use Biplane\YandexDirect\Api\V4\Contract\ReportInfo;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionRequest;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingConditionResponse;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingGoal;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingRequest;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingResponse;
use Biplane\YandexDirect\Api\V4\Contract\RubricInfo;
use Biplane\YandexDirect\Api\V4\Contract\ShortClientInfo;
use Biplane\YandexDirect\Api\V4\Contract\StatGoalInfo;
use Biplane\YandexDirect\Api\V4\Contract\StatGoalsCampaignIDInfo;
use Biplane\YandexDirect\Api\V4\Contract\StatItem;
use Biplane\YandexDirect\Api\V4\Contract\TimeZoneInfo;
use Biplane\YandexDirect\Api\V4\Contract\TransferMoneyInfo;
use Biplane\YandexDirect\Api\V4\Contract\VersionDesc;
use Biplane\YandexDirect\Api\V4\Contract\WordstatReportInfo;
use Biplane\YandexDirect\Api\V4\Contract\WordstatReportStatusInfo;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class YandexAPIService extends ApiSoapClientV4
{
    public const ENDPOINT = 'https://api.direct.yandex.ru/live/v4/wsdl/';

    /**
     * @param array<string, mixed> $options
     */
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

    public function getVersion(): int
    {
        return $this->__soapCall('GetVersion', []);
    }

    /**
     * @return ClientInfo[]
     */
    public function getClientsList(ClientInfoRequest $params): array
    {
        return $this->__soapCall('GetClientsList', [$params]);
    }

    /**
     * @return ShortClientInfo[]
     */
    public function getSubClients(GetSubClientsRequest $params): array
    {
        return $this->__soapCall('GetSubClients', [$params]);
    }

    public function deleteReport(int $params): int
    {
        return $this->__soapCall('DeleteReport', [$params]);
    }

    /**
     * @return StatItem[]
     */
    public function getSummaryStat(GetSummaryStatRequest $params): array
    {
        return $this->__soapCall('GetSummaryStat', [$params]);
    }

    public function deleteForecastReport(int $params): int
    {
        return $this->__soapCall('DeleteForecastReport', [$params]);
    }

    /**
     * @return ReportInfo[]
     */
    public function getReportList(): array
    {
        return $this->__soapCall('GetReportList', []);
    }

    /**
     * @param string[] $params
     *
     * @return ClientsUnitInfo[]
     */
    public function getClientsUnits(array $params): array
    {
        return $this->__soapCall('GetClientsUnits', [$params]);
    }

    /**
     * @param string[] $params
     *
     * @return ClientInfo[]
     */
    public function getClientInfo(array $params): array
    {
        return $this->__soapCall('GetClientInfo', [$params]);
    }

    /**
     * @param ClientInfo[] $params
     */
    public function updateClientInfo(array $params): int
    {
        return $this->__soapCall('UpdateClientInfo', [$params]);
    }

    /**
     * @param int[] $params
     *
     * @return CampaignBalanceInfo[]
     */
    public function getBalance(array $params): array
    {
        return $this->__soapCall('GetBalance', [$params]);
    }

    /**
     * @return RegionInfo[]
     */
    public function getRegions(): array
    {
        return $this->__soapCall('GetRegions', []);
    }

    public function createNewReport(NewReportInfo $params): int
    {
        return $this->__soapCall('CreateNewReport', [$params]);
    }

    public function getBannersStat(NewReportInfo $params): GetBannersStatResponse
    {
        return $this->__soapCall('GetBannersStat', [$params]);
    }

    public function createNewForecast(NewForecastInfo $params): int
    {
        return $this->__soapCall('CreateNewForecast', [$params]);
    }

    public function getForecast(int $params): GetForecastInfo
    {
        return $this->__soapCall('GetForecast', [$params]);
    }

    /**
     * @return RubricInfo[]
     */
    public function getRubrics(): array
    {
        return $this->__soapCall('GetRubrics', []);
    }

    /**
     * @return TimeZoneInfo[]
     */
    public function getTimeZones(): array
    {
        return $this->__soapCall('GetTimeZones', []);
    }

    /**
     * @return ForecastStatusInfo[]
     */
    public function getForecastList(): array
    {
        return $this->__soapCall('GetForecastList', []);
    }

    /**
     * @return VersionDesc[]
     */
    public function getAvailableVersions(): array
    {
        return $this->__soapCall('GetAvailableVersions', []);
    }

    /**
     * @return string[]
     */
    public function getKeywordsSuggestion(KeywordsSuggestionInfo $params): array
    {
        return $this->__soapCall('GetKeywordsSuggestion', [$params]);
    }

    public function createNewSubclient(CreateNewSubclientRequest $params): CreateNewSubclientResponse
    {
        return $this->__soapCall('CreateNewSubclient', [$params]);
    }

    public function createNewWordstatReport(NewWordstatReportInfo $params): int
    {
        return $this->__soapCall('CreateNewWordstatReport', [$params]);
    }

    /**
     * @return WordstatReportStatusInfo[]
     */
    public function getWordstatReportList(): array
    {
        return $this->__soapCall('GetWordstatReportList', []);
    }

    /**
     * @return WordstatReportInfo[]
     */
    public function getWordstatReport(int $params): array
    {
        return $this->__soapCall('GetWordstatReport', [$params]);
    }

    public function deleteWordstatReport(int $params): int
    {
        return $this->__soapCall('DeleteWordstatReport', [$params]);
    }

    /**
     * @return StatGoalInfo[]
     */
    public function getStatGoals(StatGoalsCampaignIDInfo $params): array
    {
        return $this->__soapCall('GetStatGoals', [$params]);
    }

    /**
     * @return EventsLogItem[]
     */
    public function getEventsLog(GetEventsLogRequest $params): array
    {
        return $this->__soapCall('GetEventsLog', [$params]);
    }

    /**
     * @return CampaignTagsInfo[]
     */
    public function getCampaignsTags(CampaignIDSInfo $params): array
    {
        return $this->__soapCall('GetCampaignsTags', [$params]);
    }

    /**
     * @param CampaignTagsInfo[] $params
     *
     * @return CampaignTagsInfo[]
     */
    public function updateCampaignsTags(array $params): array
    {
        return $this->__soapCall('UpdateCampaignsTags', [$params]);
    }

    /**
     * @return BannerTagsInfo[]
     */
    public function getBannersTags(BannersRequestInfo $params): array
    {
        return $this->__soapCall('GetBannersTags', [$params]);
    }

    /**
     * @param BannerTagsInfo[] $params
     */
    public function updateBannersTags(array $params): int
    {
        return $this->__soapCall('UpdateBannersTags', [$params]);
    }

    public function transferMoney(TransferMoneyInfo $params): int
    {
        return $this->__soapCall('TransferMoney', [$params]);
    }

    public function getCreditLimits(): CreditLimitsInfo
    {
        return $this->__soapCall('GetCreditLimits', []);
    }

    public function createInvoice(CreateInvoiceInfo $params): string
    {
        return $this->__soapCall('CreateInvoice', [$params]);
    }

    public function payCampaigns(PayCampaignsInfo $params): int
    {
        return $this->__soapCall('PayCampaigns', [$params]);
    }

    public function payCampaignsByCard(PayCampaignsByCardInfo $params): string
    {
        return $this->__soapCall('PayCampaignsByCard', [$params]);
    }

    public function checkPayment(CheckPaymentInfo $params): string
    {
        return $this->__soapCall('CheckPayment', [$params]);
    }

    /**
     * @return RetargetingGoal[]
     */
    public function getRetargetingGoals(GetRetargetingGoalsRequest $params): array
    {
        return $this->__soapCall('GetRetargetingGoals', [$params]);
    }

    public function retargetingCondition(RetargetingConditionRequest $params): RetargetingConditionResponse
    {
        return $this->__soapCall('RetargetingCondition', [$params]);
    }

    public function retargeting(RetargetingRequest $params): RetargetingResponse
    {
        return $this->__soapCall('Retargeting', [$params]);
    }

    public function adImage(AdImageRequest $params): AdImageResponse
    {
        return $this->__soapCall('AdImage', [$params]);
    }

    public function adImageAssociation(AdImageAssociationRequest $params): AdImageAssociationResponse
    {
        return $this->__soapCall('AdImageAssociation', [$params]);
    }

    public function enableSharedAccount(EnableSharedAccountRequest $params): EnableSharedAccountResponse
    {
        return $this->__soapCall('EnableSharedAccount', [$params]);
    }

    public function accountManagement(AccountManagementRequest $params): AccountManagementResponse
    {
        return $this->__soapCall('AccountManagement', [$params]);
    }
}
