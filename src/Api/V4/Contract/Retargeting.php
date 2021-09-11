<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Fields.
     *
     * @return string[]|null
     */
    public function getFields(): ?array
    {
        return $this->Fields;
    }

    /**
     * Sets Fields.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setFields(?array $value = null)
    {
        $this->Fields = $value;

        return $this;
    }

    /**
     * Gets RetargetingID.
     */
    public function getRetargetingID(): ?int
    {
        return $this->RetargetingID;
    }

    /**
     * Sets RetargetingID.
     *
     * @return $this
     */
    public function setRetargetingID(?int $value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    /**
     * Gets AdGroupID.
     */
    public function getAdGroupID(): ?int
    {
        return $this->AdGroupID;
    }

    /**
     * Sets AdGroupID.
     *
     * @return $this
     */
    public function setAdGroupID(?int $value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Gets AdID.
     */
    public function getAdID(): ?int
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @return $this
     */
    public function setAdID(?int $value = null)
    {
        $this->AdID = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionID.
     */
    public function getRetargetingConditionID(): ?int
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets RetargetingConditionID.
     *
     * @return $this
     */
    public function setRetargetingConditionID(?int $value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }

    /**
     * Gets ContextPrice.
     */
    public function getContextPrice(): ?float
    {
        return $this->ContextPrice;
    }

    /**
     * Sets ContextPrice.
     *
     * @return $this
     */
    public function setContextPrice(?float $value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets AutoBudgetPriority.
     */
    public function getAutoBudgetPriority(): ?string
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets AutoBudgetPriority.
     *
     * @return $this
     */
    public function setAutoBudgetPriority(?string $value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Gets StatusPaused.
     */
    public function getStatusPaused(): ?string
    {
        return $this->StatusPaused;
    }

    /**
     * Sets StatusPaused.
     *
     * @return $this
     */
    public function setStatusPaused(?string $value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }
}
