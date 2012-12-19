<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class TagInfo
{
    /**
     * @var int
     */
    protected $TagID;
    /**
     * @var string
     */
    protected $Tag;

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
     * Gets the TagID.
     *
     * @return int
     */
    public function getTagID()
    {
        return $this->TagID;
    }

    /**
     * Sets the TagID.
     *
     * @param int $TagID
     *
     * @return TagInfo
     */
    public function setTagID($TagID)
    {
        $this->TagID = $TagID;

        return $this;
    }

    /**
     * Gets the Tag.
     *
     * @return string
     */
    public function getTag()
    {
        return $this->Tag;
    }

    /**
     * Sets the Tag.
     *
     * @param string $Tag
     *
     * @return TagInfo
     */
    public function setTag($Tag)
    {
        $this->Tag = $Tag;

        return $this;
    }
}