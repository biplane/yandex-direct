<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class VCards extends ApiSoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/vcards?wsdl';

    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
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
            'VCardFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VCardFieldEnum',
            'Phone' => 'Biplane\YandexDirect\Api\V5\Contract\Phone',
            'InstantMessenger' => 'Biplane\YandexDirect\Api\V5\Contract\InstantMessenger',
            'MapPoint' => 'Biplane\YandexDirect\Api\V5\Contract\MapPoint',
            'VCardAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardAddItem',
            'VCardGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardGetItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * add.
     *
     * @param Contract\AddVCardsRequest $parameters
     * @return Contract\AddVCardsResponse
     */
    public function add(Contract\AddVCardsRequest $parameters)
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetVCardsRequest $parameters
     * @return Contract\GetVCardsResponse
     */
    public function get(Contract\GetVCardsRequest $parameters)
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteVCardsRequest $parameters
     * @return Contract\DeleteVCardsResponse
     */
    public function delete(Contract\DeleteVCardsRequest $parameters)
    {
        return $this->__soapCall('delete', [$parameters]);
    }


}

