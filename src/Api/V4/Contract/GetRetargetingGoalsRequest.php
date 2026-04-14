<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, string>
 */
#[AllowDynamicProperties]
class GetRetargetingGoalsRequest implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Logins;

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
     * Get Logins
     *
     * @return list<string>|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Set Logins
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Logins) ? count($this->Logins) : 0;
    }

    /**
     * @return ArrayIterator<int, string>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Logins ?? []);
    }
}
