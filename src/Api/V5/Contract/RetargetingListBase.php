<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListBase
{
//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $Description;

//    Can be omitted.
//    protected $Rules;

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
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description
     *
     * @return $this
     */
    public function setDescription(?string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Get Rules
     *
     * @return list<RetargetingListRuleItem>
     */
    public function getRules(): array
    {
        return $this->Rules ?? [];
    }

    /**
     * Set Rules
     *
     * @param list<RetargetingListRuleItem> $value
     *
     * @return $this
     */
    public function setRules(array $value)
    {
        $this->Rules = $value;

        return $this;
    }
}
