<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LeadsSelectionCriteria
{
    protected $TurboPageIds = [];

//    Can be omitted.
//    protected $DateTimeFrom = null;

//    Can be omitted.
//    protected $DateTimeTo = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]
     */
    public function getTurboPageIds(): array
    {
        return $this->TurboPageIds;
    }

    /**
     * @param int[] $value
     *
     * @return $this
     */
    public function setTurboPageIds(array $value)
    {
        $this->TurboPageIds = $value;

        return $this;
    }

    public function getDateTimeFrom(): ?string
    {
        return $this->DateTimeFrom ?? null;
    }

    /**
     * @return $this
     */
    public function setDateTimeFrom(?string $value = null)
    {
        $this->DateTimeFrom = $value;

        return $this;
    }

    public function getDateTimeTo(): ?string
    {
        return $this->DateTimeTo ?? null;
    }

    /**
     * @return $this
     */
    public function setDateTimeTo(?string $value = null)
    {
        $this->DateTimeTo = $value;

        return $this;
    }
}
