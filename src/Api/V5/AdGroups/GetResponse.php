<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdGroups;

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
 * @implements IteratorAggregate<int<0, max>, AdGroupGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AdGroups;

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

    /** @return ArrayIterator<int<0, max>, AdGroupGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdGroups ?? []);
    }
}
