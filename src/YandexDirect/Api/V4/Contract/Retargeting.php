<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Retargeting
{

    protected $Fields = null;

    protected $RetargetingID = null;

    protected $AdGroupID = null;

    protected $AdID = null;

    protected $RetargetingConditionID = null;

    protected $ContextPrice = null;

    protected $Currency = null;

    protected $AutoBudgetPriority = null;

    protected $StatusPaused = null;

    /**
     * Creates a new instance of Retargeting.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Fields.
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * Sets Fields.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setFields(array $value = null)
    {
        $this->Fields = $value;

        return $this;
    }

    /**
     * Gets RetargetingID.
     *
     * @return int|null
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets RetargetingID.
     *
     * @param int|null $value
     * @return self
     */
    public function setRetargetingID($value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    /**
     * Gets AdGroupID.
     *
     * @return int|null
     */
    public function getAdGroupID()
    {
        return $this->AdGroupID;
    }

    /**
     * Sets AdGroupID.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupID($value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Gets AdID.
     *
     * @return int|null
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdID($value = null)
    {
        $this->AdID = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionID.
     *
     * @return int|null
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets RetargetingConditionID.
     *
     * @param int|null $value
     * @return self
     */
    public function setRetargetingConditionID($value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }

    /**
     * Gets ContextPrice.
     *
     * @return float|null
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets ContextPrice.
     *
     * @param float|null $value
     * @return self
     */
    public function setContextPrice($value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return self
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets AutoBudgetPriority.
     *
     * @return string|null
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets AutoBudgetPriority.
     *
     * @param string|null $value
     * @return self
     */
    public function setAutoBudgetPriority($value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Gets StatusPaused.
     *
     * @return string|null
     */
    public function getStatusPaused()
    {
        return $this->StatusPaused;
    }

    /**
     * Sets StatusPaused.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusPaused($value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }


}

