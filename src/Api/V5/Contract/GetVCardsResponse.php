<?php

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
     * @return VCardGetItem[]|null
     */
    public function getVCards()
    {
        return isset($this->VCards) ? $this->VCards : null;
    }

    /**
     * Sets VCards.
     *
     * @param VCardGetItem[]|null $value
     * @return $this
     */
    public function setVCards(array $value = null)
    {
        $this->VCards = $value;

        return $this;
    }


}

