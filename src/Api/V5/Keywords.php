<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Keywords extends ApiSoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/keywords?wsdl';

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
            'KeywordFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordFieldEnum',
            'KeywordStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordStateSelectionEnum',
            'KeywordStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordStatusSelectionEnum',
            'KeywordsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordsSelectionCriteria',
            'KeywordAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordAddItem',
            'KeywordProductivity' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordProductivity',
            'KeywordGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordGetItem',
            'KeywordUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordUpdateItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * add.
     *
     * @param Contract\AddKeywordsRequest $parameters
     * @return Contract\AddKeywordsResponse
     */
    public function add(Contract\AddKeywordsRequest $parameters)
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetKeywordsRequest $parameters
     * @return Contract\GetKeywordsResponse
     */
    public function get(Contract\GetKeywordsRequest $parameters)
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateKeywordsRequest $parameters
     * @return Contract\UpdateKeywordsResponse
     */
    public function update(Contract\UpdateKeywordsRequest $parameters)
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteKeywordsRequest $parameters
     * @return Contract\DeleteKeywordsResponse
     */
    public function delete(Contract\DeleteKeywordsRequest $parameters)
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendKeywordsRequest $parameters
     * @return Contract\SuspendKeywordsResponse
     */
    public function suspend(Contract\SuspendKeywordsRequest $parameters)
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * resume.
     *
     * @param Contract\ResumeKeywordsRequest $parameters
     * @return Contract\ResumeKeywordsResponse
     */
    public function resume(Contract\ResumeKeywordsRequest $parameters)
    {
        return $this->__soapCall('resume', [$parameters]);
    }


}

