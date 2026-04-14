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
 * @implements IteratorAggregate<int, AgencyClientUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateAgencyClientsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AgencyClientUpdateItem> */
    protected $Clients;

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
     * Get Clients
     *
     * @return non-empty-list<AgencyClientUpdateItem>
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
     * Set Clients
     *
     * @param non-empty-list<AgencyClientUpdateItem> $value
     *
     * @return $this
     */
    public function setClients(array $value)
    {
        $this->Clients = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Clients);
    }

    /**
     * @return ArrayIterator<int, AgencyClientUpdateItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Clients);
    }
}
