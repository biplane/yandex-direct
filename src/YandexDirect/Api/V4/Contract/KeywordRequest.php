<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class KeywordRequest
{

    protected $Action = null;

    protected $Login = null;

    protected $KeywordIDS = [];

    /**
     * Creates a new instance of KeywordRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return self
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return self
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets KeywordIDS.
     *
     * @return int[]
     */
    public function getKeywordIDS()
    {
        return $this->KeywordIDS;
    }

    /**
     * Sets KeywordIDS.
     *
     * @param int[] $value
     * @return self
     */
    public function setKeywordIDS(array $value)
    {
        $this->KeywordIDS = $value;

        return $this;
    }


}

