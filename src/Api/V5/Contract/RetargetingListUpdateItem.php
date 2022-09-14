<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListUpdateItem extends RetargetingListBase
{
    protected $Id = null;

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }
}
