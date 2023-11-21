<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetStrategiesRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omitted.
//    protected $StrategyMaximumClicksFieldNames = null;

//    Can be omitted.
//    protected $StrategyMaximumConversionRateFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpcFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpaFieldNames = null;

//    Can be omitted.
//    protected $StrategyPayForConversionFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpaPerCampaignFieldNames = null;

//    Can be omitted.
//    protected $StrategyPayForConversionPerCampaignFieldNames = null;

//    Can be omitted.
//    protected $StrategyPayForConversionPerFilterFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpaPerFilterFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpcPerCampaignFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCpcPerFilterFieldNames = null;

//    Can be omitted.
//    protected $StrategyAverageCrrFieldNames = null;

//    Can be omitted.
//    protected $StrategyPayForConversionCrrFieldNames = null;

    public function getSelectionCriteria(): StrategiesSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(StrategiesSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see StrategyFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see StrategyFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyMaximumClicksFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyMaximumClicksFieldNames(): ?array
    {
        return $this->StrategyMaximumClicksFieldNames ?? null;
    }

    /**
     * @see StrategyMaximumClicksFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyMaximumClicksFieldNames(?array $value = null)
    {
        $this->StrategyMaximumClicksFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyMaximumConversionRateFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyMaximumConversionRateFieldNames(): ?array
    {
        return $this->StrategyMaximumConversionRateFieldNames ?? null;
    }

    /**
     * @see StrategyMaximumConversionRateFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyMaximumConversionRateFieldNames(?array $value = null)
    {
        $this->StrategyMaximumConversionRateFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpcFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpcFieldNames(): ?array
    {
        return $this->StrategyAverageCpcFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpcFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpcFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpaFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpaFieldNames(): ?array
    {
        return $this->StrategyAverageCpaFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpaFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpaFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyPayForConversionFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyPayForConversionFieldNames(): ?array
    {
        return $this->StrategyPayForConversionFieldNames ?? null;
    }

    /**
     * @see StrategyPayForConversionFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionFieldNames(?array $value = null)
    {
        $this->StrategyPayForConversionFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpaPerCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpaPerCampaignFieldNames(): ?array
    {
        return $this->StrategyAverageCpaPerCampaignFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpaPerCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaPerCampaignFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpaPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyPayForConversionPerCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyPayForConversionPerCampaignFieldNames(): ?array
    {
        return $this->StrategyPayForConversionPerCampaignFieldNames ?? null;
    }

    /**
     * @see StrategyPayForConversionPerCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionPerCampaignFieldNames(?array $value = null)
    {
        $this->StrategyPayForConversionPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyPayForConversionPerFilterFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyPayForConversionPerFilterFieldNames(): ?array
    {
        return $this->StrategyPayForConversionPerFilterFieldNames ?? null;
    }

    /**
     * @see StrategyPayForConversionPerFilterFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionPerFilterFieldNames(?array $value = null)
    {
        $this->StrategyPayForConversionPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpaPerFilterFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpaPerFilterFieldNames(): ?array
    {
        return $this->StrategyAverageCpaPerFilterFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpaPerFilterFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpaPerFilterFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpaPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpcPerCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpcPerCampaignFieldNames(): ?array
    {
        return $this->StrategyAverageCpcPerCampaignFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpcPerCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcPerCampaignFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpcPerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCpcPerFilterFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCpcPerFilterFieldNames(): ?array
    {
        return $this->StrategyAverageCpcPerFilterFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCpcPerFilterFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCpcPerFilterFieldNames(?array $value = null)
    {
        $this->StrategyAverageCpcPerFilterFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyAverageCrrFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyAverageCrrFieldNames(): ?array
    {
        return $this->StrategyAverageCrrFieldNames ?? null;
    }

    /**
     * @see StrategyAverageCrrFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyAverageCrrFieldNames(?array $value = null)
    {
        $this->StrategyAverageCrrFieldNames = $value;

        return $this;
    }

    /**
     * @see StrategyPayForConversionCrrFieldEnum
     *
     * @return string[]|null
     */
    public function getStrategyPayForConversionCrrFieldNames(): ?array
    {
        return $this->StrategyPayForConversionCrrFieldNames ?? null;
    }

    /**
     * @see StrategyPayForConversionCrrFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStrategyPayForConversionCrrFieldNames(?array $value = null)
    {
        $this->StrategyPayForConversionCrrFieldNames = $value;

        return $this;
    }
}
