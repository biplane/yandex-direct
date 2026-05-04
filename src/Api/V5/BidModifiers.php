<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\BidModifiers\AddRequest;
use Biplane\YandexDirect\Api\V5\BidModifiers\AddResponse;
use Biplane\YandexDirect\Api\V5\BidModifiers\DeleteRequest;
use Biplane\YandexDirect\Api\V5\BidModifiers\DeleteResponse;
use Biplane\YandexDirect\Api\V5\BidModifiers\GetRequest;
use Biplane\YandexDirect\Api\V5\BidModifiers\GetResponse;
use Biplane\YandexDirect\Api\V5\BidModifiers\SetRequest;
use Biplane\YandexDirect\Api\V5\BidModifiers\SetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class BidModifiers extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/bidmodifiers?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\BidModifiers\AddRequest',
            'BidModifierAddItem' => 'Biplane\YandexDirect\Api\V5\BidModifiers\BidModifierAddItem',
            'MobileAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\MobileAdjustmentAdd',
            'DesktopAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DesktopAdjustmentAdd',
            'SmartTvAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SmartTvAdjustmentAdd',
            'TabletAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\TabletAdjustmentAdd',
            'DesktopOnlyAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DesktopOnlyAdjustmentAdd',
            'DemographicsAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DemographicsAdjustmentAdd',
            'RetargetingAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\RetargetingAdjustmentAdd',
            'RegionalAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\RegionalAdjustmentAdd',
            'VideoAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\VideoAdjustmentAdd',
            'SmartAdAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SmartAdAdjustmentAdd',
            'SerpLayoutAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SerpLayoutAdjustmentAdd',
            'IncomeGradeAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\IncomeGradeAdjustmentAdd',
            'AdGroupAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\BidModifiers\AdGroupAdjustmentAdd',
            'BidModifierAddBase' => 'Biplane\YandexDirect\Api\V5\BidModifiers\BidModifierAddBase',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\BidModifiers\AddResponse',
            'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\General\MultiIdsActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SetRequest',
            'BidModifierSetItem' => 'Biplane\YandexDirect\Api\V5\BidModifiers\BidModifierSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SetResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\BidModifiers\GetRequest',
            'BidModifiersSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\BidModifiers\BidModifiersSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\BidModifiers\GetResponse',
            'BidModifierGetItem' => 'Biplane\YandexDirect\Api\V5\BidModifiers\BidModifierGetItem',
            'MobileAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\MobileAdjustmentGet',
            'DesktopAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DesktopAdjustmentGet',
            'SmartTvAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SmartTvAdjustmentGet',
            'TabletAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\TabletAdjustmentGet',
            'DesktopOnlyAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DesktopOnlyAdjustmentGet',
            'DemographicsAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DemographicsAdjustmentGet',
            'RetargetingAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\RetargetingAdjustmentGet',
            'RegionalAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\RegionalAdjustmentGet',
            'VideoAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\VideoAdjustmentGet',
            'SmartAdAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SmartAdAdjustmentGet',
            'SerpLayoutAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\SerpLayoutAdjustmentGet',
            'IncomeGradeAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\IncomeGradeAdjustmentGet',
            'AdGroupAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\BidModifiers\AdGroupAdjustmentGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\BidModifiers\DeleteResponse',
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
     * Calls operation: set
     */
    public function set(SetRequest $parameters): SetResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
