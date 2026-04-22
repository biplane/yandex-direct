<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesResponse;
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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddStrategiesRequest',
            'StrategyAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAddItem',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsArray',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsItem',
            'StrategyMaximumClicksAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAddItem',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Contract\CustomPeriodBudget',
            'StrategyMaximumConversionRateAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAddItem',
            'StrategyAverageCpcAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAddItem',
            'StrategyAverageCpaAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAddItem',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Contract\ExplorationBudget',
            'StrategyMaxProfitAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfitAddItem',
            'StrategyPayForConversionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionAddItem',
            'StrategyAverageCpaPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignAddItem',
            'StrategyPayForConversionPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignAddItem',
            'StrategyPayForConversionPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterAddItem',
            'StrategyAverageCpaPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterAddItem',
            'StrategyAverageCpcPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignAddItem',
            'StrategyAverageCpcPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterAddItem',
            'StrategyAverageCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrAddItem',
            'StrategyPayForConversionCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrAddItem',
            'StrategyAverageCpaMultipleGoalsAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoalsAddItem',
            'StrategyPayForConversionMultipleGoalsAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoalsAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddStrategiesResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesRequest',
            'StrategyUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyUpdateItem',
            'StrategyMaximumClicksUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksUpdateItem',
            'StrategyMaximumClicksBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksBase',
            'StrategyMaximumConversionRateUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateUpdateItem',
            'StrategyMaximumConversionRateBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateBase',
            'StrategyAverageCpcUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcUpdateItem',
            'StrategyAverageCpcBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcBase',
            'StrategyAverageCpaUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaUpdateItem',
            'StrategyAverageCpaBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaBase',
            'StrategyMaxProfitUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfitUpdateItem',
            'StrategyMaxProfitBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfitBase',
            'StrategyPayForConversionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionUpdateItem',
            'StrategyPayForConversionBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionBase',
            'StrategyAverageCpaPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignUpdateItem',
            'StrategyAverageCpaPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignBase',
            'StrategyPayForConversionPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignUpdateItem',
            'StrategyPayForConversionPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignBase',
            'StrategyPayForConversionPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterUpdateItem',
            'StrategyPayForConversionPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterBase',
            'StrategyAverageCpaPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterUpdateItem',
            'StrategyAverageCpaPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterBase',
            'StrategyAverageCpcPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignUpdateItem',
            'StrategyAverageCpcPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignBase',
            'StrategyAverageCpcPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterUpdateItem',
            'StrategyAverageCpcPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterBase',
            'StrategyAverageCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrUpdateItem',
            'StrategyAverageCrrBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrBase',
            'StrategyPayForConversionCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrUpdateItem',
            'StrategyPayForConversionCrrBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrBase',
            'StrategyAverageCpaMultipleGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoalsUpdateItem',
            'StrategyAverageCpaMultipleGoalsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoalsBase',
            'StrategyPayForConversionMultipleGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoalsUpdateItem',
            'StrategyPayForConversionMultipleGoalsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoalsBase',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetStrategiesRequest',
            'StrategiesSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\StrategiesSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetStrategiesResponse',
            'StrategyGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyGetItem',
            'StrategyMaximumClicksGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksGetItem',
            'StrategyMaximumConversionRateGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateGetItem',
            'StrategyAverageCpcGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcGetItem',
            'StrategyAverageCpaGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaGetItem',
            'StrategyMaxProfitGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfitGetItem',
            'StrategyPayForConversionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionGetItem',
            'StrategyAverageCpaPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignGetItem',
            'StrategyPayForConversionPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignGetItem',
            'StrategyPayForConversionPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterGetItem',
            'StrategyAverageCpaPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterGetItem',
            'StrategyAverageCpcPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignGetItem',
            'StrategyAverageCpcPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterGetItem',
            'StrategyAverageCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrGetItem',
            'StrategyPayForConversionCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrGetItem',
            'StrategyAverageCpaMultipleGoalsGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoalsGetItem',
            'StrategyPayForConversionMultipleGoalsGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoalsGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddStrategiesRequest $parameters): AddStrategiesResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateStrategiesRequest $parameters): UpdateStrategiesResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetStrategiesRequest $parameters): GetStrategiesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: archive
     */
    public function archive(ArchiveStrategiesRequest $parameters): ArchiveStrategiesResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     */
    public function unarchive(UnarchiveStrategiesRequest $parameters): UnarchiveStrategiesResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }
}
