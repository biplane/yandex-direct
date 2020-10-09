<?php

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum;
use Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use VCR\VCR;

class CampaignsTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        VCR::turnOn();
    }

    public static function tearDownAfterClass()
    {
        VCR::turnOff();
    }

    public function testMappingArrayOfPrimitiveTypes()
    {
        VCR::insertCassette('CampaignsGet_primitiveTypes');

        $service = new Campaigns(new EventDispatcher(), $this->createUser());

        $request = GetCampaignsRequest::create()
            ->setSelectionCriteria(
                CampaignsSelectionCriteria::create()
                    ->setIds([31946025])
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

        self::assertCount(1, $campaigns);
        self::assertSame([
            'бесплатно',
            'плохие отзывы',
            'самостоятельно',
        ], $campaigns[0]->getNegativeKeywords());
        self::assertSame([123], $campaigns[0]->getTextCampaign()->getCounterIds());
    }

    private function createUser()
    {
        $accessToken = getenv('DIRECT_TOKEN');

        if (false === $accessToken) {
            $accessToken = 'fake';
        }

        return new User([
            'access_token' => $accessToken,
            'login' => getenv('DIRECT_CLIENT_LOGIN') ?: null,
        ]);
    }
}
