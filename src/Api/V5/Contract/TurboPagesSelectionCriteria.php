<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TurboPagesSelectionCriteria
{
//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $BoundWithHrefs = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getBoundWithHrefs(): ?array
    {
        return $this->BoundWithHrefs ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setBoundWithHrefs(?array $value = null)
    {
        $this->BoundWithHrefs = $value;

        return $this;
    }
}
