<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignBase
{

    protected $CounterIds = null;

    protected $RelevantKeywords = null;

    /**
     * Creates a new instance of TextCampaignBase.
     *
     * @return TextCampaignBase
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return struct[]|null
     */
    public function getCounterIds()
    {
        return $this->CounterIds;
    }

    /**
     * Sets CounterIds.
     *
     * @param struct[]|null $value
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
        return $this->RelevantKeywords;
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


}

