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
 * @implements IteratorAggregate<int, LeadGetItem>
 */
#[AllowDynamicProperties]
class GetLeadsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Leads;

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
     * Get Leads
     *
     * @return list<LeadGetItem>
     */
    public function getLeads(): array
    {
        return $this->Leads ?? [];
    }

    /**
     * Set Leads
     *
     * @param list<LeadGetItem> $value
     *
     * @return $this
     */
    public function setLeads(array $value)
    {
        $this->Leads = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Leads) ? count($this->Leads) : 0;
    }

    /**
     * @return ArrayIterator<int, LeadGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Leads ?? []);
    }
}
