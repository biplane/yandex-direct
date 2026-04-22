<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ModerateAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ModerateAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAdsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAdsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Ads extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/ads?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdsRequest',
            'AdAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItem',
            'TextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAdd',
            'VideoExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\VideoExtensionAddItem',
            'PriceExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriceExtensionAddItem',
            'TextAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAddBase',
            'ResponsiveAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\ResponsiveAdAdd',
            'DynamicTextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdAdd',
            'MobileAppAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdAdd',
            'MobileAppAdFeatureItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureItem',
            'TextImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdAdd',
            'ImageAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdAddBase',
            'MobileAppImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdAdd',
            'TextAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdBuilderAdAdd',
            'AdBuilderAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdAddBase',
            'AdBuilderAdAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdAddItem',
            'MobileAppAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBuilderAdAdd',
            'MobileAppCpcVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCpcVideoAdBuilderAdAdd',
            'CpmBannerAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerAdBuilderAdAdd',
            'CpcVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpcVideoAdBuilderAdAdd',
            'CpmVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmVideoAdBuilderAdAdd',
            'SmartAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdBuilderAdAdd',
            'ShoppingAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\ShoppingAdAdd',
            'FeedFilterConditionItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedFilterConditionItem',
            'ListingAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\ListingAdAdd',
            'AdAddItemBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItemBase',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdsRequest',
            'AdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdUpdateItem',
            'TextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdate',
            'VideoExtensionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\VideoExtensionUpdateItem',
            'PriceExtensionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriceExtensionUpdateItem',
            'TextAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdateBase',
            'AdExtensionSetting' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSetting',
            'AdExtensionSettingItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSettingItem',
            'ResponsiveAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ResponsiveAdUpdate',
            'DynamicTextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdUpdate',
            'MobileAppAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdUpdate',
            'MobileAppAdBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBase',
            'TextImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdUpdate',
            'ImageAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdUpdateBase',
            'MobileAppImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdUpdate',
            'MobileAppCpcVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCpcVideoAdBuilderAdUpdate',
            'AdBuilderAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdUpdateBase',
            'AdBuilderAdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdUpdateItem',
            'TextAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdBuilderAdUpdate',
            'MobileAppAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBuilderAdUpdate',
            'CpcVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\CpcVideoAdBuilderAdUpdate',
            'CpmBannerAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerAdBuilderAdUpdate',
            'CpmVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\CpmVideoAdBuilderAdUpdate',
            'SmartAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdBuilderAdUpdate',
            'ShoppingAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ShoppingAdUpdate',
            'ArrayOfFeedFilterCondition' => 'Biplane\YandexDirect\Api\V5\Contract\ArrayOfFeedFilterCondition',
            'ListingAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ListingAdUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdsRequest',
            'AdsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdsResponse',
            'AdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGetItem',
            'ArrayOfAdCategoryEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ArrayOfAdCategoryEnum',
            'TextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGet',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
            'VideoExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VideoExtensionGetItem',
            'PriceExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriceExtensionGetItem',
            'TextAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGetBase',
            'AdExtensionAdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionAdGetItem',
            'DynamicTextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGet',
            'MobileAppAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGet',
            'MobileAppAdFeatureGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureGetItem',
            'TextImageAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdGet',
            'ImageAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdGetBase',
            'MobileAppImageAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdGet',
            'TextAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdBuilderAdGet',
            'AdBuilderAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdGetBase',
            'AdBuilderAdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdBuilderAdGetItem',
            'MobileAppAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBuilderAdGet',
            'MobileAppCpcVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCpcVideoAdBuilderAdGet',
            'CpmBannerAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerAdBuilderAdGet',
            'TrackingPixelGetArray' => 'Biplane\YandexDirect\Api\V5\Contract\TrackingPixelGetArray',
            'TrackingPixelGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TrackingPixelGetItem',
            'CpcVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpcVideoAdBuilderAdGet',
            'CpmVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpmVideoAdBuilderAdGet',
            'SmartAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdBuilderAdGet',
            'ShoppingAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\ShoppingAdGet',
            'ListingAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\ListingAdGet',
            'ResponsiveAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\ResponsiveAdGet',
            'TextGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextGetItem',
            'TitleGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TitleGetItem',
            'ArrayOfAdImageGet' => 'Biplane\YandexDirect\Api\V5\Contract\ArrayOfAdImageGet',
            'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageGetItemShort',
            'ArrayOfVideoExtensionGet' => 'Biplane\YandexDirect\Api\V5\Contract\ArrayOfVideoExtensionGet',
            'VideoExtensionWithStatusClarificationGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VideoExtensionWithStatusClarificationGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdsResponse',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsRequest',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdsResponse',
            'ModerateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdsRequest',
            'ModerateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAdsRequest $parameters): AddAdsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateAdsRequest $parameters): UpdateAdsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAdsRequest $parameters): GetAdsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteAdsRequest $parameters): DeleteAdsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: archive
     */
    public function archive(ArchiveAdsRequest $parameters): ArchiveAdsResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     */
    public function unarchive(UnarchiveAdsRequest $parameters): UnarchiveAdsResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendAdsRequest $parameters): SuspendAdsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeAdsRequest $parameters): ResumeAdsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: moderate
     */
    public function moderate(ModerateAdsRequest $parameters): ModerateAdsResponse
    {
        return $this->__soapCall('moderate', [$parameters]);
    }
}
