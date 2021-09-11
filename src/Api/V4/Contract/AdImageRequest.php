<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageRequest
{
    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $AdImageRawData = null;

    protected $AdImageURLData = null;

    /**
     * Creates a new instance of AdImageRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Action.
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?AdImageSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?AdImageSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets AdImageRawData.
     *
     * @return AdImageRaw[]|null
     */
    public function getAdImageRawData(): ?array
    {
        return $this->AdImageRawData;
    }

    /**
     * Sets AdImageRawData.
     *
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
     * Gets AdImageURLData.
     *
     * @return AdImageURL[]|null
     */
    public function getAdImageURLData(): ?array
    {
        return $this->AdImageURLData;
    }

    /**
     * Sets AdImageURLData.
     *
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
