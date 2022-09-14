<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtension extends AdExtensionBase
{
//    Can be omitted.
//    protected $AdExtensionId = null;

    public function getAdExtensionId(): ?int
    {
        return $this->AdExtensionId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdExtensionId(?int $value = null)
    {
        $this->AdExtensionId = $value;

        return $this;
    }
}
