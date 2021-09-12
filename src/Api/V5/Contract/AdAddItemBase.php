<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdAddItemBase
{
    protected $AdGroupId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }
}
