<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddVCardsRequest
{
    protected $VCards = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return VCardAddItem[]
     */
    public function getVCards(): array
    {
        return $this->VCards;
    }

    /**
     * @param VCardAddItem[] $value
     *
     * @return $this
     */
    public function setVCards(array $value)
    {
        $this->VCards = $value;

        return $this;
    }
}
