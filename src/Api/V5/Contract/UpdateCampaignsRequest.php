<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, CampaignUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateCampaignsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<CampaignUpdateItem> */
    protected $Campaigns;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Campaigns
     *
     * @return non-empty-list<CampaignUpdateItem>
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns;
    }

    /**
     * Set Campaigns
     *
     * @param non-empty-list<CampaignUpdateItem> $value
     *
     * @return $this
     */
    public function setCampaigns(array $value)
    {
        $this->Campaigns = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Campaigns);
    }

    /** @return ArrayIterator<int, CampaignUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Campaigns);
    }
}
