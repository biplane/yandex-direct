<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\AdGroups\AddRequest;
use Biplane\YandexDirect\Api\V5\AdGroups\AddResponse;
use Biplane\YandexDirect\Api\V5\AdGroups\DeleteRequest;
use Biplane\YandexDirect\Api\V5\AdGroups\DeleteResponse;
use Biplane\YandexDirect\Api\V5\AdGroups\GetRequest;
use Biplane\YandexDirect\Api\V5\AdGroups\GetResponse;
use Biplane\YandexDirect\Api\V5\AdGroups\UpdateRequest;
use Biplane\YandexDirect\Api\V5\AdGroups\UpdateResponse;
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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\AdGroups\GetRequest',
            'AdGroupsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\AdGroups\AdGroupsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\AdGroups\GetResponse',
            'AdGroupGetItem' => 'Biplane\YandexDirect\Api\V5\AdGroups\AdGroupGetItem',
            'MobileAppAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\MobileAppAdGroupGet',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\General\ExtensionModeration',
            'DynamicTextAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicTextAdGroupGet',
            'DynamicAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicAdGroupGet',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategoryArray',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategory',
            'AutotargetingSettings' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingSettings',
            'AutotargetingCategories' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategories',
            'AutotargetingBrandOptions' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingBrandOptions',
            'DynamicTextFeedAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicTextFeedAdGroupGet',
            'DynamicSourceGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicSourceGet',
            'SmartAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\SmartAdGroupGet',
            'TextAdGroupFeedParamsGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\TextAdGroupFeedParamsGet',
            'UnifiedAdGroupGet' => 'Biplane\YandexDirect\Api\V5\AdGroups\UnifiedAdGroupGet',
            'AdGroupBase' => 'Biplane\YandexDirect\Api\V5\AdGroups\AdGroupBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\AdGroups\AddRequest',
            'AdGroupAddItem' => 'Biplane\YandexDirect\Api\V5\AdGroups\AdGroupAddItem',
            'MobileAppAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\MobileAppAdGroupAdd',
            'DynamicTextAdGroup' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicTextAdGroup',
            'DynamicAdGroup' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicAdGroup',
            'DynamicTextFeedAdGroup' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicTextFeedAdGroup',
            'CpmBannerKeywordsAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\CpmBannerKeywordsAdGroupAdd',
            'CpmBannerUserProfileAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\CpmBannerUserProfileAdGroupAdd',
            'CpmVideoAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\CpmVideoAdGroupAdd',
            'SmartAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\SmartAdGroupAdd',
            'UnifiedAdGroupAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\UnifiedAdGroupAdd',
            'TextAdGroupFeedParamsAdd' => 'Biplane\YandexDirect\Api\V5\AdGroups\TextAdGroupFeedParamsAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\AdGroups\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\AdGroups\UpdateRequest',
            'AdGroupUpdateItem' => 'Biplane\YandexDirect\Api\V5\AdGroups\AdGroupUpdateItem',
            'MobileAppAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\AdGroups\MobileAppAdGroupUpdate',
            'DynamicTextFeedAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\AdGroups\DynamicTextFeedAdGroupUpdate',
            'SmartAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\AdGroups\SmartAdGroupUpdate',
            'TextAdGroupFeedParamsUpdate' => 'Biplane\YandexDirect\Api\V5\AdGroups\TextAdGroupFeedParamsUpdate',
            'UnifiedAdGroupUpdate' => 'Biplane\YandexDirect\Api\V5\AdGroups\UnifiedAdGroupUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\AdGroups\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\AdGroups\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\AdGroups\DeleteResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
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
     * Calls operation: delete
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
