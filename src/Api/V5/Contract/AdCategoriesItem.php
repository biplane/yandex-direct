<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdCategoriesItem
{
    protected $AdCategory = null;

    protected $Description = null;

    protected $Message = null;

    /**
     * Creates a new instance of AdCategoriesItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdCategory.
     */
    public function getAdCategory(): string
    {
        return $this->AdCategory;
    }

    /**
     * Sets AdCategory.
     *
     * @return $this
     */
    public function setAdCategory(string $value)
    {
        $this->AdCategory = $value;

        return $this;
    }

    /**
     * Gets Description.
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Gets Message.
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * Sets Message.
     *
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }
}
