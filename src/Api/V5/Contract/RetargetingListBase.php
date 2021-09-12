<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListBase
{
//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Description = null;

//    Can be omitted.
//    protected $Rules = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
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
     * @return RetargetingListRuleItem[]|null
     */
    public function getRules(): ?array
    {
        return $this->Rules ?? null;
    }

    /**
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
