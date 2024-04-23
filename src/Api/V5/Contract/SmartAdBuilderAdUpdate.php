<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartAdBuilderAdUpdate
{
//    Can be omitted.
//    protected $LogoExtensionHash = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogoExtensionHash(): ?string
    {
        return $this->LogoExtensionHash ?? null;
    }

    /**
     * @return $this
     */
    public function setLogoExtensionHash(?string $value = null)
    {
        $this->LogoExtensionHash = $value;

        return $this;
    }

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
