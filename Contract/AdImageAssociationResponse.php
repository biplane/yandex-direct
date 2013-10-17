<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageAssociationResponse
{
    /**
     * @var AdImageAssociationActionResult[]
     */
    protected $ActionsResult;
    /**
     * @var AdImageAssociation[]
     */
    protected $AdImageAssociations;
    /**
     * @var int
     */
    protected $TotalObjectsCount;

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
     * Gets the ActionsResult.
     *
     * @return AdImageAssociationActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param AdImageAssociationActionResult[] $ActionsResult
     *
     * @return AdImageAssociationResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

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
     * @return AdImageAssociationResponse
     */
    public function setAdImageAssociations(array $AdImageAssociations)
    {
        $this->AdImageAssociations = $AdImageAssociations;

        return $this;
    }

    /**
     * Gets the TotalObjectsCount.
     *
     * @return int
     */
    public function getTotalObjectsCount()
    {
        return $this->TotalObjectsCount;
    }

    /**
     * Sets the TotalObjectsCount.
     *
     * @param int $TotalObjectsCount
     *
     * @return AdImageAssociationResponse
     */
    public function setTotalObjectsCount($TotalObjectsCount)
    {
        $this->TotalObjectsCount = $TotalObjectsCount;

        return $this;
    }
}