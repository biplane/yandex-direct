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
 * @implements IteratorAggregate<int, AudienceTargetAddItem>
 */
#[AllowDynamicProperties]
class AddAudienceTargetsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AudienceTargetAddItem> */
    protected $AudienceTargets;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AudienceTargets
     *
     * @return non-empty-list<AudienceTargetAddItem>
     */
    public function getAudienceTargets(): array
    {
        return $this->AudienceTargets;
    }

    /**
     * Set AudienceTargets
     *
     * @param non-empty-list<AudienceTargetAddItem> $value
     *
     * @return $this
     */
    public function setAudienceTargets(array $value)
    {
        $this->AudienceTargets = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AudienceTargets);
    }

    /**
     * @return ArrayIterator<int, AudienceTargetAddItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AudienceTargets);
    }
}
