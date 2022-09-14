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
    protected $ActionsResult = null;

    protected $AdImageAssociations = null;

    protected $TotalObjectsCount = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdImageAssociationActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
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

    public function getTotalObjectsCount(): ?int
    {
        return $this->TotalObjectsCount;
    }

    /**
     * @return $this
     */
    public function setTotalObjectsCount(?int $value = null)
    {
        $this->TotalObjectsCount = $value;

        return $this;
    }
}
