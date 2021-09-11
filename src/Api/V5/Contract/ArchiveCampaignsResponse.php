<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ArchiveCampaignsResponse
{
//    Can be omit.
//    protected $ArchiveResults = null;

    /**
     * Creates a new instance of ArchiveCampaignsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ArchiveResults.
     *
     * @return ActionResult[]|null
     */
    public function getArchiveResults(): ?array
    {
        return $this->ArchiveResults ?? null;
    }

    /**
     * Sets ArchiveResults.
     *
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
