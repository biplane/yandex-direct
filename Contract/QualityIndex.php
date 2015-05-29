<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class QualityIndex
{
    /**
     * @var float
     */
    protected $Value;
    /**
     * @var int[]
     */
    protected $References;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets the Value.
     *
     * @param float $Value
     *
     * @return QualityIndex
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }

    /**
     * Gets the References.
     *
     * @return int[]
     */
    public function getReferences()
    {
        return $this->References;
    }

    /**
     * Sets the References.
     *
     * @param int[] $References
     *
     * @return QualityIndex
     */
    public function setReferences(array $References)
    {
        $this->References = $References;

        return $this;
    }
}