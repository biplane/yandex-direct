<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ShoppingAdAdd
{
//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $AdExtensionIds;

//    Can be omitted.
//    protected $BusinessId;

    /** @var int */
    protected $FeedId;

//    Can be omitted.
//    protected $FeedFilterConditions;

//    Can be omitted.
//    protected $TitleSources;

//    Can be omitted.
//    protected $TextSources;

    /** @var non-empty-list<string> */
    protected $DefaultTexts;

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
     * Get AdExtensionIds
     *
     * @return list<int>
     */
    public function getAdExtensionIds(): array
    {
        return $this->AdExtensionIds ?? [];
    }

    /**
     * Set AdExtensionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdExtensionIds(array $value)
    {
        $this->AdExtensionIds = $value;

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
    public function getFeedId(): int
    {
        return $this->FeedId;
    }

    /**
     * Set FeedId
     *
     * @return $this
     */
    public function setFeedId(int $value)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Get FeedFilterConditions
     *
     * @return list<FeedFilterConditionItem>
     */
    public function getFeedFilterConditions(): array
    {
        return $this->FeedFilterConditions ?? [];
    }

    /**
     * Set FeedFilterConditions
     *
     * @param list<FeedFilterConditionItem> $value
     *
     * @return $this
     */
    public function setFeedFilterConditions(array $value)
    {
        $this->FeedFilterConditions = $value;

        return $this;
    }

    /**
     * Get TitleSources
     *
     * @return list<string>
     */
    public function getTitleSources(): array
    {
        return $this->TitleSources ?? [];
    }

    /**
     * Set TitleSources
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setTitleSources(array $value)
    {
        $this->TitleSources = $value;

        return $this;
    }

    /**
     * Get TextSources
     *
     * @return list<string>
     */
    public function getTextSources(): array
    {
        return $this->TextSources ?? [];
    }

    /**
     * Set TextSources
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setTextSources(array $value)
    {
        $this->TextSources = $value;

        return $this;
    }

    /**
     * Get DefaultTexts
     *
     * @return non-empty-list<string>
     */
    public function getDefaultTexts(): array
    {
        return $this->DefaultTexts;
    }

    /**
     * Set DefaultTexts
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setDefaultTexts(array $value)
    {
        $this->DefaultTexts = $value;

        return $this;
    }
}
