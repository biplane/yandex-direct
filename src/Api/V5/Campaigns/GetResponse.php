<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Campaigns;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\GetResponseGeneral;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, CampaignGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Campaigns;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Campaigns
     *
     * @return list<CampaignGetItem>
     */
    public function getCampaigns(): array
    {
        return $this->Campaigns ?? [];
    }

    /**
     * Set Campaigns
     *
     * @param list<CampaignGetItem> $value
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
        return isset($this->Campaigns) ? count($this->Campaigns) : 0;
    }

    /** @return ArrayIterator<int<0, max>, CampaignGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Campaigns ?? []);
    }
}
