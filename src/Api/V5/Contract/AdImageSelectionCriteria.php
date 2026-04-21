<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageSelectionCriteria
{
//    Can be omitted.
//    protected $AdImageHashes;

//    Can be omitted.
//    protected $Associated;

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
     * Get AdImageHashes
     *
     * @return list<string>
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes ?? [];
    }

    /**
     * Set AdImageHashes
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Get Associated
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * Set Associated
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAssociated(?string $value)
    {
        $this->Associated = $value;

        return $this;
    }
}
