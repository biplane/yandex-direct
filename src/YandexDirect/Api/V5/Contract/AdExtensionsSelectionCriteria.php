<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionsSelectionCriteria
{

    protected $Ids = null;

    protected $Types = null;

    protected $States = null;

    protected $Statuses = null;

    protected $ModifiedSince = null;

    /**
     * Creates a new instance of AdExtensionsSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return string[]|null
     * @see AdExtensionTypeEnum
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return self
     * @see AdExtensionTypeEnum
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return string[]|null
     * @see AdExtensionStateSelectionEnum
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param string[]|null $value
     * @return self
     * @see AdExtensionStateSelectionEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return string[]|null
     * @see ExtensionStatusSelectionEnum
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param string[]|null $value
     * @return self
     * @see ExtensionStatusSelectionEnum
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets ModifiedSince.
     *
     * @return string|null
     */
    public function getModifiedSince()
    {
        return $this->ModifiedSince;
    }

    /**
     * Sets ModifiedSince.
     *
     * @param string|null $value
     * @return self
     */
    public function setModifiedSince($value = null)
    {
        $this->ModifiedSince = $value;

        return $this;
    }


}

