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
 * @implements IteratorAggregate<int, ClientUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateClientsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<ClientUpdateItem> */
    protected $Clients;

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
     * Get Clients
     *
     * @return non-empty-list<ClientUpdateItem>
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
     * Set Clients
     *
     * @param non-empty-list<ClientUpdateItem> $value
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

    /** @return ArrayIterator<int, ClientUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Clients);
    }
}
