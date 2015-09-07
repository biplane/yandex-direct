<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordResponse extends GetResponseGeneral
{

    protected $VCards = null;

    /**
     * Creates a new instance of GetKeywordResponse.
     *
     * @return GetKeywordResponse
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
        return $this->VCards;
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

