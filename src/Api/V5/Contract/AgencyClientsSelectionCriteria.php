<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AgencyClientsSelectionCriteria
{
//    Can be omit.
//    protected $Logins = null;

//    Can be omit.
//    protected $Archived = null;

    /**
     * Creates a new instance of AgencyClientsSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Archived.
     *
     * @see YesNoEnum
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
     * Sets Archived.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setArchived(?string $value = null)
    {
        $this->Archived = $value;

        return $this;
    }
}
