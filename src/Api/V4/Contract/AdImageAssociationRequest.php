<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Action.
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?AdImageAssociationSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?AdImageAssociationSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

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
}
