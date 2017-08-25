<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Campaigns extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/campaigns?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct($user->resolveWsdl(self::ENDPOINT), $dispatcher, $user, [
            'classmap' => [
                'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
                'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
                'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
                'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
                'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
                'SmsEventsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum',
                'CampaignStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusSelectionEnum',
                'CampaignStateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateEnum',
                'CampaignStateGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateGetEnum',
                'CampaignStatusPaymentEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum',
                'RelevantKeywordsModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsModeEnum',
                'DailyBudgetModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudgetModeEnum',
                'CampaignFundsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsEnum',
                'CampaignTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeEnum',
                'CampaignTypeGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeGetEnum',
                'CampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum',
                'TextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum',
                'MobileAppCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignFieldEnum',
                'DynamicTextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignFieldEnum',
                'TextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum',
                'TextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum',
                'MobileAppCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum',
                'MobileAppCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum',
                'DynamicTextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyTypeEnum',
                'DynamicTextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyTypeEnum',
                'TextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum',
                'TextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsGetEnum',
                'MobileAppCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsEnum',
                'MobileAppCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsGetEnum',
                'DynamicTextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsEnum',
                'DynamicTextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsGetEnum',
                'StrategyWeeklyBudgetBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetBase',
                'StrategyMaximumClicks' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicks',
                'StrategyMaximumConversionRate' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRate',
                'StrategyMaximumAppInstalls' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstalls',
                'StrategyAverageCpc' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpc',
                'StrategyAverageCpa' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpa',
                'StrategyAverageCpi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpi',
                'StrategyAverageRoi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoi',
                'StrategyWeeklyClickPackage' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackage',
                'StrategyNetworkDefault' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefault',
                'TextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyBase',
                'TextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategy',
                'TextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategy',
                'MobileAppCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyBase',
                'MobileAppCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategy',
                'MobileAppCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategy',
                'DynamicTextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyBase',
                'DynamicTextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategy',
                'DynamicTextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategy',
                'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategy',
                'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategy',
                'DynamicTextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategy',
                'StrategyWeeklyBudgetAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetAddBase',
                'StrategyMaximumClicksAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAdd',
                'StrategyMaximumConversionRateAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAdd',
                'StrategyMaximumAppInstallsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstallsAdd',
                'StrategyAverageCpcAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAdd',
                'StrategyAverageCpaAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAdd',
                'StrategyAverageCpiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpiAdd',
                'StrategyAverageRoiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoiAdd',
                'StrategyWeeklyClickPackageAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackageAdd',
                'StrategyNetworkDefaultAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefaultAdd',
                'TextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAddBase',
                'TextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyAdd',
                'TextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyAdd',
                'MobileAppCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAddBase',
                'MobileAppCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyAdd',
                'MobileAppCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyAdd',
                'DynamicTextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAddBase',
                'DynamicTextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyAdd',
                'DynamicTextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyAdd',
                'TextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAdd',
                'MobileAppCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAdd',
                'DynamicTextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAdd',
                'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\Notification',
                'SmsSettings' => 'Biplane\YandexDirect\Api\V5\Contract\SmsSettings',
                'EmailSettings' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSettings',
                'TimeTargetingOnPublicHolidays' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingOnPublicHolidays',
                'RelevantKeywordsSetting' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSetting',
                'DailyBudget' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudget',
                'TextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSetting',
                'TextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingGet',
                'MobileAppCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSetting',
                'MobileAppCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingGet',
                'DynamicTextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSetting',
                'DynamicTextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingGet',
                'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsParam',
                'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\SharedAccountFundsParam',
                'FundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\FundsParam',
                'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAssistant',
                'TimeTargetingBase' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingBase',
                'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargeting',
                'TimeTargetingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingAdd',
                'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignBase',
                'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase',
                'DynamicTextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignBase',
                'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem',
                'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignAddItem',
                'DynamicTextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem',
                'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem',
                'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignUpdateItem',
                'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignUpdateItem',
                'DynamicTextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignUpdateItem',
                'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem',
                'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem',
                'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignGetItem',
                'DynamicTextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignGetItem',
                'CampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem',
                'CampaignsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsResponse',
                'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsRequest',
                'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsResponse',
                'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsRequest',
                'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsResponse',
                'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsRequest',
                'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsResponse',
                'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsRequest',
                'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddCampaignsRequest $parameters
     * @return Contract\AddCampaignsResponse
     */
    public function add(Contract\AddCampaignsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateCampaignsRequest $parameters
     * @return Contract\UpdateCampaignsResponse
     */
    public function update(Contract\UpdateCampaignsRequest $parameters)
    {
        return $this->invoke('update', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetCampaignsRequest $parameters
     * @return Contract\GetCampaignsResponse
     */
    public function get(Contract\GetCampaignsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteCampaignsRequest $parameters
     * @return Contract\DeleteCampaignsResponse
     */
    public function delete(Contract\DeleteCampaignsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveCampaignsRequest $parameters
     * @return Contract\ArchiveCampaignsResponse
     */
    public function archive(Contract\ArchiveCampaignsRequest $parameters)
    {
        return $this->invoke('archive', [$parameters]);
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveCampaignsRequest $parameters
     * @return Contract\UnarchiveCampaignsResponse
     */
    public function unarchive(Contract\UnarchiveCampaignsRequest $parameters)
    {
        return $this->invoke('unarchive', [$parameters]);
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendCampaignsRequest $parameters
     * @return Contract\SuspendCampaignsResponse
     */
    public function suspend(Contract\SuspendCampaignsRequest $parameters)
    {
        return $this->invoke('suspend', [$parameters]);
    }

    /**
     * resume.
     *
     * @param Contract\ResumeCampaignsRequest $parameters
     * @return Contract\ResumeCampaignsResponse
     */
    public function resume(Contract\ResumeCampaignsRequest $parameters)
    {
        return $this->invoke('resume', [$parameters]);
    }


}

