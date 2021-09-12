<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ArchiveCampaignsResponse
{
//    Can be omitted.
//    protected $ArchiveResults = null;

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
    public function getArchiveResults(): ?array
    {
        return $this->ArchiveResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setArchiveResults(?array $value = null)
    {
        $this->ArchiveResults = $value;

        return $this;
    }
}
