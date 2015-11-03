<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class Campaigns extends V5SoapClient
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
        parent::__construct(self::ENDPOINT, $dispatcher, $user, array(
            'classmap' => array(
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
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'SmsEventsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum',
                'CampaignStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusEnum',
                'CampaignStatusGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusGetEnum',
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
                'TextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum',
                'TextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum',
                'MobileAppCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum',
                'MobileAppCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum',
                'TextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum',
                'TextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsGetEnum',
                'MobileAppCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsEnum',
                'MobileAppCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsGetEnum',
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
                'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategy',
                'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategy',
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
                'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsParam',
                'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\SharedAccountFundsParam',
                'FundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\FundsParam',
                'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAssistant',
                'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargeting',
                'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignBase',
                'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase',
                'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem',
                'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignAddItem',
                'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem',
                'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignUpdateItem',
                'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignUpdateItem',
                'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem',
                'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem',
                'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignGetItem',
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
                'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddCampaignsRequest $parameters
     * @return Contract\AddCampaignsResponse
     */
    public function add(Contract\AddCampaignsRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * update.
     *
     * @param Contract\UpdateCampaignsRequest $parameters
     * @return Contract\UpdateCampaignsResponse
     */
    public function update(Contract\UpdateCampaignsRequest $parameters)
    {
        return $this->invoke('update', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetCampaignsRequest $parameters
     * @return Contract\GetCampaignsResponse
     */
    public function get(Contract\GetCampaignsRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteCampaignsRequest $parameters
     * @return Contract\DeleteCampaignsResponse
     */
    public function delete(Contract\DeleteCampaignsRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveCampaignsRequest $parameters
     * @return Contract\ArchiveCampaignsResponse
     */
    public function archive(Contract\ArchiveCampaignsRequest $parameters)
    {
        return $this->invoke('archive', array($parameters));
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveCampaignsRequest $parameters
     * @return Contract\UnarchiveCampaignsResponse
     */
    public function unarchive(Contract\UnarchiveCampaignsRequest $parameters)
    {
        return $this->invoke('unarchive', array($parameters));
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendCampaignsRequest $parameters
     * @return Contract\SuspendCampaignsResponse
     */
    public function suspend(Contract\SuspendCampaignsRequest $parameters)
    {
        return $this->invoke('suspend', array($parameters));
    }

    /**
     * resume.
     *
     * @param Contract\ResumeCampaignsRequest $parameters
     * @return Contract\ResumeCampaignsResponse
     */
    public function resume(Contract\ResumeCampaignsRequest $parameters)
    {
        return $this->invoke('resume', array($parameters));
    }


}

