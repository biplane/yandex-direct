<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociationResponse
{

    protected $ActionsResult = null;

    protected $AdImageAssociations = null;

    protected $TotalObjectsCount = null;

    /**
     * Creates a new instance of AdImageAssociationResponse.
     *
     * @return AdImageAssociationResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return AdImageAssociationActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param array|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets AdImageAssociations.
     *
     * @return AdImageAssociation[]|null
     */
    public function getAdImageAssociations()
    {
        return $this->AdImageAssociations;
    }

    /**
     * Sets AdImageAssociations.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAdImageAssociations(array $value = null)
    {
        $this->AdImageAssociations = $value;

        return $this;
    }

    /**
     * Gets TotalObjectsCount.
     *
     * @return int|null
     */
    public function getTotalObjectsCount()
    {
        return $this->TotalObjectsCount;
    }

    /**
     * Sets TotalObjectsCount.
     *
     * @param int|null $value
     * @return $this
     */
    public function setTotalObjectsCount($value = null)
    {
        $this->TotalObjectsCount = $value;

        return $this;
    }


}

