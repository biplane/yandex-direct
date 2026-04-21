<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TurboPagesSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $BoundWithHrefs;

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
     * Get Ids
     *
     * @return list<int>
     */
    public function getIds(): array
    {
        return $this->Ids ?? [];
    }

    /**
     * Set Ids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Get BoundWithHrefs
     *
     * @return list<string>
     */
    public function getBoundWithHrefs(): array
    {
        return $this->BoundWithHrefs ?? [];
    }

    /**
     * Set BoundWithHrefs
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setBoundWithHrefs(array $value)
    {
        $this->BoundWithHrefs = $value;

        return $this;
    }
}
