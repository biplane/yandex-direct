<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FeedGetItem
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $BusinessType = null;

//    Can be omit.
//    protected $SourceType = null;

//    Can be omit.
//    protected $FilterSchema = null;

//    Can be omit.
//    protected $UpdatedAt = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $FileFeed = null;

//    Can be omit.
//    protected $NumberOfItems = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $UrlFeed = null;

    /**
     * Creates a new instance of FeedGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets BusinessType.
     *
     * @see BusinessTypeEnum
     */
    public function getBusinessType(): ?string
    {
        return $this->BusinessType ?? null;
    }

    /**
     * Sets BusinessType.
     *
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
     * Gets SourceType.
     *
     * @see SourceTypeEnum
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
     * Sets SourceType.
     *
     * @see SourceTypeEnum
     *
     * @return $this
     */
    public function setSourceType(?string $value = null)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets FilterSchema.
     */
    public function getFilterSchema(): ?string
    {
        return $this->FilterSchema ?? null;
    }

    /**
     * Sets FilterSchema.
     *
     * @return $this
     */
    public function setFilterSchema(?string $value = null)
    {
        $this->FilterSchema = $value;

        return $this;
    }

    /**
     * Gets UpdatedAt.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->UpdatedAt ?? null;
    }

    /**
     * Sets UpdatedAt.
     *
     * @return $this
     */
    public function setUpdatedAt(?string $value = null)
    {
        $this->UpdatedAt = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return float[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     */
    public function getFileFeed(): ?FileFeedGet
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Sets FileFeed.
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedGet $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }

    /**
     * Gets NumberOfItems.
     */
    public function getNumberOfItems(): ?int
    {
        return $this->NumberOfItems ?? null;
    }

    /**
     * Sets NumberOfItems.
     *
     * @return $this
     */
    public function setNumberOfItems(?int $value = null)
    {
        $this->NumberOfItems = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @see FeedStatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
     * @see FeedStatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     */
    public function getUrlFeed(): ?UrlFeedGet
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Sets UrlFeed.
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedGet $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }
}
