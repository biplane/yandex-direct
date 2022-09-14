<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetTurboPagesResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $TurboPages = null;

    /**
     * @return TurboPageGetItem[]|null
     */
    public function getTurboPages(): ?array
    {
        return $this->TurboPages ?? null;
    }

    /**
     * @param TurboPageGetItem[]|null $value
     *
     * @return $this
     */
    public function setTurboPages(?array $value = null)
    {
        $this->TurboPages = $value;

        return $this;
    }
}
