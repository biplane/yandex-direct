<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddVCardsRequest
{

    protected $VCards = array(
        
    );

    /**
     * Creates a new instance of AddVCardsRequest.
     *
     * @return AddVCardsRequest
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
     * @return $this
     */
    public function setVCards(array $value)
    {
        $this->VCards = $value;

        return $this;
    }


}

