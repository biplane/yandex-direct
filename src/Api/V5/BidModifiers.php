<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class BidModifiers extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/bidmodifiers?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersRequest',
            'BidModifierAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierAddItem',
            'MobileAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentAdd',
            'DesktopAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentAdd',
            'SmartTvAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartTvAdjustmentAdd',
            'TabletAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentAdd',
            'DesktopOnlyAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentAdd',
            'DemographicsAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentAdd',
            'RetargetingAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentAdd',
            'RegionalAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentAdd',
            'VideoAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentAdd',
            'SmartAdAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentAdd',
            'SerpLayoutAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentAdd',
            'IncomeGradeAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentAdd',
            'AdGroupAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupAdjustmentAdd',
            'BidModifierAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierAddBase',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersResponse',
            'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersRequest',
            'BidModifierSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersRequest',
            'BidModifiersSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifiersSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersResponse',
            'BidModifierGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierGetItem',
            'MobileAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentGet',
            'DesktopAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentGet',
            'SmartTvAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartTvAdjustmentGet',
            'TabletAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentGet',
            'DesktopOnlyAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentGet',
            'DemographicsAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentGet',
            'RetargetingAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentGet',
            'RegionalAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentGet',
            'VideoAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentGet',
            'SmartAdAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentGet',
            'SerpLayoutAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentGet',
            'IncomeGradeAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentGet',
            'AdGroupAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupAdjustmentGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersResponse',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddBidModifiersRequest $parameters): AddBidModifiersResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: set
     */
    public function set(SetBidModifiersRequest $parameters): SetBidModifiersResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetBidModifiersRequest $parameters): GetBidModifiersResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteBidModifiersRequest $parameters): DeleteBidModifiersResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
