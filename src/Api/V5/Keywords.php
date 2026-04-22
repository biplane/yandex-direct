<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsResponse;
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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsRequest',
            'KeywordAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordAddItem',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategory',
            'AutotargetingBrandOption' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOption',
            'AutotargetingSettings' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingSettings',
            'AutotargetingCategories' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategories',
            'AutotargetingBrandOptions' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptions',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsRequest',
            'KeywordsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsResponse',
            'KeywordGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordGetItem',
            'KeywordProductivity' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordProductivity',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoryArray',
            'AutotargetingBrandOptionArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionArray',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsRequest',
            'KeywordUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddKeywordsRequest $parameters): AddKeywordsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetKeywordsRequest $parameters): GetKeywordsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateKeywordsRequest $parameters): UpdateKeywordsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteKeywordsRequest $parameters): DeleteKeywordsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendKeywordsRequest $parameters): SuspendKeywordsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeKeywordsRequest $parameters): ResumeKeywordsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
