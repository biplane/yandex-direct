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
     * @return AdExtensionsSelectionCriteria
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
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return AdExtensionTypeEnum[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param AdExtensionTypeEnum[]|null $value
     * @return $this
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return AdExtensionStateSelectionEnum[]|null
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param AdExtensionStateSelectionEnum[]|null $value
     * @return $this
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return ExtensionStatusSelectionEnum[]|null
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param ExtensionStatusSelectionEnum[]|null $value
     * @return $this
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
     * @return $this
     */
    public function setModifiedSince($value = null)
    {
        $this->ModifiedSince = $value;

        return $this;
    }


}

