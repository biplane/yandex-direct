<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdGroupUpdate
{
//    Can be omit.
//    protected $AdTitleSource = null;

//    Can be omit.
//    protected $AdBodySource = null;

    /**
     * Creates a new instance of SmartAdGroupUpdate.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdTitleSource.
     */
    public function getAdTitleSource(): ?string
    {
        return $this->AdTitleSource ?? null;
    }

    /**
     * Sets AdTitleSource.
     *
     * @return $this
     */
    public function setAdTitleSource(?string $value = null)
    {
        $this->AdTitleSource = $value;

        return $this;
    }

    /**
     * Gets AdBodySource.
     */
    public function getAdBodySource(): ?string
    {
        return $this->AdBodySource ?? null;
    }

    /**
     * Sets AdBodySource.
     *
     * @return $this
     */
    public function setAdBodySource(?string $value = null)
    {
        $this->AdBodySource = $value;

        return $this;
    }
}
