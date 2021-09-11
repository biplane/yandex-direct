<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdGroupGet
{
//    Can be omit.
//    protected $FeedId = null;

//    Can be omit.
//    protected $AdTitleSource = null;

//    Can be omit.
//    protected $AdBodySource = null;

    /**
     * Creates a new instance of SmartAdGroupGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FeedId.
     */
    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * Sets FeedId.
     *
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Gets AdTitleSource.
     */
    public function getAdTitleSource(): ?string
    {
        return $this->AdTitleSource ?? null;
    }

    /**
     * Sets AdTitleSource.
     *
     * @return $this
     */
    public function setAdTitleSource(?string $value = null)
    {
        $this->AdTitleSource = $value;

        return $this;
    }

    /**
     * Gets AdBodySource.
     */
    public function getAdBodySource(): ?string
    {
        return $this->AdBodySource ?? null;
    }

    /**
     * Sets AdBodySource.
     *
     * @return $this
     */
    public function setAdBodySource(?string $value = null)
    {
        $this->AdBodySource = $value;

        return $this;
    }
}
