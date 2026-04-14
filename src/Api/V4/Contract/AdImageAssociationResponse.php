<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAssociationResponse
{
//    Can be omitted.
//    protected $ActionsResult;

//    Can be omitted.
//    protected $AdImageAssociations;

    /** @var int|null */
    protected $TotalObjectsCount = null;

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
     * Get ActionsResult
     *
     * @return list<AdImageAssociationActionResult>|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult ?? null;
    }

    /**
     * Set ActionsResult
     *
     * @param list<AdImageAssociationActionResult>|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value)
    {
        $this->ActionsResult = $value;

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

    /**
     * Get TotalObjectsCount
     */
    public function getTotalObjectsCount(): ?int
    {
        return $this->TotalObjectsCount;
    }

    /**
     * Set TotalObjectsCount
     *
     * @return $this
     */
    public function setTotalObjectsCount(?int $value)
    {
        $this->TotalObjectsCount = $value;

        return $this;
    }
}
