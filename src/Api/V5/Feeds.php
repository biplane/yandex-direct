<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Feeds extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/feeds?wsdl';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
            'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
            'VideoTargetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum',
            'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
            'ConditionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionTypeEnum',
            'AdTargetStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetStateSelectionEnum',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
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
            'SerpLayoutEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'IncomeGradeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum',
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
            'AutotargetingCategoriesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesEnum',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategory',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoryArray',
            'BusinessTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BusinessTypeEnum',
            'SourceTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SourceTypeEnum',
            'FeedStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\FeedStatusEnum',
            'FeedFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\FeedFieldEnum',
            'FileFeedFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedFieldEnum',
            'UrlFeedFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedFieldEnum',
            'UrlFeedBase' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedBase',
            'UrlFeedAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedAdd',
            'UrlFeedGet' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedGet',
            'UrlFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedUpdate',
            'FileFeedAdd' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedAdd',
            'FileFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedUpdate',
            'FileFeedGet' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedGet',
            'FeedsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\FeedsSelectionCriteria',
            'FeedAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedAddItem',
            'FeedGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedGetItem',
            'FeedUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedUpdateItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddFeedsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddFeedsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetFeedsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetFeedsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddFeedsRequest $parameters): AddFeedsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function get(GetFeedsRequest $parameters): GetFeedsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function update(UpdateFeedsRequest $parameters): UpdateFeedsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function delete(DeleteFeedsRequest $parameters): DeleteFeedsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
