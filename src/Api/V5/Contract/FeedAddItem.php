<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FeedAddItem
{
    /** @var string */
    protected $Name;

    /** @var 'RETAIL'|'HOTELS'|'REALTY'|'AUTOMOBILES'|'FLIGHTS'|'OTHER' */
    protected $BusinessType;

    /** @var 'URL'|'FILE' */
    protected $SourceType;

//    Can be omitted.
//    protected $UrlFeed;

//    Can be omitted.
//    protected $FileFeed;

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
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get BusinessType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessTypeEnum
     *
     * @return 'RETAIL'|'HOTELS'|'REALTY'|'AUTOMOBILES'|'FLIGHTS'|'OTHER'
     */
    public function getBusinessType(): string
    {
        return $this->BusinessType;
    }

    /**
     * Set BusinessType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessTypeEnum
     *
     * @param 'RETAIL'|'HOTELS'|'REALTY'|'AUTOMOBILES'|'FLIGHTS'|'OTHER' $value
     *
     * @return $this
     */
    public function setBusinessType(string $value)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * Get SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeEnum
     *
     * @return 'URL'|'FILE'
     */
    public function getSourceType(): string
    {
        return $this->SourceType;
    }

    /**
     * Set SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeEnum
     *
     * @param 'URL'|'FILE' $value
     *
     * @return $this
     */
    public function setSourceType(string $value)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Get UrlFeed
     */
    public function getUrlFeed(): ?UrlFeedAdd
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Set UrlFeed
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedAdd $value)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Get FileFeed
     */
    public function getFileFeed(): ?FileFeedAdd
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Set FileFeed
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedAdd $value)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
