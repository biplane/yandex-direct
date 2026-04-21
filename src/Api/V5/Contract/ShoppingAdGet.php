<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ShoppingAdGet
{
//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $SitelinksModeration;

//    Can be omitted.
//    protected $AdExtensions;

//    Can be omitted.
//    protected $BusinessId;

//    Can be omitted.
//    protected $FeedId;

//    Can be omitted.
//    protected $FeedFilterConditions;

//    Can be omitted.
//    protected $FeedProcessingStatus;

//    Can be omitted.
//    protected $TitleSources;

//    Can be omitted.
//    protected $TextSources;

//    Can be omitted.
//    protected $DefaultTexts;

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
     * Get SitelinkSetId
     */
    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * Set SitelinkSetId
     *
     * @return $this
     */
    public function setSitelinkSetId(?int $value)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Get SitelinksModeration
     */
    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * Set SitelinksModeration
     *
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * Get AdExtensions
     *
     * @return list<AdExtensionAdGetItem>
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions ?? [];
    }

    /**
     * Set AdExtensions
     *
     * @param list<AdExtensionAdGetItem> $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }

    /**
     * Get BusinessId
     */
    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * Set BusinessId
     *
     * @return $this
     */
    public function setBusinessId(?int $value)
    {
        $this->BusinessId = $value;

        return $this;
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
     * Get FeedFilterConditions
     */
    public function getFeedFilterConditions(): ?ArrayOfFeedFilterCondition
    {
        return $this->FeedFilterConditions ?? null;
    }

    /**
     * Set FeedFilterConditions
     *
     * @return $this
     */
    public function setFeedFilterConditions(?ArrayOfFeedFilterCondition $value)
    {
        $this->FeedFilterConditions = $value;

        return $this;
    }

    /**
     * Get FeedProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedProcessingStatusEnum
     *
     * @return 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null
     */
    public function getFeedProcessingStatus(): ?string
    {
        return $this->FeedProcessingStatus ?? null;
    }

    /**
     * Set FeedProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedProcessingStatusEnum
     *
     * @param 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null $value
     *
     * @return $this
     */
    public function setFeedProcessingStatus(?string $value)
    {
        $this->FeedProcessingStatus = $value;

        return $this;
    }

    /**
     * Get TitleSources
     *
     * @return non-empty-list<string>|null
     */
    public function getTitleSources(): ?array
    {
        return $this->TitleSources ?? null;
    }

    /**
     * Set TitleSources
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setTitleSources(?array $value)
    {
        $this->TitleSources = $value;

        return $this;
    }

    /**
     * Get TextSources
     *
     * @return non-empty-list<string>|null
     */
    public function getTextSources(): ?array
    {
        return $this->TextSources ?? null;
    }

    /**
     * Set TextSources
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setTextSources(?array $value)
    {
        $this->TextSources = $value;

        return $this;
    }

    /**
     * Get DefaultTexts
     *
     * @return list<string>
     */
    public function getDefaultTexts(): array
    {
        return $this->DefaultTexts ?? [];
    }

    /**
     * Set DefaultTexts
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setDefaultTexts(array $value)
    {
        $this->DefaultTexts = $value;

        return $this;
    }
}
