<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetVCardsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $VCards = null;

    /**
     * Creates a new instance of GetVCardsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets VCards.
     *
     * @return VCardGetItem[]|null
     */
    public function getVCards(): ?array
    {
        return $this->VCards ?? null;
    }

    /**
     * Sets VCards.
     *
     * @param VCardGetItem[]|null $value
     *
     * @return $this
     */
    public function setVCards(?array $value = null)
    {
        $this->VCards = $value;

        return $this;
    }
}
