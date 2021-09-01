<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FilterSchemasItem
{

    protected $Name = null;

    protected $Fields = [];

    /**
     * Creates a new instance of FilterSchemasItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Fields.
     *
     * @return FilterFieldItem[]
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * Sets Fields.
     *
     * @param FilterFieldItem[] $value
     * @return $this
     */
    public function setFields(array $value)
    {
        $this->Fields = $value;

        return $this;
    }


}

