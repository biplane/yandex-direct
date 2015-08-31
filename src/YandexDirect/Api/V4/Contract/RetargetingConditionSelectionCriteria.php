<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionSelectionCriteria
{
    /**
     * @var int[]
     */
    protected $RetargetingConditionIDS;
    /**
     * @var string[]
     */
    protected $Logins;

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
     * @return RetargetingConditionSelectionCriteria
     */
    public function setRetargetingConditionIDS(array $RetargetingConditionIDS)
    {
        $this->RetargetingConditionIDS = $RetargetingConditionIDS;

        return $this;
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return RetargetingConditionSelectionCriteria
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }
}