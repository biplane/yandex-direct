<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Ads\AddRequest;
use Biplane\YandexDirect\Api\V5\Ads\AddResponse;
use Biplane\YandexDirect\Api\V5\Ads\ArchiveRequest;
use Biplane\YandexDirect\Api\V5\Ads\ArchiveResponse;
use Biplane\YandexDirect\Api\V5\Ads\DeleteRequest;
use Biplane\YandexDirect\Api\V5\Ads\DeleteResponse;
use Biplane\YandexDirect\Api\V5\Ads\GetRequest;
use Biplane\YandexDirect\Api\V5\Ads\GetResponse;
use Biplane\YandexDirect\Api\V5\Ads\ModerateRequest;
use Biplane\YandexDirect\Api\V5\Ads\ModerateResponse;
use Biplane\YandexDirect\Api\V5\Ads\ResumeRequest;
use Biplane\YandexDirect\Api\V5\Ads\ResumeResponse;
use Biplane\YandexDirect\Api\V5\Ads\SuspendRequest;
use Biplane\YandexDirect\Api\V5\Ads\SuspendResponse;
use Biplane\YandexDirect\Api\V5\Ads\UnarchiveRequest;
use Biplane\YandexDirect\Api\V5\Ads\UnarchiveResponse;
use Biplane\YandexDirect\Api\V5\Ads\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Ads\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Ads\AddRequest',
            'AdAddItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdAddItem',
            'TextAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdAdd',
            'VideoExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Ads\VideoExtensionAddItem',
            'PriceExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Ads\PriceExtensionAddItem',
            'TextAdAddBase' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdAddBase',
            'ResponsiveAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\ResponsiveAdAdd',
            'DynamicTextAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\DynamicTextAdAdd',
            'MobileAppAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdAdd',
            'MobileAppAdFeatureItem' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdFeatureItem',
            'TextImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\TextImageAdAdd',
            'ImageAdAddBase' => 'Biplane\YandexDirect\Api\V5\Ads\ImageAdAddBase',
            'MobileAppImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppImageAdAdd',
            'TextAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdBuilderAdAdd',
            'AdBuilderAdAddBase' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdAddBase',
            'AdBuilderAdAddItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdAddItem',
            'MobileAppAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdBuilderAdAdd',
            'MobileAppCpcVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppCpcVideoAdBuilderAdAdd',
            'CpmBannerAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\CpmBannerAdBuilderAdAdd',
            'CpcVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\CpcVideoAdBuilderAdAdd',
            'CpmVideoAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\CpmVideoAdBuilderAdAdd',
            'SmartAdBuilderAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\SmartAdBuilderAdAdd',
            'ShoppingAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\ShoppingAdAdd',
            'FeedFilterConditionItem' => 'Biplane\YandexDirect\Api\V5\Ads\FeedFilterConditionItem',
            'ListingAdAdd' => 'Biplane\YandexDirect\Api\V5\Ads\ListingAdAdd',
            'AdAddItemBase' => 'Biplane\YandexDirect\Api\V5\Ads\AdAddItemBase',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Ads\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Ads\UpdateRequest',
            'AdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdUpdateItem',
            'TextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdUpdate',
            'VideoExtensionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Ads\VideoExtensionUpdateItem',
            'PriceExtensionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Ads\PriceExtensionUpdateItem',
            'TextAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdUpdateBase',
            'AdExtensionSetting' => 'Biplane\YandexDirect\Api\V5\AdExtensionTypes\AdExtensionSetting',
            'AdExtensionSettingItem' => 'Biplane\YandexDirect\Api\V5\AdExtensionTypes\AdExtensionSettingItem',
            'ResponsiveAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\ResponsiveAdUpdate',
            'DynamicTextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\DynamicTextAdUpdate',
            'MobileAppAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdUpdate',
            'MobileAppAdBase' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdBase',
            'TextImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\TextImageAdUpdate',
            'ImageAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Ads\ImageAdUpdateBase',
            'MobileAppImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppImageAdUpdate',
            'MobileAppCpcVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppCpcVideoAdBuilderAdUpdate',
            'AdBuilderAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdUpdateBase',
            'AdBuilderAdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdUpdateItem',
            'TextAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdBuilderAdUpdate',
            'MobileAppAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdBuilderAdUpdate',
            'CpcVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\CpcVideoAdBuilderAdUpdate',
            'CpmBannerAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\CpmBannerAdBuilderAdUpdate',
            'CpmVideoAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\CpmVideoAdBuilderAdUpdate',
            'SmartAdBuilderAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\SmartAdBuilderAdUpdate',
            'ShoppingAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\ShoppingAdUpdate',
            'ArrayOfFeedFilterCondition' => 'Biplane\YandexDirect\Api\V5\Ads\ArrayOfFeedFilterCondition',
            'ListingAdUpdate' => 'Biplane\YandexDirect\Api\V5\Ads\ListingAdUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Ads\UpdateResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Ads\GetRequest',
            'AdsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Ads\AdsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Ads\GetResponse',
            'AdGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdGetItem',
            'ArrayOfAdCategoryEnum' => 'Biplane\YandexDirect\Api\V5\Ads\ArrayOfAdCategoryEnum',
            'TextAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdGet',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\General\ExtensionModeration',
            'VideoExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\VideoExtensionGetItem',
            'PriceExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\PriceExtensionGetItem',
            'TextAdGetBase' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdGetBase',
            'AdExtensionAdGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdExtensionAdGetItem',
            'DynamicTextAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\DynamicTextAdGet',
            'MobileAppAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdGet',
            'MobileAppAdFeatureGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdFeatureGetItem',
            'TextImageAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\TextImageAdGet',
            'ImageAdGetBase' => 'Biplane\YandexDirect\Api\V5\Ads\ImageAdGetBase',
            'MobileAppImageAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppImageAdGet',
            'TextAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\TextAdBuilderAdGet',
            'AdBuilderAdGetBase' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdGetBase',
            'AdBuilderAdGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdBuilderAdGetItem',
            'MobileAppAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppAdBuilderAdGet',
            'MobileAppCpcVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\MobileAppCpcVideoAdBuilderAdGet',
            'CpmBannerAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\CpmBannerAdBuilderAdGet',
            'TrackingPixelGetArray' => 'Biplane\YandexDirect\Api\V5\Ads\TrackingPixelGetArray',
            'TrackingPixelGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\TrackingPixelGetItem',
            'CpcVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\CpcVideoAdBuilderAdGet',
            'CpmVideoAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\CpmVideoAdBuilderAdGet',
            'SmartAdBuilderAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\SmartAdBuilderAdGet',
            'ShoppingAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\ShoppingAdGet',
            'ListingAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\ListingAdGet',
            'ResponsiveAdGet' => 'Biplane\YandexDirect\Api\V5\Ads\ResponsiveAdGet',
            'TextGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\TextGetItem',
            'TitleGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\TitleGetItem',
            'ArrayOfAdImageGet' => 'Biplane\YandexDirect\Api\V5\Ads\ArrayOfAdImageGet',
            'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\AdImageGetItem',
            'ArrayOfVideoExtensionGet' => 'Biplane\YandexDirect\Api\V5\Ads\ArrayOfVideoExtensionGet',
            'VideoExtensionWithStatusClarificationGetItem' => 'Biplane\YandexDirect\Api\V5\Ads\VideoExtensionWithStatusClarificationGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Ads\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Ads\DeleteResponse',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Ads\ArchiveRequest',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Ads\ArchiveResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Ads\UnarchiveRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Ads\UnarchiveResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Ads\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Ads\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Ads\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Ads\ResumeResponse',
            'ModerateRequest' => 'Biplane\YandexDirect\Api\V5\Ads\ModerateRequest',
            'ModerateResponse' => 'Biplane\YandexDirect\Api\V5\Ads\ModerateResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: archive
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function archive(ArchiveRequest $parameters): ArchiveResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function unarchive(UnarchiveRequest $parameters): UnarchiveResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }

    /**
     * Calls operation: suspend
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function suspend(SuspendRequest $parameters): SuspendResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function resume(ResumeRequest $parameters): ResumeResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: moderate
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function moderate(ModerateRequest $parameters): ModerateResponse
    {
        return $this->__soapCall('moderate', [$parameters]);
    }
}
