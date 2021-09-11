<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListBase
{
//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $Description = null;

//    Can be omit.
//    protected $Rules = null;

    /**
     * Creates a new instance of RetargetingListBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
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
     * @return RetargetingListRuleItem[]|null
     */
    public function getRules(): ?array
    {
        return $this->Rules ?? null;
    }

    /**
     * Sets Rules.
     *
     * @param RetargetingListRuleItem[]|null $value
     *
     * @return $this
     */
    public function setRules(?array $value = null)
    {
        $this->Rules = $value;

        return $this;
    }
}
