<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ProductivityAssertionsItem
{

    protected $Reference = null;

    protected $Title = null;

    protected $Recommendation = null;

    /**
     * Creates a new instance of ProductivityAssertionsItem.
     *
     * @return ProductivityAssertionsItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Reference.
     *
     * @return int
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * Sets Reference.
     *
     * @param int $value
     * @return $this
     */
    public function setReference($value)
    {
        $this->Reference = $value;

        return $this;
    }

    /**
     * Gets Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @param string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Recommendation.
     *
     * @return string
     */
    public function getRecommendation()
    {
        return $this->Recommendation;
    }

    /**
     * Sets Recommendation.
     *
     * @param string $value
     * @return $this
     */
    public function setRecommendation($value)
    {
        $this->Recommendation = $value;

        return $this;
    }


}

