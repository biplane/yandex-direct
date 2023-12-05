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
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $CalloutSetting = null;

//    Can be omitted.
//    protected $BusinessId = null;

//    Can be omitted.
//    protected $FeedFilterConditions = null;

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

    public function getCalloutSetting(): ?AdExtensionSetting
    {
        return $this->CalloutSetting ?? null;
    }

    /**
     * @return $this
     */
    public function setCalloutSetting(?AdExtensionSetting $value = null)
    {
        $this->CalloutSetting = $value;

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
