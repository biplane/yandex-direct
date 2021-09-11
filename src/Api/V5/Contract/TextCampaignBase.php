<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignBase
{
//    Can be omit.
//    protected $CounterIds = null;

//    Can be omit.
//    protected $RelevantKeywords = null;

//    Can be omit.
//    protected $AttributionModel = null;

    /**
     * Creates a new instance of TextCampaignBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets RelevantKeywords.
     */
    public function getRelevantKeywords(): ?RelevantKeywordsSetting
    {
        return $this->RelevantKeywords ?? null;
    }

    /**
     * Sets RelevantKeywords.
     *
     * @return $this
     */
    public function setRelevantKeywords(?RelevantKeywordsSetting $value = null)
    {
        $this->RelevantKeywords = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * Sets AttributionModel.
     *
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }
}
