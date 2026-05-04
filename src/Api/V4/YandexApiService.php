<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\V4\YandexApiService\AccountManagementRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\AccountManagementResponse;
use Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationResponse;
use Biplane\YandexDirect\Api\V4\YandexApiService\AdImageRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\AdImageResponse;
use Biplane\YandexDirect\Api\V4\YandexApiService\BannersRequestInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\BannerTagsInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\CampaignIDSInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\CampaignTagsInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\CheckPaymentInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\ClientsUnitInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\CreateInvoiceInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\CreditLimitsInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\EnableSharedAccountRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\EnableSharedAccountResponse;
use Biplane\YandexDirect\Api\V4\YandexApiService\EventsLogItem;
use Biplane\YandexDirect\Api\V4\YandexApiService\ForecastStatusInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\GetEventsLogRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\GetForecastInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\GetRetargetingGoalsRequest;
use Biplane\YandexDirect\Api\V4\YandexApiService\KeywordsSuggestionInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\NewForecastInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\NewWordstatReportInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\PayCampaignsByCardInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\PayCampaignsInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\RegionInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\RetargetingGoal;
use Biplane\YandexDirect\Api\V4\YandexApiService\RubricInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\StatGoalInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\StatGoalsCampaignIDInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\TimeZoneInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\TransferMoneyInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\VersionDesc;
use Biplane\YandexDirect\Api\V4\YandexApiService\WordstatReportInfo;
use Biplane\YandexDirect\Api\V4\YandexApiService\WordstatReportStatusInfo;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class YandexApiService extends ApiSoapClientV4
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
            'ClientsUnitInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\ClientsUnitInfo',
            'RegionInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\RegionInfo',
            'NewForecastInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\NewForecastInfo',
            'GetForecastInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\GetForecastInfo',
            'BannerPhraseInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\BannerPhraseInfo',
            'CoverageInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CoverageInfo',
            'PhraseUserParams' => 'Biplane\YandexDirect\Api\V4\YandexApiService\PhraseUserParams',
            'PhraseAuctionBids' => 'Biplane\YandexDirect\Api\V4\YandexApiService\PhraseAuctionBids',
            'ForecastCommonInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\ForecastCommonInfo',
            'RubricInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\RubricInfo',
            'TimeZoneInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\TimeZoneInfo',
            'ForecastStatusInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\ForecastStatusInfo',
            'VersionDesc' => 'Biplane\YandexDirect\Api\V4\YandexApiService\VersionDesc',
            'KeywordsSuggestionInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\KeywordsSuggestionInfo',
            'NewWordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\NewWordstatReportInfo',
            'WordstatReportStatusInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\WordstatReportStatusInfo',
            'WordstatReportInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\WordstatReportInfo',
            'WordstatItem' => 'Biplane\YandexDirect\Api\V4\YandexApiService\WordstatItem',
            'StatGoalsCampaignIDInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\StatGoalsCampaignIDInfo',
            'StatGoalInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\StatGoalInfo',
            'GetEventsLogRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\GetEventsLogRequest',
            'GetEventsLogFilter' => 'Biplane\YandexDirect\Api\V4\YandexApiService\GetEventsLogFilter',
            'EventsLogItem' => 'Biplane\YandexDirect\Api\V4\YandexApiService\EventsLogItem',
            'EventsLogItemAttributes' => 'Biplane\YandexDirect\Api\V4\YandexApiService\EventsLogItemAttributes',
            'CampaignIDSInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CampaignIDSInfo',
            'CampaignTagsInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CampaignTagsInfo',
            'TagInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\TagInfo',
            'BannersRequestInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\BannersRequestInfo',
            'BannerTagsInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\BannerTagsInfo',
            'TransferMoneyInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\TransferMoneyInfo',
            'PayCampElement' => 'Biplane\YandexDirect\Api\V4\YandexApiService\PayCampElement',
            'CreditLimitsInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CreditLimitsInfo',
            'CreditLimitsItem' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CreditLimitsItem',
            'CreateInvoiceInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CreateInvoiceInfo',
            'PayCampaignsInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\PayCampaignsInfo',
            'PayCampaignsByCardInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\PayCampaignsByCardInfo',
            'CheckPaymentInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\CheckPaymentInfo',
            'GetRetargetingGoalsRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\GetRetargetingGoalsRequest',
            'RetargetingGoal' => 'Biplane\YandexDirect\Api\V4\YandexApiService\RetargetingGoal',
            'AdImageRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageRequest',
            'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageSelectionCriteria',
            'AdImageRaw' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageRaw',
            'AdImageURL' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageURL',
            'AdImageResponse' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageResponse',
            'AdImage' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImage',
            'AdImageUpload' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageUpload',
            'Error' => 'Biplane\YandexDirect\Api\V4\YandexApiService\Error',
            'AdImageActionResult' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageActionResult',
            'Warning' => 'Biplane\YandexDirect\Api\V4\YandexApiService\Warning',
            'AdImageLimit' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageLimit',
            'AdImageAssociationRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationRequest',
            'AdImageAssociationSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationSelectionCriteria',
            'AdImageAssociation' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociation',
            'RejectReason' => 'Biplane\YandexDirect\Api\V4\YandexApiService\RejectReason',
            'AdImageAssociationResponse' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationResponse',
            'AdImageAssociationActionResult' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AdImageAssociationActionResult',
            'EnableSharedAccountRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\EnableSharedAccountRequest',
            'EnableSharedAccountResponse' => 'Biplane\YandexDirect\Api\V4\YandexApiService\EnableSharedAccountResponse',
            'AccountManagementRequest' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AccountManagementRequest',
            'AccountSelectionCriteria' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AccountSelectionCriteria',
            'Payment' => 'Biplane\YandexDirect\Api\V4\YandexApiService\Payment',
            'Transfer' => 'Biplane\YandexDirect\Api\V4\YandexApiService\Transfer',
            'Account' => 'Biplane\YandexDirect\Api\V4\YandexApiService\Account',
            'AccountDayBudgetInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AccountDayBudgetInfo',
            'SmsNotificationInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\SmsNotificationInfo',
            'EmailNotificationInfo' => 'Biplane\YandexDirect\Api\V4\YandexApiService\EmailNotificationInfo',
            'AccountManagementResponse' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AccountManagementResponse',
            'AccountActionResult' => 'Biplane\YandexDirect\Api\V4\YandexApiService\AccountActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: GetVersion
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getVersion(): int
    {
        return $this->__soapCall('GetVersion', []);
    }

    /**
     * Calls operation: DeleteForecastReport
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function deleteForecastReport(int $params): int
    {
        return $this->__soapCall('DeleteForecastReport', [$params]);
    }

    /**
     * Calls operation: PingAPI
     *
     * @throws ApiException
     * @throws SoapFault
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
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getClientsUnits(array $params): array
    {
        return $this->__soapCall('GetClientsUnits', [$params]);
    }

    /**
     * Calls operation: GetRegions
     *
     * @return list<RegionInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getRegions(): array
    {
        return $this->__soapCall('GetRegions', []);
    }

    /**
     * Calls operation: CreateNewForecast
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function createNewForecast(NewForecastInfo $params): int
    {
        return $this->__soapCall('CreateNewForecast', [$params]);
    }

    /**
     * Calls operation: GetForecast
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getForecast(int $params): GetForecastInfo
    {
        return $this->__soapCall('GetForecast', [$params]);
    }

    /**
     * Calls operation: GetRubrics
     *
     * @return list<RubricInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getRubrics(): array
    {
        return $this->__soapCall('GetRubrics', []);
    }

    /**
     * Calls operation: GetTimeZones
     *
     * @return list<TimeZoneInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getTimeZones(): array
    {
        return $this->__soapCall('GetTimeZones', []);
    }

    /**
     * Calls operation: GetForecastList
     *
     * @return list<ForecastStatusInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getForecastList(): array
    {
        return $this->__soapCall('GetForecastList', []);
    }

    /**
     * Calls operation: GetAvailableVersions
     *
     * @return list<VersionDesc>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getAvailableVersions(): array
    {
        return $this->__soapCall('GetAvailableVersions', []);
    }

    /**
     * Calls operation: GetKeywordsSuggestion
     *
     * @return list<string>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getKeywordsSuggestion(KeywordsSuggestionInfo $params): array
    {
        return $this->__soapCall('GetKeywordsSuggestion', [$params]);
    }

    /**
     * Calls operation: CreateNewWordstatReport
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function createNewWordstatReport(NewWordstatReportInfo $params): int
    {
        return $this->__soapCall('CreateNewWordstatReport', [$params]);
    }

    /**
     * Calls operation: GetWordstatReportList
     *
     * @return list<WordstatReportStatusInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getWordstatReportList(): array
    {
        return $this->__soapCall('GetWordstatReportList', []);
    }

    /**
     * Calls operation: GetWordstatReport
     *
     * @return list<WordstatReportInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getWordstatReport(int $params): array
    {
        return $this->__soapCall('GetWordstatReport', [$params]);
    }

    /**
     * Calls operation: DeleteWordstatReport
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function deleteWordstatReport(int $params): int
    {
        return $this->__soapCall('DeleteWordstatReport', [$params]);
    }

    /**
     * Calls operation: GetStatGoals
     *
     * @return list<StatGoalInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getStatGoals(StatGoalsCampaignIDInfo $params): array
    {
        return $this->__soapCall('GetStatGoals', [$params]);
    }

    /**
     * Calls operation: GetEventsLog
     *
     * @return list<EventsLogItem>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getEventsLog(GetEventsLogRequest $params): array
    {
        return $this->__soapCall('GetEventsLog', [$params]);
    }

    /**
     * Calls operation: GetCampaignsTags
     *
     * @return list<CampaignTagsInfo>
     *
     * @throws ApiException
     * @throws SoapFault
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
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function updateCampaignsTags(array $params): array
    {
        return $this->__soapCall('UpdateCampaignsTags', [$params]);
    }

    /**
     * Calls operation: GetBannersTags
     *
     * @return list<BannerTagsInfo>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getBannersTags(BannersRequestInfo $params): array
    {
        return $this->__soapCall('GetBannersTags', [$params]);
    }

    /**
     * Calls operation: UpdateBannersTags
     *
     * @param list<BannerTagsInfo> $params
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function updateBannersTags(array $params): int
    {
        return $this->__soapCall('UpdateBannersTags', [$params]);
    }

    /**
     * Calls operation: TransferMoney
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function transferMoney(TransferMoneyInfo $params): int
    {
        return $this->__soapCall('TransferMoney', [$params]);
    }

    /**
     * Calls operation: GetCreditLimits
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getCreditLimits(): CreditLimitsInfo
    {
        return $this->__soapCall('GetCreditLimits', []);
    }

    /**
     * Calls operation: CreateInvoice
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function createInvoice(CreateInvoiceInfo $params): string
    {
        return $this->__soapCall('CreateInvoice', [$params]);
    }

    /**
     * Calls operation: PayCampaigns
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function payCampaigns(PayCampaignsInfo $params): int
    {
        return $this->__soapCall('PayCampaigns', [$params]);
    }

    /**
     * Calls operation: PayCampaignsByCard
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function payCampaignsByCard(PayCampaignsByCardInfo $params): string
    {
        return $this->__soapCall('PayCampaignsByCard', [$params]);
    }

    /**
     * Calls operation: CheckPayment
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function checkPayment(CheckPaymentInfo $params): string
    {
        return $this->__soapCall('CheckPayment', [$params]);
    }

    /**
     * Calls operation: GetRetargetingGoals
     *
     * @return list<RetargetingGoal>
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function getRetargetingGoals(GetRetargetingGoalsRequest $params): array
    {
        return $this->__soapCall('GetRetargetingGoals', [$params]);
    }

    /**
     * Calls operation: AdImage
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function adImage(AdImageRequest $params): AdImageResponse
    {
        return $this->__soapCall('AdImage', [$params]);
    }

    /**
     * Calls operation: AdImageAssociation
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function adImageAssociation(AdImageAssociationRequest $params): AdImageAssociationResponse
    {
        return $this->__soapCall('AdImageAssociation', [$params]);
    }

    /**
     * Calls operation: EnableSharedAccount
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function enableSharedAccount(EnableSharedAccountRequest $params): EnableSharedAccountResponse
    {
        return $this->__soapCall('EnableSharedAccount', [$params]);
    }

    /**
     * Calls operation: AccountManagement
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function accountManagement(AccountManagementRequest $params): AccountManagementResponse
    {
        return $this->__soapCall('AccountManagement', [$params]);
    }
}
