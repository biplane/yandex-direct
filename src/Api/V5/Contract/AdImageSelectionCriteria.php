<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageSelectionCriteria
{
//    Can be omitted.
//    protected $AdImageHashes = null;

//    Can be omitted.
//    protected $Associated = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
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
