<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAssociationRequest
{
    /** @var string */
    protected $Action;

    /** @var AdImageAssociationSelectionCriteria|null */
    protected $SelectionCriteria = null;

//    Can be omitted.
//    protected $AdImageAssociations;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Action
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Set Action
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): ?AdImageAssociationSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?AdImageAssociationSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get AdImageAssociations
     *
     * @return list<AdImageAssociation>|null
     */
    public function getAdImageAssociations(): ?array
    {
        return $this->AdImageAssociations ?? null;
    }

    /**
     * Set AdImageAssociations
     *
     * @param list<AdImageAssociation>|null $value
     *
     * @return $this
     */
    public function setAdImageAssociations(?array $value)
    {
        $this->AdImageAssociations = $value;

        return $this;
    }
}
