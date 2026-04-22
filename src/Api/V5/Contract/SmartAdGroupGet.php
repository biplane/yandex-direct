<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartAdGroupGet
{
//    Can be omitted.
//    protected $FeedId;

//    Can be omitted.
//    protected $AdTitleSource;

//    Can be omitted.
//    protected $AdBodySource;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get FeedId
     */
    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * Set FeedId
     *
     * @return $this
     */
    public function setFeedId(?int $value)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Get AdTitleSource
     */
    public function getAdTitleSource(): ?string
    {
        return $this->AdTitleSource ?? null;
    }

    /**
     * Set AdTitleSource
     *
     * @return $this
     */
    public function setAdTitleSource(?string $value)
    {
        $this->AdTitleSource = $value;

        return $this;
    }

    /**
     * Get AdBodySource
     */
    public function getAdBodySource(): ?string
    {
        return $this->AdBodySource ?? null;
    }

    /**
     * Set AdBodySource
     *
     * @return $this
     */
    public function setAdBodySource(?string $value)
    {
        $this->AdBodySource = $value;

        return $this;
    }
}
