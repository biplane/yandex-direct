<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class LeadsSelectionCriteria
{
    /** @var non-empty-list<int> */
    protected $TurboPageIds;

//    Can be omitted.
//    protected $DateTimeFrom;

//    Can be omitted.
//    protected $DateTimeTo;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get TurboPageIds
     *
     * @return non-empty-list<int>
     */
    public function getTurboPageIds(): array
    {
        return $this->TurboPageIds;
    }

    /**
     * Set TurboPageIds
     *
     * @param non-empty-list<int> $value
     *
     * @return $this
     */
    public function setTurboPageIds(array $value)
    {
        $this->TurboPageIds = $value;

        return $this;
    }

    /**
     * Get DateTimeFrom
     */
    public function getDateTimeFrom(): ?string
    {
        return $this->DateTimeFrom ?? null;
    }

    /**
     * Set DateTimeFrom
     *
     * @return $this
     */
    public function setDateTimeFrom(?string $value)
    {
        $this->DateTimeFrom = $value;

        return $this;
    }

    /**
     * Get DateTimeTo
     */
    public function getDateTimeTo(): ?string
    {
        return $this->DateTimeTo ?? null;
    }

    /**
     * Set DateTimeTo
     *
     * @return $this
     */
    public function setDateTimeTo(?string $value)
    {
        $this->DateTimeTo = $value;

        return $this;
    }
}
