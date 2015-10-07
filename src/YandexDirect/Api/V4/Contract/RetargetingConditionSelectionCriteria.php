<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionSelectionCriteria
{

    protected $RetargetingConditionIDS = null;

    protected $Logins = null;

    /**
     * Creates a new instance of RetargetingConditionSelectionCriteria.
     *
     * @return RetargetingConditionSelectionCriteria
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
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }


}

