<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdUpdateItem
{

    protected $Id = null;

    protected $TextAd = null;

    /**
     * Creates a new instance of AdUpdateItem.
     *
     * @return AdUpdateItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets TextAd.
     *
     * @return TextAdUpdate|null
     */
    public function getTextAd()
    {
        return $this->TextAd;
    }

    /**
     * Sets TextAd.
     *
     * @param TextAdUpdate|null $value
     * @return $this
     */
    public function setTextAd(TextAdUpdate $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }


}

