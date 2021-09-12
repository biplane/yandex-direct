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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    public function getSelectionCriteria(): ?AdImageAssociationSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?AdImageAssociationSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @return AdImageAssociation[]|null
     */
    public function getAdImageAssociations(): ?array
    {
        return $this->AdImageAssociations;
    }

    /**
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
