<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociationRequest
{

    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $AdImageAssociations = null;

    /**
     * Creates a new instance of AdImageAssociationRequest.
     *
     * @return AdImageAssociationRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return $this
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AdImageAssociationSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdImageAssociationSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(AdImageAssociationSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

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
     * @param AdImageAssociation[]|null $value
     * @return $this
     */
    public function setAdImageAssociations(array $value = null)
    {
        $this->AdImageAssociations = $value;

        return $this;
    }


}

