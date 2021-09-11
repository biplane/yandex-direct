<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageActionResult extends ActionResultBase
{
//    Can be omit.
//    protected $AdImageHash = null;

    /**
     * Creates a new instance of AdImageActionResult.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
