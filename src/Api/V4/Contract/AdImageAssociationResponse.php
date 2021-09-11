<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return AdImageAssociationActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param AdImageAssociationActionResult[]|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets AdImageAssociations.
     *
     * @return AdImageAssociation[]|null
     */
    public function getAdImageAssociations(): ?array
    {
        return $this->AdImageAssociations;
    }

    /**
     * Sets AdImageAssociations.
     *
     * @param AdImageAssociation[]|null $value
     *
     * @return $this
     */
    public function setAdImageAssociations(?array $value = null)
    {
        $this->AdImageAssociations = $value;

        return $this;
    }

    /**
     * Gets TotalObjectsCount.
     */
    public function getTotalObjectsCount(): ?int
    {
        return $this->TotalObjectsCount;
    }

    /**
     * Sets TotalObjectsCount.
     *
     * @return $this
     */
    public function setTotalObjectsCount(?int $value = null)
    {
        $this->TotalObjectsCount = $value;

        return $this;
    }
}
