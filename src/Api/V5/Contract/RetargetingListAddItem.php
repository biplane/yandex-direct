<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListAddItem
{
//    Can be omitted.
//    protected $Type = null;

    protected $Name = null;

//    Can be omitted.
//    protected $Description = null;

    protected $Rules = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see RetargetingListTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see RetargetingListTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * @return RetargetingListRuleItem[]
     */
    public function getRules(): array
    {
        return $this->Rules;
    }

    /**
     * @param RetargetingListRuleItem[] $value
     *
     * @return $this
     */
    public function setRules(array $value)
    {
        $this->Rules = $value;

        return $this;
    }
}
