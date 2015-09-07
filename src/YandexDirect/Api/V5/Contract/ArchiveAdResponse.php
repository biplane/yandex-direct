<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ArchiveAdResponse
{

    protected $ArchiveResults = null;

    /**
     * Creates a new instance of ArchiveAdResponse.
     *
     * @return ArchiveAdResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ArchiveResults.
     *
     * @return ActionResult[]|null
     */
    public function getArchiveResults()
    {
        return $this->ArchiveResults;
    }

    /**
     * Sets ArchiveResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setArchiveResults(array $value = null)
    {
        $this->ArchiveResults = $value;

        return $this;
    }


}

