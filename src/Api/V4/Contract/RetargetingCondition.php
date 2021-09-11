<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingCondition
{
    protected $IsAccessible = null;

    protected $Fields = null;

    protected $RetargetingConditionName = null;

    protected $RetargetingConditionDescription = null;

    protected $Login = null;

    protected $RetargetingConditionID = null;

    protected $RetargetingCondition = null;

    /**
     * Creates a new instance of RetargetingCondition.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets IsAccessible.
     */
    public function getIsAccessible(): ?string
    {
        return $this->IsAccessible;
    }

    /**
     * Sets IsAccessible.
     *
     * @return $this
     */
    public function setIsAccessible(?string $value = null)
    {
        $this->IsAccessible = $value;

        return $this;
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
     * Gets RetargetingConditionName.
     */
    public function getRetargetingConditionName(): ?string
    {
        return $this->RetargetingConditionName;
    }

    /**
     * Sets RetargetingConditionName.
     *
     * @return $this
     */
    public function setRetargetingConditionName(?string $value = null)
    {
        $this->RetargetingConditionName = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionDescription.
     */
    public function getRetargetingConditionDescription(): ?string
    {
        return $this->RetargetingConditionDescription;
    }

    /**
     * Sets RetargetingConditionDescription.
     *
     * @return $this
     */
    public function setRetargetingConditionDescription(?string $value = null)
    {
        $this->RetargetingConditionDescription = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

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
     * Gets RetargetingCondition.
     *
     * @return RetargetingConditionItem[]|null
     */
    public function getRetargetingCondition(): ?array
    {
        return $this->RetargetingCondition;
    }

    /**
     * Sets RetargetingCondition.
     *
     * @param RetargetingConditionItem[]|null $value
     *
     * @return $this
     */
    public function setRetargetingCondition(?array $value = null)
    {
        $this->RetargetingCondition = $value;

        return $this;
    }
}
