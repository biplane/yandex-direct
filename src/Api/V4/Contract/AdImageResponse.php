<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImages.
     *
     * @return AdImage[]|null
     */
    public function getAdImages()
    {
        return $this->AdImages;
    }

    /**
     * Sets AdImages.
     *
     * @param AdImage[]|null $value
     * @return $this
     */
    public function setAdImages(array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }

    /**
     * Gets AdImageUploads.
     *
     * @return AdImageUpload[]|null
     */
    public function getAdImageUploads()
    {
        return $this->AdImageUploads;
    }

    /**
     * Sets AdImageUploads.
     *
     * @param AdImageUpload[]|null $value
     * @return $this
     */
    public function setAdImageUploads(array $value = null)
    {
        $this->AdImageUploads = $value;

        return $this;
    }

    /**
     * Gets ActionsResult.
     *
     * @return AdImageActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param AdImageActionResult[]|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets AdImageLimits.
     *
     * @return AdImageLimit[]|null
     */
    public function getAdImageLimits()
    {
        return $this->AdImageLimits;
    }

    /**
     * Sets AdImageLimits.
     *
     * @param AdImageLimit[]|null $value
     * @return $this
     */
    public function setAdImageLimits(array $value = null)
    {
        $this->AdImageLimits = $value;

        return $this;
    }

    /**
     * Gets TotalObjectsCount.
     *
     * @return int|null
     */
    public function getTotalObjectsCount()
    {
        return $this->TotalObjectsCount;
    }

    /**
     * Sets TotalObjectsCount.
     *
     * @param int|null $value
     * @return $this
     */
    public function setTotalObjectsCount($value = null)
    {
        $this->TotalObjectsCount = $value;

        return $this;
    }


}

