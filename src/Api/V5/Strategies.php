<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Strategies\AddRequest;
use Biplane\YandexDirect\Api\V5\Strategies\AddResponse;
use Biplane\YandexDirect\Api\V5\Strategies\ArchiveRequest;
use Biplane\YandexDirect\Api\V5\Strategies\ArchiveResponse;
use Biplane\YandexDirect\Api\V5\Strategies\GetRequest;
use Biplane\YandexDirect\Api\V5\Strategies\GetResponse;
use Biplane\YandexDirect\Api\V5\Strategies\UnarchiveRequest;
use Biplane\YandexDirect\Api\V5\Strategies\UnarchiveResponse;
use Biplane\YandexDirect\Api\V5\Strategies\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Strategies\UpdateResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Strategies extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/strategies?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Strategies\AddRequest',
            'StrategyAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAddItem',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Strategies\PriorityGoalsArray',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Strategies\PriorityGoalsItem',
            'StrategyMaximumClicksAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksAddItem',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Strategies\CustomPeriodBudget',
            'StrategyMaximumConversionRateAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateAddItem',
            'StrategyAverageCpcAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcAddItem',
            'StrategyAverageCpaAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaAddItem',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Strategies\ExplorationBudget',
            'StrategyMaxProfitAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitAddItem',
            'StrategyPayForConversionAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionAddItem',
            'StrategyAverageCpaPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignAddItem',
            'StrategyPayForConversionPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignAddItem',
            'StrategyPayForConversionPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterAddItem',
            'StrategyAverageCpaPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterAddItem',
            'StrategyAverageCpcPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignAddItem',
            'StrategyAverageCpcPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterAddItem',
            'StrategyAverageCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrAddItem',
            'StrategyPayForConversionCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrAddItem',
            'StrategyAverageCpaMultipleGoalsAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsAddItem',
            'StrategyPayForConversionMultipleGoalsAddItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Strategies\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Strategies\UpdateRequest',
            'StrategyUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyUpdateItem',
            'StrategyMaximumClicksUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksUpdateItem',
            'StrategyMaximumClicksBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksBase',
            'StrategyMaximumConversionRateUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateUpdateItem',
            'StrategyMaximumConversionRateBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateBase',
            'StrategyAverageCpcUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcUpdateItem',
            'StrategyAverageCpcBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcBase',
            'StrategyAverageCpaUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaUpdateItem',
            'StrategyAverageCpaBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaBase',
            'StrategyMaxProfitUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitUpdateItem',
            'StrategyMaxProfitBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitBase',
            'StrategyPayForConversionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionUpdateItem',
            'StrategyPayForConversionBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionBase',
            'StrategyAverageCpaPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignUpdateItem',
            'StrategyAverageCpaPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignBase',
            'StrategyPayForConversionPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignUpdateItem',
            'StrategyPayForConversionPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignBase',
            'StrategyPayForConversionPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterUpdateItem',
            'StrategyPayForConversionPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterBase',
            'StrategyAverageCpaPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterUpdateItem',
            'StrategyAverageCpaPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterBase',
            'StrategyAverageCpcPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignUpdateItem',
            'StrategyAverageCpcPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignBase',
            'StrategyAverageCpcPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterUpdateItem',
            'StrategyAverageCpcPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterBase',
            'StrategyAverageCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrUpdateItem',
            'StrategyAverageCrrBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrBase',
            'StrategyPayForConversionCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrUpdateItem',
            'StrategyPayForConversionCrrBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrBase',
            'StrategyAverageCpaMultipleGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsUpdateItem',
            'StrategyAverageCpaMultipleGoalsBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsBase',
            'StrategyPayForConversionMultipleGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsUpdateItem',
            'StrategyPayForConversionMultipleGoalsBase' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsBase',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Strategies\UpdateResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Strategies\GetRequest',
            'StrategiesSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategiesSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Strategies\GetResponse',
            'StrategyGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyGetItem',
            'StrategyMaximumClicksGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumClicksGetItem',
            'StrategyMaximumConversionRateGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaximumConversionRateGetItem',
            'StrategyAverageCpcGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcGetItem',
            'StrategyAverageCpaGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaGetItem',
            'StrategyMaxProfitGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyMaxProfitGetItem',
            'StrategyPayForConversionGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionGetItem',
            'StrategyAverageCpaPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerCampaignGetItem',
            'StrategyPayForConversionPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerCampaignGetItem',
            'StrategyPayForConversionPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionPerFilterGetItem',
            'StrategyAverageCpaPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaPerFilterGetItem',
            'StrategyAverageCpcPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerCampaignGetItem',
            'StrategyAverageCpcPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpcPerFilterGetItem',
            'StrategyAverageCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCrrGetItem',
            'StrategyPayForConversionCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionCrrGetItem',
            'StrategyAverageCpaMultipleGoalsGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyAverageCpaMultipleGoalsGetItem',
            'StrategyPayForConversionMultipleGoalsGetItem' => 'Biplane\YandexDirect\Api\V5\Strategies\StrategyPayForConversionMultipleGoalsGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Strategies\ArchiveRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Strategies\ArchiveResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Strategies\UnarchiveRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Strategies\UnarchiveResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: archive
     */
    public function archive(ArchiveRequest $parameters): ArchiveResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     */
    public function unarchive(UnarchiveRequest $parameters): UnarchiveResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }
}
