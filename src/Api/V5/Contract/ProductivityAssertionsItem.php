<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Reference.
     */
    public function getReference(): int
    {
        return $this->Reference;
    }

    /**
     * Sets Reference.
     *
     * @return $this
     */
    public function setReference(int $value)
    {
        $this->Reference = $value;

        return $this;
    }

    /**
     * Gets Title.
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Recommendation.
     */
    public function getRecommendation(): string
    {
        return $this->Recommendation;
    }

    /**
     * Sets Recommendation.
     *
     * @return $this
     */
    public function setRecommendation(string $value)
    {
        $this->Recommendation = $value;

        return $this;
    }
}
