<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingConditionSelectionCriteria
{
    protected $RetargetingConditionIDS = null;

    protected $Logins = null;

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
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }
}
