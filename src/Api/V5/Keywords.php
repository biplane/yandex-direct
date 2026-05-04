<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Keywords\AddRequest;
use Biplane\YandexDirect\Api\V5\Keywords\AddResponse;
use Biplane\YandexDirect\Api\V5\Keywords\DeleteRequest;
use Biplane\YandexDirect\Api\V5\Keywords\DeleteResponse;
use Biplane\YandexDirect\Api\V5\Keywords\GetRequest;
use Biplane\YandexDirect\Api\V5\Keywords\GetResponse;
use Biplane\YandexDirect\Api\V5\Keywords\ResumeRequest;
use Biplane\YandexDirect\Api\V5\Keywords\ResumeResponse;
use Biplane\YandexDirect\Api\V5\Keywords\SuspendRequest;
use Biplane\YandexDirect\Api\V5\Keywords\SuspendResponse;
use Biplane\YandexDirect\Api\V5\Keywords\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Keywords\UpdateResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Keywords extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/keywords?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\AddRequest',
            'KeywordAddItem' => 'Biplane\YandexDirect\Api\V5\Keywords\KeywordAddItem',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategory',
            'AutotargetingBrandOption' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingBrandOption',
            'AutotargetingSettings' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingSettings',
            'AutotargetingCategories' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategories',
            'AutotargetingBrandOptions' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingBrandOptions',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\GetRequest',
            'KeywordsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Keywords\KeywordsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\GetResponse',
            'KeywordGetItem' => 'Biplane\YandexDirect\Api\V5\Keywords\KeywordGetItem',
            'KeywordProductivity' => 'Biplane\YandexDirect\Api\V5\Keywords\KeywordProductivity',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\General\Statistics',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingCategoryArray',
            'AutotargetingBrandOptionArray' => 'Biplane\YandexDirect\Api\V5\General\AutotargetingBrandOptionArray',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\UpdateRequest',
            'KeywordUpdateItem' => 'Biplane\YandexDirect\Api\V5\Keywords\KeywordUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\DeleteResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Keywords\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Keywords\ResumeResponse',
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
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
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

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendRequest $parameters): SuspendResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeRequest $parameters): ResumeResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
