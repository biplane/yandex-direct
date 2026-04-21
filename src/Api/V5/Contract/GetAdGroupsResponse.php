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
 * @implements IteratorAggregate<int, AdGroupGetItem>
 */
#[AllowDynamicProperties]
class GetAdGroupsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AdGroups;

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
     * Get AdGroups
     *
     * @return list<AdGroupGetItem>
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups ?? [];
    }

    /**
     * Set AdGroups
     *
     * @param list<AdGroupGetItem> $value
     *
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->AdGroups) ? count($this->AdGroups) : 0;
    }

    /**
     * @return ArrayIterator<int, AdGroupGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdGroups ?? []);
    }
}
