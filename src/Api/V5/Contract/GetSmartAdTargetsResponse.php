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
 * @implements IteratorAggregate<int, SmartAdTargetGetItem>
 */
#[AllowDynamicProperties]
class GetSmartAdTargetsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $SmartAdTargets;

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
     * Get SmartAdTargets
     *
     * @return list<SmartAdTargetGetItem>
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets ?? [];
    }

    /**
     * Set SmartAdTargets
     *
     * @param list<SmartAdTargetGetItem> $value
     *
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->SmartAdTargets) ? count($this->SmartAdTargets) : 0;
    }

    /**
     * @return ArrayIterator<int, SmartAdTargetGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->SmartAdTargets ?? []);
    }
}
