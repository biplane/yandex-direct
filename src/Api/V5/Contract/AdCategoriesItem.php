<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdCategoriesItem
{
    /** @var string */
    protected $AdCategory;

    /** @var string */
    protected $Description;

    /** @var string */
    protected $Message;

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
     * Get AdCategory
     */
    public function getAdCategory(): string
    {
        return $this->AdCategory;
    }

    /**
     * Set AdCategory
     *
     * @return $this
     */
    public function setAdCategory(string $value)
    {
        $this->AdCategory = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Set Description
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Get Message
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * Set Message
     *
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }
}
