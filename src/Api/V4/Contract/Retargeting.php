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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getFields(): ?array
    {
        return $this->Fields;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setFields(?array $value = null)
    {
        $this->Fields = $value;

        return $this;
    }

    public function getRetargetingID(): ?int
    {
        return $this->RetargetingID;
    }

    /**
     * @return $this
     */
    public function setRetargetingID(?int $value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    public function getAdGroupID(): ?int
    {
        return $this->AdGroupID;
    }

    /**
     * @return $this
     */
    public function setAdGroupID(?int $value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    public function getAdID(): ?int
    {
        return $this->AdID;
    }

    /**
     * @return $this
     */
    public function setAdID(?int $value = null)
    {
        $this->AdID = $value;

        return $this;
    }

    public function getRetargetingConditionID(): ?int
    {
        return $this->RetargetingConditionID;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionID(?int $value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }

    public function getContextPrice(): ?float
    {
        return $this->ContextPrice;
    }

    /**
     * @return $this
     */
    public function setContextPrice(?float $value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getAutoBudgetPriority(): ?string
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * @return $this
     */
    public function setAutoBudgetPriority(?string $value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    public function getStatusPaused(): ?string
    {
        return $this->StatusPaused;
    }

    /**
     * @return $this
     */
    public function setStatusPaused(?string $value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }
}
