<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ShoppingAdUpdate
{
//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $CalloutSetting;

//    Can be omitted.
//    protected $BusinessId;

//    Can be omitted.
//    protected $FeedFilterConditions;

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
     * Get CalloutSetting
     */
    public function getCalloutSetting(): ?AdExtensionSetting
    {
        return $this->CalloutSetting ?? null;
    }

    /**
     * Set CalloutSetting
     *
     * @return $this
     */
    public function setCalloutSetting(?AdExtensionSetting $value)
    {
        $this->CalloutSetting = $value;

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
