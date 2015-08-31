<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingSelectionCriteria
{
    /**
     * @var int[]
     */
    protected $RetargetingConditionIDS;
    /**
     * @var int[]
     */
    protected $RetargetingIDS;
    /**
     * @var int[]
     */
    protected $AdIDS;

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
     * Gets the RetargetingConditionIDS.
     *
     * @return int[]
     */
    public function getRetargetingConditionIDS()
    {
        return $this->RetargetingConditionIDS;
    }

    /**
     * Sets the RetargetingConditionIDS.
     *
     * @param int[] $RetargetingConditionIDS
     *
     * @return RetargetingSelectionCriteria
     */
    public function setRetargetingConditionIDS(array $RetargetingConditionIDS)
    {
        $this->RetargetingConditionIDS = $RetargetingConditionIDS;

        return $this;
    }

    /**
     * Gets the RetargetingIDS.
     *
     * @return int[]
     */
    public function getRetargetingIDS()
    {
        return $this->RetargetingIDS;
    }

    /**
     * Sets the RetargetingIDS.
     *
     * @param int[] $RetargetingIDS
     *
     * @return RetargetingSelectionCriteria
     */
    public function setRetargetingIDS(array $RetargetingIDS)
    {
        $this->RetargetingIDS = $RetargetingIDS;

        return $this;
    }

    /**
     * Gets the AdIDS.
     *
     * @return int[]
     */
    public function getAdIDS()
    {
        return $this->AdIDS;
    }

    /**
     * Sets the AdIDS.
     *
     * @param int[] $AdIDS
     *
     * @return RetargetingSelectionCriteria
     */
    public function setAdIDS(array $AdIDS)
    {
        $this->AdIDS = $AdIDS;

        return $this;
    }
}