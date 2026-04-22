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
 * @implements IteratorAggregate<int, AudienceTargetSetBidsItem>
 */
#[AllowDynamicProperties]
class SetBidsAudienceTargetsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AudienceTargetSetBidsItem> */
    protected $Bids;

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
     * Get Bids
     *
     * @return non-empty-list<AudienceTargetSetBidsItem>
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * Set Bids
     *
     * @param non-empty-list<AudienceTargetSetBidsItem> $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Bids);
    }

    /** @return ArrayIterator<int, AudienceTargetSetBidsItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Bids);
    }
}
