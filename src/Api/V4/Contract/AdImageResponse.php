<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageResponse
{
//    Can be omitted.
//    protected $AdImages;

//    Can be omitted.
//    protected $AdImageUploads;

//    Can be omitted.
//    protected $ActionsResult;

//    Can be omitted.
//    protected $AdImageLimits;

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
     * Get AdImages
     *
     * @return list<AdImage>|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages ?? null;
    }

    /**
     * Set AdImages
     *
     * @param list<AdImage>|null $value
     *
     * @return $this
     */
    public function setAdImages(?array $value)
    {
        $this->AdImages = $value;

        return $this;
    }

    /**
     * Get AdImageUploads
     *
     * @return list<AdImageUpload>|null
     */
    public function getAdImageUploads(): ?array
    {
        return $this->AdImageUploads ?? null;
    }

    /**
     * Set AdImageUploads
     *
     * @param list<AdImageUpload>|null $value
     *
     * @return $this
     */
    public function setAdImageUploads(?array $value)
    {
        $this->AdImageUploads = $value;

        return $this;
    }

    /**
     * Get ActionsResult
     *
     * @return list<AdImageActionResult>|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult ?? null;
    }

    /**
     * Set ActionsResult
     *
     * @param list<AdImageActionResult>|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Get AdImageLimits
     *
     * @return list<AdImageLimit>|null
     */
    public function getAdImageLimits(): ?array
    {
        return $this->AdImageLimits ?? null;
    }

    /**
     * Set AdImageLimits
     *
     * @param list<AdImageLimit>|null $value
     *
     * @return $this
     */
    public function setAdImageLimits(?array $value)
    {
        $this->AdImageLimits = $value;

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
