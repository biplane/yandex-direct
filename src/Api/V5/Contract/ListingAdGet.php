<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ListingAdGet
{
//    Can be omitted.
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $SitelinksModeration = null;

//    Can be omitted.
//    protected $AdExtensions = null;

//    Can be omitted.
//    protected $BusinessId = null;

//    Can be omitted.
//    protected $FeedId = null;

//    Can be omitted.
//    protected $FeedFilterConditions = null;

//    Can be omitted.
//    protected $FeedProcessingStatus = null;

//    Can be omitted.
//    protected $TitleSources = null;

//    Can be omitted.
//    protected $TextSources = null;

//    Can be omitted.
//    protected $DefaultTexts = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinkSetId(?int $value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value = null)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * @return AdExtensionAdGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
     * @param AdExtensionAdGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdExtensions(?array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }

    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * @return $this
     */
    public function setBusinessId(?int $value = null)
    {
        $this->BusinessId = $value;

        return $this;
    }

    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * @return FeedFilterConditionItem[]|null
     */
    public function getFeedFilterConditions(): ?array
    {
        return $this->FeedFilterConditions ?? null;
    }

    /**
     * @param FeedFilterConditionItem[]|null $value
     *
     * @return $this
     */
    public function setFeedFilterConditions(?array $value = null)
    {
        $this->FeedFilterConditions = $value;

        return $this;
    }

    /**
     * @see FeedProcessingStatusEnum
     */
    public function getFeedProcessingStatus(): ?string
    {
        return $this->FeedProcessingStatus ?? null;
    }

    /**
     * @see FeedProcessingStatusEnum
     *
     * @return $this
     */
    public function setFeedProcessingStatus(?string $value = null)
    {
        $this->FeedProcessingStatus = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTitleSources(): ?array
    {
        return $this->TitleSources ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTitleSources(?array $value = null)
    {
        $this->TitleSources = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTextSources(): ?array
    {
        return $this->TextSources ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextSources(?array $value = null)
    {
        $this->TextSources = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getDefaultTexts(): ?array
    {
        return $this->DefaultTexts ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDefaultTexts(?array $value = null)
    {
        $this->DefaultTexts = $value;

        return $this;
    }
}
