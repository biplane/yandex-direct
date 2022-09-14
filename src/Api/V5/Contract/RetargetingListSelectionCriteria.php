<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListSelectionCriteria
{
//    Can be omitted.
//    protected $Types = null;

//    Can be omitted.
//    protected $Ids = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see RetargetingListTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * @see RetargetingListTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
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
}
