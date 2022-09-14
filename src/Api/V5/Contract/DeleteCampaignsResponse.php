<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeleteCampaignsResponse
{
//    Can be omitted.
//    protected $DeleteResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]|null
     */
    public function getDeleteResults(): ?array
    {
        return $this->DeleteResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setDeleteResults(?array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }
}
