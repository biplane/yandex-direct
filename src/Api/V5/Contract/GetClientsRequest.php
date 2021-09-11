<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetClientsRequest
{
    protected $FieldNames = [];

    /**
     * Creates a new instance of GetClientsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FieldNames.
     *
     * @see ClientFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see ClientFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
