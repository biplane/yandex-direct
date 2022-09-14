<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageRequest
{
    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $AdImageRawData = null;

    protected $AdImageURLData = null;

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

    public function getSelectionCriteria(): ?AdImageSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?AdImageSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @return AdImageRaw[]|null
     */
    public function getAdImageRawData(): ?array
    {
        return $this->AdImageRawData;
    }

    /**
     * @param AdImageRaw[]|null $value
     *
     * @return $this
     */
    public function setAdImageRawData(?array $value = null)
    {
        $this->AdImageRawData = $value;

        return $this;
    }

    /**
     * @return AdImageURL[]|null
     */
    public function getAdImageURLData(): ?array
    {
        return $this->AdImageURLData;
    }

    /**
     * @param AdImageURL[]|null $value
     *
     * @return $this
     */
    public function setAdImageURLData(?array $value = null)
    {
        $this->AdImageURLData = $value;

        return $this;
    }
}
