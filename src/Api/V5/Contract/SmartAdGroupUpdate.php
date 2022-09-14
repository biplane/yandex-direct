<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartAdGroupUpdate
{
//    Can be omitted.
//    protected $AdTitleSource = null;

//    Can be omitted.
//    protected $AdBodySource = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdTitleSource(): ?string
    {
        return $this->AdTitleSource ?? null;
    }

    /**
     * @return $this
     */
    public function setAdTitleSource(?string $value = null)
    {
        $this->AdTitleSource = $value;

        return $this;
    }

    public function getAdBodySource(): ?string
    {
        return $this->AdBodySource ?? null;
    }

    /**
     * @return $this
     */
    public function setAdBodySource(?string $value = null)
    {
        $this->AdBodySource = $value;

        return $this;
    }
}
