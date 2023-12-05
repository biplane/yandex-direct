<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FeedGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $BusinessType = null;

//    Can be omitted.
//    protected $SourceType = null;

//    Can be omitted.
//    protected $FilterSchema = null;

//    Can be omitted.
//    protected $UpdatedAt = null;

//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $FileFeed = null;

//    Can be omitted.
//    protected $NumberOfItems = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $UrlFeed = null;

//    Can be omitted.
//    protected $TitleAndTextSources = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @see BusinessTypeEnum
     */
    public function getBusinessType(): ?string
    {
        return $this->BusinessType ?? null;
    }

    /**
     * @see BusinessTypeEnum
     *
     * @return $this
     */
    public function setBusinessType(?string $value = null)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * @see SourceTypeEnum
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
     * @see SourceTypeEnum
     *
     * @return $this
     */
    public function setSourceType(?string $value = null)
    {
        $this->SourceType = $value;

        return $this;
    }

    public function getFilterSchema(): ?string
    {
        return $this->FilterSchema ?? null;
    }

    /**
     * @return $this
     */
    public function setFilterSchema(?string $value = null)
    {
        $this->FilterSchema = $value;

        return $this;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->UpdatedAt ?? null;
    }

    /**
     * @return $this
     */
    public function setUpdatedAt(?string $value = null)
    {
        $this->UpdatedAt = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    public function getFileFeed(): ?FileFeedGet
    {
        return $this->FileFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setFileFeed(?FileFeedGet $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }

    public function getNumberOfItems(): ?int
    {
        return $this->NumberOfItems ?? null;
    }

    /**
     * @return $this
     */
    public function setNumberOfItems(?int $value = null)
    {
        $this->NumberOfItems = $value;

        return $this;
    }

    /**
     * @see FeedStatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see FeedStatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    public function getUrlFeed(): ?UrlFeedGet
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setUrlFeed(?UrlFeedGet $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTitleAndTextSources(): ?array
    {
        return $this->TitleAndTextSources ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTitleAndTextSources(?array $value = null)
    {
        $this->TitleAndTextSources = $value;

        return $this;
    }
}
