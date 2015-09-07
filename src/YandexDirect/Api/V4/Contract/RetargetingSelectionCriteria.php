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
     * @return RetargetingSelectionCriteria
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
     * @param array|null $value
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
     * @param array|null $value
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
     * @param array|null $value
     * @return $this
     */
    public function setAdIDS(array $value = null)
    {
        $this->AdIDS = $value;

        return $this;
    }


}

