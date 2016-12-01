<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddVCardsRequest
{

    protected $VCards = [];

    /**
     * Creates a new instance of AddVCardsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets VCards.
     *
     * @return VCardAddItem[]
     */
    public function getVCards()
    {
        return $this->VCards;
    }

    /**
     * Sets VCards.
     *
     * @param VCardAddItem[] $value
     * @return self
     */
    public function setVCards(array $value)
    {
        $this->VCards = $value;

        return $this;
    }


}

