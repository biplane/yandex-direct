<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V5;

use Biplane\Tests\YandexDirect\Api\SoapClientTestCase;
use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum;
use Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria;
use Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum;
use VCR\VCR;

class CampaignsTest extends SoapClientTestCase
{
    public function testMappingArrayOfPrimitiveTypes(): void
    {
        VCR::turnOn();
        VCR::insertCassette('CampaignsGet_primitiveTypes');

        $service = new Campaigns($this->createConfig(), $this->getSoapOptions());

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
}
