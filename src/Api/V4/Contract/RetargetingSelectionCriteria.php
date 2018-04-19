<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingSelectionCriteria
{

    protected $RetargetingConditionIDS = null;

    protected $RetargetingIDS = null;

    protected $AdIDS = null;

    /**
     * Creates a new instance of RetargetingSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RetargetingConditionIDS.
     *
     * @return int[]|null
     */
    public function getRetargetingConditionIDS()
    {
        return $this->RetargetingConditionIDS;
    }

    /**
     * Sets RetargetingConditionIDS.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setRetargetingConditionIDS(array $value = null)
    {
        $this->RetargetingConditionIDS = $value;

        return $this;
    }

    /**
     * Gets RetargetingIDS.
     *
     * @return int[]|null
     */
    public function getRetargetingIDS()
    {
        return $this->RetargetingIDS;
    }

    /**
     * Sets RetargetingIDS.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setRetargetingIDS(array $value = null)
    {
        $this->RetargetingIDS = $value;

        return $this;
    }

    /**
     * Gets AdIDS.
     *
     * @return int[]|null
     */
    public function getAdIDS()
    {
        return $this->AdIDS;
    }

    /**
     * Sets AdIDS.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setAdIDS(array $value = null)
    {
        $this->AdIDS = $value;

        return $this;
    }


}

