<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddVCardsRequest
{
    protected $VCards = [];

    /**
     * Creates a new instance of AddVCardsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets VCards.
     *
     * @return VCardAddItem[]
     */
    public function getVCards(): array
    {
        return $this->VCards;
    }

    /**
     * Sets VCards.
     *
     * @param VCardAddItem[] $value
     *
     * @return $this
     */
    public function setVCards(array $value)
    {
        $this->VCards = $value;

        return $this;
    }
}
