<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdImagesResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $AdImages = null;

    /**
     * @return AdImageGetItem[]|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages ?? null;
    }

    /**
     * @param AdImageGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdImages(?array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }
}
