<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ProductivityAssertionsItem
{
    /** @var int */
    protected $Reference;

    /** @var string */
    protected $Title;

    /** @var string */
    protected $Recommendation;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Reference
     */
    public function getReference(): int
    {
        return $this->Reference;
    }

    /**
     * Set Reference
     *
     * @return $this
     */
    public function setReference(int $value)
    {
        $this->Reference = $value;

        return $this;
    }

    /**
     * Get Title
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Get Recommendation
     */
    public function getRecommendation(): string
    {
        return $this->Recommendation;
    }

    /**
     * Set Recommendation
     *
     * @return $this
     */
    public function setRecommendation(string $value)
    {
        $this->Recommendation = $value;

        return $this;
    }
}
