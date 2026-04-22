<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AgencyClientsSelectionCriteria
{
//    Can be omitted.
//    protected $Logins;

//    Can be omitted.
//    protected $Archived;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Logins
     *
     * @return list<string>
     */
    public function getLogins(): array
    {
        return $this->Logins ?? [];
    }

    /**
     * Set Logins
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setLogins(array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Get Archived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
     * Set Archived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setArchived(?string $value)
    {
        $this->Archived = $value;

        return $this;
    }
}
