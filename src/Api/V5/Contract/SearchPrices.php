<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SearchPrices
{
//    Can be omitted.
//    protected $Position = null;

//    Can be omitted.
//    protected $Price = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see PositionEnum
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * @see PositionEnum
     *
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->Price ?? null;
    }

    /**
     * @return $this
     */
    public function setPrice(?int $value = null)
    {
        $this->Price = $value;

        return $this;
    }
}
