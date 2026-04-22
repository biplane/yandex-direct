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
//    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $BusinessType;

//    Can be omitted.
//    protected $SourceType;

//    Can be omitted.
//    protected $FilterSchema;

//    Can be omitted.
//    protected $UpdatedAt;

//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $FileFeed;

//    Can be omitted.
//    protected $NumberOfItems;

//    Can be omitted.
//    protected $NumberOfListings;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $UrlFeed;

//    Can be omitted.
//    protected $TitleAndTextSources;

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
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get BusinessType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessTypeEnum
     *
     * @return 'RETAIL'|'HOTELS'|'REALTY'|'AUTOMOBILES'|'FLIGHTS'|'OTHER'|null
     */
    public function getBusinessType(): ?string
    {
        return $this->BusinessType ?? null;
    }

    /**
     * Set BusinessType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BusinessTypeEnum
     *
     * @param 'RETAIL'|'HOTELS'|'REALTY'|'AUTOMOBILES'|'FLIGHTS'|'OTHER'|null $value
     *
     * @return $this
     */
    public function setBusinessType(?string $value)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * Get SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeEnum
     *
     * @return 'URL'|'FILE'|null
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
     * Set SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeEnum
     *
     * @param 'URL'|'FILE'|null $value
     *
     * @return $this
     */
    public function setSourceType(?string $value)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Get FilterSchema
     */
    public function getFilterSchema(): ?string
    {
        return $this->FilterSchema ?? null;
    }

    /**
     * Set FilterSchema
     *
     * @return $this
     */
    public function setFilterSchema(?string $value)
    {
        $this->FilterSchema = $value;

        return $this;
    }

    /**
     * Get UpdatedAt
     */
    public function getUpdatedAt(): ?string
    {
        return $this->UpdatedAt ?? null;
    }

    /**
     * Set UpdatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?string $value)
    {
        $this->UpdatedAt = $value;

        return $this;
    }

    /**
     * Get CampaignIds
     *
     * @return non-empty-list<int>|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * Set CampaignIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Get FileFeed
     */
    public function getFileFeed(): ?FileFeedGet
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Set FileFeed
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedGet $value)
    {
        $this->FileFeed = $value;

        return $this;
    }

    /**
     * Get NumberOfItems
     */
    public function getNumberOfItems(): ?int
    {
        return $this->NumberOfItems ?? null;
    }

    /**
     * Set NumberOfItems
     *
     * @return $this
     */
    public function setNumberOfItems(?int $value)
    {
        $this->NumberOfItems = $value;

        return $this;
    }

    /**
     * Get NumberOfListings
     */
    public function getNumberOfListings(): ?int
    {
        return $this->NumberOfListings ?? null;
    }

    /**
     * Set NumberOfListings
     *
     * @return $this
     */
    public function setNumberOfListings(?int $value)
    {
        $this->NumberOfListings = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedStatusEnum
     *
     * @return 'NEW'|'UPDATING'|'DONE'|'ERROR'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedStatusEnum
     *
     * @param 'NEW'|'UPDATING'|'DONE'|'ERROR'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get UrlFeed
     */
    public function getUrlFeed(): ?UrlFeedGet
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Set UrlFeed
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedGet $value)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Get TitleAndTextSources
     *
     * @return non-empty-list<string>|null
     */
    public function getTitleAndTextSources(): ?array
    {
        return $this->TitleAndTextSources ?? null;
    }

    /**
     * Set TitleAndTextSources
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setTitleAndTextSources(?array $value)
    {
        $this->TitleAndTextSources = $value;

        return $this;
    }
}
