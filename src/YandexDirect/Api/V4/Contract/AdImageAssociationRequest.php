<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageAssociationRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var AdImageAssociationSelectionCriteria
     */
    protected $SelectionCriteria;
    /**
     * @var AdImageAssociation[]
     */
    protected $AdImageAssociations;

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
     * Gets the Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets the Action.
     *
     * @param string $Action
     *
     * @return AdImageAssociationRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the SelectionCriteria.
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets the SelectionCriteria.
     *
     * @param AdImageAssociationSelectionCriteria $SelectionCriteria
     *
     * @return AdImageAssociationRequest
     */
    public function setSelectionCriteria(AdImageAssociationSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;

        return $this;
    }

    /**
     * Gets the AdImageAssociations.
     *
     * @return AdImageAssociation[]
     */
    public function getAdImageAssociations()
    {
        return $this->AdImageAssociations;
    }

    /**
     * Sets the AdImageAssociations.
     *
     * @param AdImageAssociation[] $AdImageAssociations
     *
     * @return AdImageAssociationRequest
     */
    public function setAdImageAssociations(array $AdImageAssociations)
    {
        $this->AdImageAssociations = $AdImageAssociations;

        return $this;
    }
}