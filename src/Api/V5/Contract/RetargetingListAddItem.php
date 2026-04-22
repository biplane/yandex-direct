<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListAddItem
{
//    Can be omitted.
//    protected $Type;

    /** @var string */
    protected $Name;

//    Can be omitted.
//    protected $Description;

    /** @var non-empty-list<RetargetingListRuleItem> */
    protected $Rules;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum
     *
     * @return 'RETARGETING'|'AUDIENCE'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum
     *
     * @param 'RETARGETING'|'AUDIENCE'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
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
     * @return non-empty-list<RetargetingListRuleItem>
     */
    public function getRules(): array
    {
        return $this->Rules;
    }

    /**
     * Set Rules
     *
     * @param non-empty-list<RetargetingListRuleItem> $value
     *
     * @return $this
     */
    public function setRules(array $value)
    {
        $this->Rules = $value;

        return $this;
    }
}
