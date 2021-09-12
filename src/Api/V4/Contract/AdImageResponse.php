<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageResponse
{
    protected $AdImages = null;

    protected $AdImageUploads = null;

    protected $ActionsResult = null;

    protected $AdImageLimits = null;

    protected $TotalObjectsCount = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdImage[]|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages;
    }

    /**
     * @param AdImage[]|null $value
     *
     * @return $this
     */
    public function setAdImages(?array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }

    /**
     * @return AdImageUpload[]|null
     */
    public function getAdImageUploads(): ?array
    {
        return $this->AdImageUploads;
    }

    /**
     * @param AdImageUpload[]|null $value
     *
     * @return $this
     */
    public function setAdImageUploads(?array $value = null)
    {
        $this->AdImageUploads = $value;

        return $this;
    }

    /**
     * @return AdImageActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * @param AdImageActionResult[]|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * @return AdImageLimit[]|null
     */
    public function getAdImageLimits(): ?array
    {
        return $this->AdImageLimits;
    }

    /**
     * @param AdImageLimit[]|null $value
     *
     * @return $this
     */
    public function setAdImageLimits(?array $value = null)
    {
        $this->AdImageLimits = $value;

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
