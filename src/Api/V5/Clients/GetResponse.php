<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Clients;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\GeneralClients\ClientGetItem;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, ClientGetItem>
 */
#[AllowDynamicProperties]
class GetResponse implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Clients;

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
     * @return list<ClientGetItem>
     */
    public function getClients(): array
    {
        return $this->Clients ?? [];
    }

    /**
     * Set Clients
     *
     * @param list<ClientGetItem> $value
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
        return isset($this->Clients) ? count($this->Clients) : 0;
    }

    /** @return ArrayIterator<int<0, max>, ClientGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Clients ?? []);
    }
}
