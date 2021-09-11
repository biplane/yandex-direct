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
     * Creates a new instance of AdAddItemBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }
}
