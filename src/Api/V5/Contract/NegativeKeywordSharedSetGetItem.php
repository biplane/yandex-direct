<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetGetItem extends NegativeKeywordSharedSetBase
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Associated = null;

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAssociated(?string $value = null)
    {
        $this->Associated = $value;

        return $this;
    }
}
