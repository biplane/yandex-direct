<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AdGroups extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/adgroups?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsRequest',
            'AdGroupsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdGroupsResponse',
            'AdGroupGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupGetItem',
            'MobileAppAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupGet',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
            'DynamicTextAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroupGet',
            'DynamicAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicAdGroupGet',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoryArray',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategory',
            'AutotargetingSettings' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingSettings',
            'AutotargetingCategories' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategories',
            'AutotargetingBrandOptions' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptions',
            'DynamicTextFeedAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextFeedAdGroupGet',
            'DynamicSourceGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicSourceGet',
            'SmartAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdGroupGet',
            'TextAdGroupFeedParamsGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGroupFeedParamsGet',
            'UnifiedAdGroupGet' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedAdGroupGet',
            'AdGroupBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsRequest',
            'AdGroupAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupAddItem',
            'MobileAppAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupAdd',
            'DynamicTextAdGroup' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroup',
            'DynamicAdGroup' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicAdGroup',
            'DynamicTextFeedAdGroup' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextFeedAdGroup',
            'CpmBannerKeywordsAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerKeywordsAdGroupAdd',
            'CpmBannerUserProfileAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerUserProfileAdGroupAdd',
            'CpmVideoAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmVideoAdGroupAdd',
            'SmartAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdGroupAdd',
            'UnifiedAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedAdGroupAdd',
            'TextAdGroupFeedParamsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGroupFeedParamsAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdGroupsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsRequest',
            'AdGroupUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupUpdateItem',
            'MobileAppAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupUpdate',
            'DynamicTextFeedAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextFeedAdGroupUpdate',
            'SmartAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdGroupUpdate',
            'TextAdGroupFeedParamsUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGroupFeedParamsUpdate',
            'UnifiedAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedAdGroupUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdGroupsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdGroupsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAdGroupsRequest $parameters): GetAdGroupsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAdGroupsRequest $parameters): AddAdGroupsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateAdGroupsRequest $parameters): UpdateAdGroupsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteAdGroupsRequest $parameters): DeleteAdGroupsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
