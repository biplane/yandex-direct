<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ModerateAdsResponse
{
//    Can be omitted.
//    protected $ModerateResults = null;

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
    public function getModerateResults(): ?array
    {
        return $this->ModerateResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setModerateResults(?array $value = null)
    {
        $this->ModerateResults = $value;

        return $this;
    }
}
