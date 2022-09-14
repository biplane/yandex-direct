<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MultiIdsActionResult extends ActionResultBase
{
//    Can be omitted.
//    protected $Ids = null;

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }
}
