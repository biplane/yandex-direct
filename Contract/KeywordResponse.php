<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class KeywordResponse
{
    /**
     * @var KeywordActionResult[]
     */
    protected $ActionsResult;

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
     * Gets the ActionsResult.
     *
     * @return KeywordActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param KeywordActionResult[] $ActionsResult
     *
     * @return KeywordResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

        return $this;
    }
}