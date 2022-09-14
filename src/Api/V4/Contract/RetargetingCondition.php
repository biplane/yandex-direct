<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getIsAccessible(): ?string
    {
        return $this->IsAccessible;
    }

    /**
     * @return $this
     */
    public function setIsAccessible(?string $value = null)
    {
        $this->IsAccessible = $value;

        return $this;
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

    public function getRetargetingConditionName(): ?string
    {
        return $this->RetargetingConditionName;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionName(?string $value = null)
    {
        $this->RetargetingConditionName = $value;

        return $this;
    }

    public function getRetargetingConditionDescription(): ?string
    {
        return $this->RetargetingConditionDescription;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionDescription(?string $value = null)
    {
        $this->RetargetingConditionDescription = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

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

    /**
     * @return RetargetingConditionItem[]|null
     */
    public function getRetargetingCondition(): ?array
    {
        return $this->RetargetingCondition;
    }

    /**
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
