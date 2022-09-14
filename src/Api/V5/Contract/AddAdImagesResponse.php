<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddAdImagesResponse
{
//    Can be omitted.
//    protected $AddResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdImageActionResult[]|null
     */
    public function getAddResults(): ?array
    {
        return $this->AddResults ?? null;
    }

    /**
     * @param AdImageActionResult[]|null $value
     *
     * @return $this
     */
    public function setAddResults(?array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }
}
