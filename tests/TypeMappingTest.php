<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\Tests\YandexDirect\Api\SoapClientTestCase;
use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\Contract;
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

        $request = Contract\GetCampaignsRequest::create()
            ->setSelectionCriteria(
                Contract\CampaignsSelectionCriteria::create()
                    ->setIds([1111191]),
            )
            ->setFieldNames([
                Contract\CampaignFieldEnum::ID,
                Contract\CampaignFieldEnum::NEGATIVE_KEYWORDS,
                Contract\CampaignFieldEnum::TIME_TARGETING,
            ])
            ->setUnifiedCampaignFieldNames([
                Contract\UnifiedCampaignFieldEnum::COUNTER_IDS,
                Contract\UnifiedCampaignFieldEnum::PRIORITY_GOALS,

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
            Contract\PriorityGoalsItem::create()
                ->setGoalId(322345348)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(Contract\YesNoEnum::NO),
            Contract\PriorityGoalsItem::create()
                ->setGoalId(339155787)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(Contract\YesNoEnum::NO),
            Contract\PriorityGoalsItem::create()
                ->setGoalId(417641159)
                ->setValue(900000000)
                ->setIsMetrikaSourceOfValue(Contract\YesNoEnum::NO),
        ];

        self::assertInstanceOf(Contract\PriorityGoalsArray::class, $priorityGoals);
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
