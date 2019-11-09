<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetAddItem
{

    protected $Name = null;

    protected $NegativeKeywords = [];

    /**
     * Creates a new instance of NegativeKeywordSharedSetAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[] $value
     * @return $this
     */
    public function setNegativeKeywords(array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }


}

