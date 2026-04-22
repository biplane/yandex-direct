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
    /** @var string */
    protected $Action;

    /** @var AdImageSelectionCriteria|null */
    protected $SelectionCriteria = null;

//    Can be omitted.
//    protected $AdImageRawData;

//    Can be omitted.
//    protected $AdImageURLData;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
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
    public function getSelectionCriteria(): ?AdImageSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?AdImageSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get AdImageRawData
     *
     * @return list<AdImageRaw>|null
     */
    public function getAdImageRawData(): ?array
    {
        return $this->AdImageRawData ?? null;
    }

    /**
     * Set AdImageRawData
     *
     * @param list<AdImageRaw>|null $value
     *
     * @return $this
     */
    public function setAdImageRawData(?array $value)
    {
        $this->AdImageRawData = $value;

        return $this;
    }

    /**
     * Get AdImageURLData
     *
     * @return list<AdImageURL>|null
     */
    public function getAdImageURLData(): ?array
    {
        return $this->AdImageURLData ?? null;
    }

    /**
     * Set AdImageURLData
     *
     * @param list<AdImageURL>|null $value
     *
     * @return $this
     */
    public function setAdImageURLData(?array $value)
    {
        $this->AdImageURLData = $value;

        return $this;
    }
}
