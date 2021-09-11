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
     * Creates a new instance of AdImageResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImages.
     *
     * @return AdImage[]|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages;
    }

    /**
     * Sets AdImages.
     *
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
     * Gets AdImageUploads.
     *
     * @return AdImageUpload[]|null
     */
    public function getAdImageUploads(): ?array
    {
        return $this->AdImageUploads;
    }

    /**
     * Sets AdImageUploads.
     *
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
     * Gets ActionsResult.
     *
     * @return AdImageActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
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
     * Gets AdImageLimits.
     *
     * @return AdImageLimit[]|null
     */
    public function getAdImageLimits(): ?array
    {
        return $this->AdImageLimits;
    }

    /**
     * Sets AdImageLimits.
     *
     * @param AdImageLimit[]|null $value
     *
     * @return $this
     */
    public function setAdImageLimits(?array $value = null)
    {
        $this->AdImageLimits = $value;

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
