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
    protected $Reference = null;

    protected $Title = null;

    protected $Recommendation = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getReference(): int
    {
        return $this->Reference;
    }

    /**
     * @return $this
     */
    public function setReference(int $value)
    {
        $this->Reference = $value;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    public function getRecommendation(): string
    {
        return $this->Recommendation;
    }

    /**
     * @return $this
     */
    public function setRecommendation(string $value)
    {
        $this->Recommendation = $value;

        return $this;
    }
}
