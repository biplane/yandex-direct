<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdExtensionsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $AdExtensions = null;

    /**
     * @return AdExtensionGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
     * @param AdExtensionGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdExtensions(?array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
