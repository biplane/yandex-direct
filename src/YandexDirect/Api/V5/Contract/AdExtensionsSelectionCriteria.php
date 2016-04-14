<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionsSelectionCriteria
{

    protected $Ids = null;

    protected $Types = null;

    protected $Statuses = null;

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


}

