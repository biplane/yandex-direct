<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddKeywordRequest
{

    protected $VCards = array(
        
    );

    /**
     * Creates a new instance of AddKeywordRequest.
     *
     * @return AddKeywordRequest
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

