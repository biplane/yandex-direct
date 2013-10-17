<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Retargeting
{
    /**
     * @var string[]
     */
    protected $Fields;
    /**
     * @var int
     */
    protected $RetargetingID;
    /**
     * @var int
     */
    protected $AdID;
    /**
     * @var int
     */
    protected $RetargetingConditionID;
    /**
     * @var float
     */
    protected $ContextPrice;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var string
     */
    protected $AutoBudgetPriority;
    /**
     * @var string
     */
    protected $StatusPaused;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Fields.
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * Sets the Fields.
     *
     * @param string[] $Fields
     *
     * @return Retargeting
     */
    public function setFields(array $Fields)
    {
        $this->Fields = $Fields;

        return $this;
    }

    /**
     * Gets the RetargetingID.
     *
     * @return int
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets the RetargetingID.
     *
     * @param int $RetargetingID
     *
     * @return Retargeting
     */
    public function setRetargetingID($RetargetingID)
    {
        $this->RetargetingID = $RetargetingID;

        return $this;
    }

    /**
     * Gets the AdID.
     *
     * @return int
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets the AdID.
     *
     * @param int $AdID
     *
     * @return Retargeting
     */
    public function setAdID($AdID)
    {
        $this->AdID = $AdID;

        return $this;
    }

    /**
     * Gets the RetargetingConditionID.
     *
     * @return int
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets the RetargetingConditionID.
     *
     * @param int $RetargetingConditionID
     *
     * @return Retargeting
     */
    public function setRetargetingConditionID($RetargetingConditionID)
    {
        $this->RetargetingConditionID = $RetargetingConditionID;

        return $this;
    }

    /**
     * Gets the ContextPrice.
     *
     * @return float
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets the ContextPrice.
     *
     * @param float $ContextPrice
     *
     * @return Retargeting
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return Retargeting
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the AutoBudgetPriority.
     *
     * @return string
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets the AutoBudgetPriority.
     *
     * @param string $AutoBudgetPriority
     *
     * @return Retargeting
     */
    public function setAutoBudgetPriority($AutoBudgetPriority)
    {
        $this->AutoBudgetPriority = $AutoBudgetPriority;

        return $this;
    }

    /**
     * Gets the StatusPaused.
     *
     * @return string
     */
    public function getStatusPaused()
    {
        return $this->StatusPaused;
    }

    /**
     * Sets the StatusPaused.
     *
     * @param string $StatusPaused
     *
     * @return Retargeting
     */
    public function setStatusPaused($StatusPaused)
    {
        $this->StatusPaused = $StatusPaused;

        return $this;
    }
}