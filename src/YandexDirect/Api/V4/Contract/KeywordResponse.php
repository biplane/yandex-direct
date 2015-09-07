<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class KeywordResponse
{

    protected $ActionsResult = null;

    /**
     * Creates a new instance of KeywordResponse.
     *
     * @return KeywordResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return KeywordActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param array|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }


}

