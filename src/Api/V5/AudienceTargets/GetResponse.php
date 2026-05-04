<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AudienceTargets;

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
 * @implements IteratorAggregate<int<0, max>, AudienceTargetGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AudienceTargets;

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
     * Get AudienceTargets
     *
     * @return list<AudienceTargetGetItem>
     */
    public function getAudienceTargets(): array
    {
        return $this->AudienceTargets ?? [];
    }

    /**
     * Set AudienceTargets
     *
     * @param list<AudienceTargetGetItem> $value
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
        return isset($this->AudienceTargets) ? count($this->AudienceTargets) : 0;
    }

    /** @return ArrayIterator<int<0, max>, AudienceTargetGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AudienceTargets ?? []);
    }
}
