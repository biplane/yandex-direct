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
use Biplane\YandexDirect\Api\V4\Contract\CampaignIDSInfo;
use Biplane\YandexDirect\Api\V4\Contract\CampaignTagsInfo;
use Biplane\YandexDirect\Api\V4\Contract\CheckPaymentInfo;
use Biplane\YandexDirect\Api\V4\Contract\ClientsUnitInfo;
use Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo;
use Biplane\YandexDirect\Api\V4\Contract\CreditLimitsInfo;
use Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountRequest;
use Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountResponse;
use Biplane\YandexDirect\Api\V4\Contract\EventsLogItem;
use Biplane\YandexDirect\Api\V4\Contract\ForecastStatusInfo;
use Biplane\YandexDirect\Api\V4\Contract\GetEventsLogRequest;
use Biplane\YandexDirect\Api\V4\Contract\GetForecastInfo;
use Biplane\YandexDirect\Api\V4\Contract\GetRetargetingGoalsRequest;
use Biplane\YandexDirect\Api\V4\Contract\KeywordsSuggestionInfo;
use Biplane\YandexDirect\Api\V4\Contract\NewForecastInfo;
use Biplane\YandexDirect\Api\V4\Contract\NewWordstatReportInfo;
use Biplane\YandexDirect\Api\V4\Contract\PayCampaignsByCardInfo;
use Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo;
use Biplane\YandexDirect\Api\V4\Contract\RegionInfo;
use Biplane\YandexDirect\Api\V4\Contract\RetargetingGoal;
use Biplane\YandexDirect\Api\V4\Contract\RubricInfo;
use Biplane\YandexDirect\Api\V4\Contract\StatGoalInfo;
use Biplane\YandexDirect\Api\V4\Contract\StatGoalsCampaignIDInfo;
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
    public const string ENDPOINT = 'https://api.direct.yandex.ru/live/v4/wsdl/';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'ClientsUnitInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ClientsUnitInfo',
            'RegionInfo' => 'Biplane\YandexDirect\Api\V4\Contract\RegionInfo',
            'NewForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewForecastInfo',
            'GetForecastInfo' => 'Biplane\YandexDirect\Api\V4\Contract\GetForecastInfo',
            'BannerPhraseInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerPhraseInfo',
            'CoverageInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CoverageInfo',
            'PhraseUserParams' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseUserParams',
            'PhraseAuctionBids' => 'Biplane\YandexDirect\Api\V4\Contract\PhraseAuctionBids',
            'ForecastCommonInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ForecastCommonInfo',
            'RubricInfo' => 'Biplane\YandexDirect\Api\V4\Contract\RubricInfo',
            'TimeZoneInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TimeZoneInfo',
            'ForecastStatusInfo' => 'Biplane\YandexDirect\Api\V4\Contract\ForecastStatusInfo',
            'VersionDesc' => 'Biplane\YandexDirect\Api\V4\Contract\VersionDesc',
            'KeywordsSuggestionInfo' => 'Biplane\YandexDirect\Api\V4\Contract\KeywordsSuggestionInfo',
            'NewWordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\NewWordstatReportInfo',
            'WordstatReportStatusInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportStatusInfo',
            'WordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatReportInfo',
            'WordstatItem' => 'Biplane\YandexDirect\Api\V4\Contract\WordstatItem',
            'StatGoalsCampaignIDInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalsCampaignIDInfo',
            'StatGoalInfo' => 'Biplane\YandexDirect\Api\V4\Contract\StatGoalInfo',
            'GetEventsLogRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetEventsLogRequest',
            'GetEventsLogFilter' => 'Biplane\YandexDirect\Api\V4\Contract\GetEventsLogFilter',
            'EventsLogItem' => 'Biplane\YandexDirect\Api\V4\Contract\EventsLogItem',
            'EventsLogItemAttributes' => 'Biplane\YandexDirect\Api\V4\Contract\EventsLogItemAttributes',
            'CampaignIDSInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignIDSInfo',
            'CampaignTagsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CampaignTagsInfo',
            'TagInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TagInfo',
            'BannersRequestInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannersRequestInfo',
            'BannerTagsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\BannerTagsInfo',
            'TransferMoneyInfo' => 'Biplane\YandexDirect\Api\V4\Contract\TransferMoneyInfo',
            'PayCampElement' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampElement',
            'CreditLimitsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreditLimitsInfo',
            'CreditLimitsItem' => 'Biplane\YandexDirect\Api\V4\Contract\CreditLimitsItem',
            'CreateInvoiceInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CreateInvoiceInfo',
            'PayCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsInfo',
            'PayCampaignsByCardInfo' => 'Biplane\YandexDirect\Api\V4\Contract\PayCampaignsByCardInfo',
            'CheckPaymentInfo' => 'Biplane\YandexDirect\Api\V4\Contract\CheckPaymentInfo',
            'GetRetargetingGoalsRequest' => 'Biplane\YandexDirect\Api\V4\Contract\GetRetargetingGoalsRequest',
            'RetargetingGoal' => 'Biplane\YandexDirect\Api\V4\Contract\RetargetingGoal',
            'AdImageRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageRequest',
            'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageSelectionCriteria',
            'AdImageRaw' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageRaw',
            'AdImageURL' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageURL',
            'AdImageResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageResponse',
            'AdImage' => 'Biplane\YandexDirect\Api\V4\Contract\AdImage',
            'AdImageUpload' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageUpload',
            'Error' => 'Biplane\YandexDirect\Api\V4\Contract\Error',
            'AdImageActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageActionResult',
            'Warning' => 'Biplane\YandexDirect\Api\V4\Contract\Warning',
            'AdImageLimit' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageLimit',
            'AdImageAssociationRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationRequest',
            'AdImageAssociationSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationSelectionCriteria',
            'AdImageAssociation' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociation',
            'RejectReason' => 'Biplane\YandexDirect\Api\V4\Contract\RejectReason',
            'AdImageAssociationResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationResponse',
            'AdImageAssociationActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AdImageAssociationActionResult',
            'EnableSharedAccountRequest' => 'Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountRequest',
            'EnableSharedAccountResponse' => 'Biplane\YandexDirect\Api\V4\Contract\EnableSharedAccountResponse',
            'AccountManagementRequest' => 'Biplane\YandexDirect\Api\V4\Contract\AccountManagementRequest',
            'AccountSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\Contract\AccountSelectionCriteria',
            'Payment' => 'Biplane\YandexDirect\Api\V4\Contract\Payment',
            'Transfer' => 'Biplane\YandexDirect\Api\V4\Contract\Transfer',
            'Account' => 'Biplane\YandexDirect\Api\V4\Contract\Account',
            'AccountDayBudgetInfo' => 'Biplane\YandexDirect\Api\V4\Contract\AccountDayBudgetInfo',
            'SmsNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\SmsNotificationInfo',
            'EmailNotificationInfo' => 'Biplane\YandexDirect\Api\V4\Contract\EmailNotificationInfo',
            'AccountManagementResponse' => 'Biplane\YandexDirect\Api\V4\Contract\AccountManagementResponse',
            'AccountActionResult' => 'Biplane\YandexDirect\Api\V4\Contract\AccountActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: GetVersion
     */
    public function getVersion(): int
    {
        return $this->__soapCall('GetVersion', []);
    }

    /**
     * Calls operation: DeleteForecastReport
     */
    public function deleteForecastReport(int $params): int
    {
        return $this->__soapCall('DeleteForecastReport', [$params]);
    }

    /**
     * Calls operation: PingAPI
     */
    public function pingAPI(): int
    {
        return $this->__soapCall('PingAPI', []);
    }

    /**
     * Calls operation: GetClientsUnits
     *
     * @param list<string> $params
     *
     * @return list<ClientsUnitInfo>
     */
    public function getClientsUnits(array $params): array
    {
        return $this->__soapCall('GetClientsUnits', [$params]);
    }

    /**
     * Calls operation: GetRegions
     *
     * @return list<RegionInfo>
     */
    public function getRegions(): array
    {
        return $this->__soapCall('GetRegions', []);
    }

    /**
     * Calls operation: CreateNewForecast
     */
    public function createNewForecast(NewForecastInfo $params): int
    {
        return $this->__soapCall('CreateNewForecast', [$params]);
    }

    /**
     * Calls operation: GetForecast
     */
    public function getForecast(int $params): GetForecastInfo
    {
        return $this->__soapCall('GetForecast', [$params]);
    }

    /**
     * Calls operation: GetRubrics
     *
     * @return list<RubricInfo>
     */
    public function getRubrics(): array
    {
        return $this->__soapCall('GetRubrics', []);
    }

    /**
     * Calls operation: GetTimeZones
     *
     * @return list<TimeZoneInfo>
     */
    public function getTimeZones(): array
    {
        return $this->__soapCall('GetTimeZones', []);
    }

    /**
     * Calls operation: GetForecastList
     *
     * @return list<ForecastStatusInfo>
     */
    public function getForecastList(): array
    {
        return $this->__soapCall('GetForecastList', []);
    }

    /**
     * Calls operation: GetAvailableVersions
     *
     * @return list<VersionDesc>
     */
    public function getAvailableVersions(): array
    {
        return $this->__soapCall('GetAvailableVersions', []);
    }

    /**
     * Calls operation: GetKeywordsSuggestion
     *
     * @return list<string>
     */
    public function getKeywordsSuggestion(KeywordsSuggestionInfo $params): array
    {
        return $this->__soapCall('GetKeywordsSuggestion', [$params]);
    }

    /**
     * Calls operation: CreateNewWordstatReport
     */
    public function createNewWordstatReport(NewWordstatReportInfo $params): int
    {
        return $this->__soapCall('CreateNewWordstatReport', [$params]);
    }

    /**
     * Calls operation: GetWordstatReportList
     *
     * @return list<WordstatReportStatusInfo>
     */
    public function getWordstatReportList(): array
    {
        return $this->__soapCall('GetWordstatReportList', []);
    }

    /**
     * Calls operation: GetWordstatReport
     *
     * @return list<WordstatReportInfo>
     */
    public function getWordstatReport(int $params): array
    {
        return $this->__soapCall('GetWordstatReport', [$params]);
    }

    /**
     * Calls operation: DeleteWordstatReport
     */
    public function deleteWordstatReport(int $params): int
    {
        return $this->__soapCall('DeleteWordstatReport', [$params]);
    }

    /**
     * Calls operation: GetStatGoals
     *
     * @return list<StatGoalInfo>
     */
    public function getStatGoals(StatGoalsCampaignIDInfo $params): array
    {
        return $this->__soapCall('GetStatGoals', [$params]);
    }

    /**
     * Calls operation: GetEventsLog
     *
     * @return list<EventsLogItem>
     */
    public function getEventsLog(GetEventsLogRequest $params): array
    {
        return $this->__soapCall('GetEventsLog', [$params]);
    }

    /**
     * Calls operation: GetCampaignsTags
     *
     * @return list<CampaignTagsInfo>
     */
    public function getCampaignsTags(CampaignIDSInfo $params): array
    {
        return $this->__soapCall('GetCampaignsTags', [$params]);
    }

    /**
     * Calls operation: UpdateCampaignsTags
     *
     * @param list<CampaignTagsInfo> $params
     *
     * @return list<CampaignTagsInfo>
     */
    public function updateCampaignsTags(array $params): array
    {
        return $this->__soapCall('UpdateCampaignsTags', [$params]);
    }

    /**
     * Calls operation: GetBannersTags
     *
     * @return list<BannerTagsInfo>
     */
    public function getBannersTags(BannersRequestInfo $params): array
    {
        return $this->__soapCall('GetBannersTags', [$params]);
    }

    /**
     * Calls operation: UpdateBannersTags
     *
     * @param list<BannerTagsInfo> $params
     */
    public function updateBannersTags(array $params): int
    {
        return $this->__soapCall('UpdateBannersTags', [$params]);
    }

    /**
     * Calls operation: TransferMoney
     */
    public function transferMoney(TransferMoneyInfo $params): int
    {
        return $this->__soapCall('TransferMoney', [$params]);
    }

    /**
     * Calls operation: GetCreditLimits
     */
    public function getCreditLimits(): CreditLimitsInfo
    {
        return $this->__soapCall('GetCreditLimits', []);
    }

    /**
     * Calls operation: CreateInvoice
     */
    public function createInvoice(CreateInvoiceInfo $params): string
    {
        return $this->__soapCall('CreateInvoice', [$params]);
    }

    /**
     * Calls operation: PayCampaigns
     */
    public function payCampaigns(PayCampaignsInfo $params): int
    {
        return $this->__soapCall('PayCampaigns', [$params]);
    }

    /**
     * Calls operation: PayCampaignsByCard
     */
    public function payCampaignsByCard(PayCampaignsByCardInfo $params): string
    {
        return $this->__soapCall('PayCampaignsByCard', [$params]);
    }

    /**
     * Calls operation: CheckPayment
     */
    public function checkPayment(CheckPaymentInfo $params): string
    {
        return $this->__soapCall('CheckPayment', [$params]);
    }

    /**
     * Calls operation: GetRetargetingGoals
     *
     * @return list<RetargetingGoal>
     */
    public function getRetargetingGoals(GetRetargetingGoalsRequest $params): array
    {
        return $this->__soapCall('GetRetargetingGoals', [$params]);
    }

    /**
     * Calls operation: AdImage
     */
    public function adImage(AdImageRequest $params): AdImageResponse
    {
        return $this->__soapCall('AdImage', [$params]);
    }

    /**
     * Calls operation: AdImageAssociation
     */
    public function adImageAssociation(AdImageAssociationRequest $params): AdImageAssociationResponse
    {
        return $this->__soapCall('AdImageAssociation', [$params]);
    }

    /**
     * Calls operation: EnableSharedAccount
     */
    public function enableSharedAccount(EnableSharedAccountRequest $params): EnableSharedAccountResponse
    {
        return $this->__soapCall('EnableSharedAccount', [$params]);
    }

    /**
     * Calls operation: AccountManagement
     */
    public function accountManagement(AccountManagementRequest $params): AccountManagementResponse
    {
        return $this->__soapCall('AccountManagement', [$params]);
    }
}
