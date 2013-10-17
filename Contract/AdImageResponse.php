<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageResponse
{
    /**
     * @var AdImage[]
     */
    protected $AdImages;
    /**
     * @var AdImageUpload[]
     */
    protected $AdImageUploads;
    /**
     * @var AdImageActionResult[]
     */
    protected $ActionsResult;
    /**
     * @var AdImageLimit[]
     */
    protected $AdImageLimits;
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
     * Gets the AdImages.
     *
     * @return AdImage[]
     */
    public function getAdImages()
    {
        return $this->AdImages;
    }

    /**
     * Sets the AdImages.
     *
     * @param AdImage[] $AdImages
     *
     * @return AdImageResponse
     */
    public function setAdImages(array $AdImages)
    {
        $this->AdImages = $AdImages;

        return $this;
    }

    /**
     * Gets the AdImageUploads.
     *
     * @return AdImageUpload[]
     */
    public function getAdImageUploads()
    {
        return $this->AdImageUploads;
    }

    /**
     * Sets the AdImageUploads.
     *
     * @param AdImageUpload[] $AdImageUploads
     *
     * @return AdImageResponse
     */
    public function setAdImageUploads(array $AdImageUploads)
    {
        $this->AdImageUploads = $AdImageUploads;

        return $this;
    }

    /**
     * Gets the ActionsResult.
     *
     * @return AdImageActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param AdImageActionResult[] $ActionsResult
     *
     * @return AdImageResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

        return $this;
    }

    /**
     * Gets the AdImageLimits.
     *
     * @return AdImageLimit[]
     */
    public function getAdImageLimits()
    {
        return $this->AdImageLimits;
    }

    /**
     * Sets the AdImageLimits.
     *
     * @param AdImageLimit[] $AdImageLimits
     *
     * @return AdImageResponse
     */
    public function setAdImageLimits(array $AdImageLimits)
    {
        $this->AdImageLimits = $AdImageLimits;

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
     * @return AdImageResponse
     */
    public function setTotalObjectsCount($TotalObjectsCount)
    {
        $this->TotalObjectsCount = $TotalObjectsCount;

        return $this;
    }
}