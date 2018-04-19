<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionsSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $Types = null;

//    Can be omit.
//    protected $States = null;

//    Can be omit.
//    protected $Statuses = null;

//    Can be omit.
//    protected $ModifiedSince = null;

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
        return isset($this->Ids) ? $this->Ids : null;
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
        return isset($this->Types) ? $this->Types : null;
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
        return isset($this->States) ? $this->States : null;
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
        return isset($this->Statuses) ? $this->Statuses : null;
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
        return isset($this->ModifiedSince) ? $this->ModifiedSince : null;
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

