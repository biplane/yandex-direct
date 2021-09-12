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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdCategory(): string
    {
        return $this->AdCategory;
    }

    /**
     * @return $this
     */
    public function setAdCategory(string $value)
    {
        $this->AdCategory = $value;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }
}
