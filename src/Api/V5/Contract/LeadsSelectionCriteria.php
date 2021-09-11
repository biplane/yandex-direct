<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LeadsSelectionCriteria
{
    protected $TurboPageIds = [];

//    Can be omit.
//    protected $DateTimeFrom = null;

//    Can be omit.
//    protected $DateTimeTo = null;

    /**
     * Creates a new instance of LeadsSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TurboPageIds.
     *
     * @return int[]
     */
    public function getTurboPageIds(): array
    {
        return $this->TurboPageIds;
    }

    /**
     * Sets TurboPageIds.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setTurboPageIds(array $value)
    {
        $this->TurboPageIds = $value;

        return $this;
    }

    /**
     * Gets DateTimeFrom.
     */
    public function getDateTimeFrom(): ?string
    {
        return $this->DateTimeFrom ?? null;
    }

    /**
     * Sets DateTimeFrom.
     *
     * @return $this
     */
    public function setDateTimeFrom(?string $value = null)
    {
        $this->DateTimeFrom = $value;

        return $this;
    }

    /**
     * Gets DateTimeTo.
     */
    public function getDateTimeTo(): ?string
    {
        return $this->DateTimeTo ?? null;
    }

    /**
     * Sets DateTimeTo.
     *
     * @return $this
     */
    public function setDateTimeTo(?string $value = null)
    {
        $this->DateTimeTo = $value;

        return $this;
    }
}
