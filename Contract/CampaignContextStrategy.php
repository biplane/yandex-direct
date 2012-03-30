<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class CampaignContextStrategy
{
    /**
     * @var string
     */
    protected $StrategyName;
    /**
     * @var string
     */
    protected $ContextLimit;
    /**
     * @var int
     */
    protected $ContextLimitSum;
    /**
     * @var int
     */
    protected $ContextPricePercent;

    /**
     * @return string
     */
    public function getStrategyName()
    {
        return $this->StrategyName;
    }

    /**
     * @param string $StrategyName
     * @return CampaignContextStrategy
     */
    public function setStrategyName($StrategyName)
    {
        $this->StrategyName = $StrategyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getContextLimit()
    {
        return $this->ContextLimit;
    }

    /**
     * @param string $ContextLimit
     * @return CampaignContextStrategy
     */
    public function setContextLimit($ContextLimit)
    {
        $this->ContextLimit = $ContextLimit;

        return $this;
    }

    /**
     * @return int
     */
    public function getContextLimitSum()
    {
        return $this->ContextLimitSum;
    }

    /**
     * @param int $ContextLimitSum
     * @return CampaignContextStrategy
     */
    public function setContextLimitSum($ContextLimitSum)
    {
        $this->ContextLimitSum = $ContextLimitSum;

        return $this;
    }

    /**
     * @return int
     */
    public function getContextPricePercent()
    {
        return $this->ContextPricePercent;
    }

    /**
     * @param int $ContextPricePercent
     * @return CampaignContextStrategy
     */
    public function setContextPricePercent($ContextPricePercent)
    {
        $this->ContextPricePercent = $ContextPricePercent;

        return $this;
    }
}