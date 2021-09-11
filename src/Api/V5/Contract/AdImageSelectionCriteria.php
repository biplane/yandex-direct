<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageSelectionCriteria
{
//    Can be omit.
//    protected $AdImageHashes = null;

//    Can be omit.
//    protected $Associated = null;

    /**
     * Creates a new instance of AdImageSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets Associated.
     *
     * @see YesNoEnum
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * Sets Associated.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAssociated(?string $value = null)
    {
        $this->Associated = $value;

        return $this;
    }
}
