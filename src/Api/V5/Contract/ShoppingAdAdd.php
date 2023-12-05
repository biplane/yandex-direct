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
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $AdExtensionIds = null;

//    Can be omitted.
//    protected $BusinessId = null;

    protected $FeedId = null;

//    Can be omitted.
//    protected $FeedFilterConditions = null;

//    Can be omitted.
//    protected $TitleSources = null;

//    Can be omitted.
//    protected $TextSources = null;

    protected $DefaultTexts = [];

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

    /**
     * @return int[]|null
     */
    public function getAdExtensionIds(): ?array
    {
        return $this->AdExtensionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdExtensionIds(?array $value = null)
    {
        $this->AdExtensionIds = $value;

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

    public function getFeedId(): int
    {
        return $this->FeedId;
    }

    /**
     * @return $this
     */
    public function setFeedId(int $value)
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
     * @return string[]
     */
    public function getDefaultTexts(): array
    {
        return $this->DefaultTexts;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setDefaultTexts(array $value)
    {
        $this->DefaultTexts = $value;

        return $this;
    }
}
