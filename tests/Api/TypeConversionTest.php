<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\General;
use Biplane\YandexDirect\Api\V5\VCards;
use Biplane\YandexDirect\Exception\ApiException;
use VCR\VCR;

/** @group functional */
final class TypeConversionTest extends SoapClientTestCase
{
    public function testConvertArrayOfStringAndIntegerFromXml(): void
    {
        VCR::turnOn();
        VCR::insertCassette('convert_array_of_string_from_xml.yml');

        $service = new Campaigns($this->createConfig(), $this->getSoapOptions());

        $request = Campaigns\GetRequest::create()
            ->setSelectionCriteria(
                Campaigns\CampaignsSelectionCriteria::create()
                    ->setIds([37605271]),
            )
            ->setFieldNames([
                Campaigns\CampaignFieldEnum::ID,
                Campaigns\CampaignFieldEnum::NEGATIVE_KEYWORDS,
            ])
            ->setTextCampaignFieldNames([
                Campaigns\TextCampaignFieldEnum::COUNTER_IDS,
            ]);

        $campaigns = $service->get($request)->getCampaigns();

        self::assertNotEmpty($campaigns);

        $campaign = $campaigns[0];

        self::assertSame(
            ['вредно', 'пуховые', 'яблоко'],
            $campaign->getNegativeKeywords(),
        );
        self::assertSame([123], $campaign->getTextCampaign()?->getCounterIds());
    }

    public function testConvertDecimalFromXml(): void
    {
        VCR::turnOn();
        VCR::insertCassette('convert_decimal_from_xml.yml');

        $service = new VCards($this->createConfig(), $this->getSoapOptions());

        $request = VCards\GetRequest::create()
            ->setSelectionCriteria(
                General\IdsCriteria::create()->setIds([45367044]),
            )
            ->setFieldNames([
                VCards\VCardFieldEnum::ID,
                VCards\VCardFieldEnum::POINT_ON_MAP,
            ]);

        $items = $service->get($request)->getVCards();

        self::assertNotEmpty($items);

        $pointOnMap = $items[0]->getPointOnMap();
        self::assertNotNull($pointOnMap);

        self::assertSame(37.692222, $pointOnMap->getX());
        self::assertSame(55.711747, $pointOnMap->getY());
    }

    public function testConvertDecimalToXml(): void
    {
        VCR::turnOn();
        VCR::insertCassette('convert_decimal_to_xml.yml');

        $service = new VCards($this->createConfig(), $this->getSoapOptions());

        $request = VCards\AddRequest::create()
            ->setVCards([
                VCards\VCardAddItem::create()
                    ->setPointOnMap(
                        VCards\MapPoint::create()
                            ->setX(37.69)
                            ->setY(55.711747)
                            ->setX1(-37.69)
                            ->setY1(55.71)
                            ->setX2(90.0)
                            ->setY2(-55.71),
                    ),
            ]);

        try {
            $service->add($request);
        } catch (ApiException) {
            self::assertStringContainsString(
                '<PointOnMap><X>37.69</X><Y>55.711747</Y><X1>-37.69</X1><Y1>55.71</Y1><X2>90</X2><Y2>-55.71</Y2></PointOnMap>',
                (string)$service->__getLastRequest(),
            );
        }
    }

    public function testConvertLongFromXml(): void
    {
        VCR::turnOn();
        VCR::insertCassette('convert_long_from_xml.yml');

        $service = new Campaigns($this->createConfig(), $this->getSoapOptions());

        $request = Campaigns\GetRequest::create()
            ->setSelectionCriteria(
                Campaigns\CampaignsSelectionCriteria::create()
                    ->setIds([38811657]),
            )
            ->setFieldNames([
                Campaigns\CampaignFieldEnum::ID,
                Campaigns\CampaignFieldEnum::DAILY_BUDGET,
            ]);

        $items = $service->get($request)->getCampaigns();

        self::assertNotEmpty($items);
        self::assertSame(6355930000, $items[0]->getDailyBudget()?->getAmount());
    }
}
