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
//    protected $Logins = null;

//    Can be omitted.
//    protected $Archived = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getArchived(): ?string
    {
        return $this->Archived ?? null;
    }

    /**
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
