<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListAddItem
{
//    Can be omit.
//    protected $Type = null;

    protected $Name = null;

//    Can be omit.
//    protected $Description = null;

    protected $Rules = [];

    /**
     * Creates a new instance of RetargetingListAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @see RetargetingListTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
     * @see RetargetingListTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Description.
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Gets Rules.
     *
     * @return RetargetingListRuleItem[]
     */
    public function getRules(): array
    {
        return $this->Rules;
    }

    /**
     * Sets Rules.
     *
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
