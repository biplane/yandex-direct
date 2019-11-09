<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds()
    {
        return isset($this->CounterIds) ? $this->CounterIds : null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets RelevantKeywords.
     *
     * @return RelevantKeywordsSetting|null
     */
    public function getRelevantKeywords()
    {
        return isset($this->RelevantKeywords) ? $this->RelevantKeywords : null;
    }

    /**
     * Sets RelevantKeywords.
     *
     * @param RelevantKeywordsSetting|null $value
     * @return $this
     */
    public function setRelevantKeywords(RelevantKeywordsSetting $value = null)
    {
        $this->RelevantKeywords = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @return string|null
     * @see AttributionModelEnum
     */
    public function getAttributionModel()
    {
        return isset($this->AttributionModel) ? $this->AttributionModel : null;
    }

    /**
     * Sets AttributionModel.
     *
     * @param string|null $value
     * @return $this
     * @see AttributionModelEnum
     */
    public function setAttributionModel($value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }


}

