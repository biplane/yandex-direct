<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\Tests\YandexDirect\Api\SoapClientTestCase;
use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\General;
use VCR\VCR;

use function iterator_to_array;

/** @group functional */
final class TypeMappingTest extends SoapClientTestCase
{
    public function testArrayType(): void
    {
        VCR::turnOn();
        VCR::insertCassette('type_mapping_array.yml');

        $service = new Campaigns($this->createConfig(), $this->getSoapOptions());

        $request = Campaigns\GetRequest::create()
            ->setSelectionCriteria(
                Campaigns\CampaignsSelectionCriteria::create()
                    ->setIds([1111191]),
            )
            ->setFieldNames([
                Campaigns\CampaignFieldEnum::ID,
                Campaigns\CampaignFieldEnum::NEGATIVE_KEYWORDS,
                Campaigns\CampaignFieldEnum::TIME_TARGETING,
            ])
            ->setUnifiedCampaignFieldNames([
                Campaigns\UnifiedCampaignFieldEnum::COUNTER_IDS,
                Campaigns\UnifiedCampaignFieldEnum::PRIORITY_GOALS,

            ]);

        $campaigns = $service->get($request)->getCampaigns();

        self::assertCount(1, $campaigns);

        $campaign = $campaigns[0];
        $unifiedCampaign = $campaign->getUnifiedCampaign();

        self::assertNotNull($unifiedCampaign);

        self::assertSame(
            ['!on', 'луна', 'яблоко', 'юнь'],
            $campaign->getNegativeKeywords(),
        );

        self::assertSame([22200551, 22200556], $unifiedCampaign->getCounterIds());

        $priorityGoals = $unifiedCampaign->getPriorityGoals();
        $expectedPriorityGoalItems = [
            Campaigns\PriorityGoalsItem::create()
                ->setGoalId(322345348)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(General\YesNoEnum::NO),
            Campaigns\PriorityGoalsItem::create()
                ->setGoalId(339155787)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(General\YesNoEnum::NO),
            Campaigns\PriorityGoalsItem::create()
                ->setGoalId(417641159)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(General\YesNoEnum::NO),
        ];

        self::assertInstanceOf(Campaigns\PriorityGoalsArray::class, $priorityGoals);
        self::assertCount(3, $priorityGoals);
        self::assertEquals($expectedPriorityGoalItems, $priorityGoals->getItems());
        self::assertEquals($expectedPriorityGoalItems, iterator_to_array($priorityGoals));

        $timeTargeting = $campaign->getTimeTargeting();

        self::assertNotNull($timeTargeting);
        self::assertEquals(
            [
                '1,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '2,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '3,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '4,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '5,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '6,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,100,100,0,0,0',
                '7,0,0,0,0,0,0,0,0,0,100,100,100,100,100,100,100,100,100,100,100,0,0,0,0',
            ],
            $timeTargeting->getSchedule(),
        );
    }
}
