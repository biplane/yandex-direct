<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingSelectionCriteria
{
    protected $RetargetingConditionIDS = null;

    protected $RetargetingIDS = null;

    protected $AdIDS = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getRetargetingConditionIDS(): ?array
    {
        return $this->RetargetingConditionIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setRetargetingConditionIDS(?array $value = null)
    {
        $this->RetargetingConditionIDS = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getRetargetingIDS(): ?array
    {
        return $this->RetargetingIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setRetargetingIDS(?array $value = null)
    {
        $this->RetargetingIDS = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdIDS(): ?array
    {
        return $this->AdIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdIDS(?array $value = null)
    {
        $this->AdIDS = $value;

        return $this;
    }
}
