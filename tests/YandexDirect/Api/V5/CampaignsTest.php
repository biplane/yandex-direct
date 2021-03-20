<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum;
use Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use VCR\VCR;

class CampaignsTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        VCR::turnOn();
    }

    public static function tearDownAfterClass(): void
    {
        VCR::turnOff();
    }

    public function testMappingArrayOfPrimitiveTypes(): void
    {
        VCR::insertCassette('CampaignsGet_primitiveTypes');

        $service = new Campaigns($this->createConfig(), [
            'soap_version' => SOAP_1_1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace' => true,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ]);

        $request = GetCampaignsRequest::create()
            ->setSelectionCriteria(
                CampaignsSelectionCriteria::create()
                    ->setIds([37605271])
            )
            ->setFieldNames([
                CampaignFieldEnum::ID,
                CampaignFieldEnum::NEGATIVE_KEYWORDS,
            ])
            ->setTextCampaignFieldNames([
                TextCampaignFieldEnum::COUNTER_IDS,
            ]);

        $response = $service->get($request);
        $campaigns = $response->getCampaigns();

        self::assertNotNull($campaigns);
        self::assertCount(1, $campaigns);
        self::assertSame([
            'вредно',
            'пуховые',
            'яблоко',
        ], $campaigns[0]->getNegativeKeywords());
        self::assertSame([123], $campaigns[0]->getTextCampaign()->getCounterIds());
    }

    private function createConfig(): Config
    {
        $accessToken = getenv('DIRECT_TOKEN');

        if (false === $accessToken) {
            $accessToken = 'fake';
        }

        return new Config([
            'access_token' => $accessToken,
            'client_login' => getenv('DIRECT_CLIENT_LOGIN') ?: null,
        ]);
    }
}
