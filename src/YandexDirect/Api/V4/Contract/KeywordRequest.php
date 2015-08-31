<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class KeywordRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int[]
     */
    protected $KeywordIDS;

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
     * Gets the Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets the Action.
     *
     * @param string $Action
     *
     * @return KeywordRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return KeywordRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the KeywordIDS.
     *
     * @return int[]
     */
    public function getKeywordIDS()
    {
        return $this->KeywordIDS;
    }

    /**
     * Sets the KeywordIDS.
     *
     * @param int[] $KeywordIDS
     *
     * @return KeywordRequest
     */
    public function setKeywordIDS(array $KeywordIDS)
    {
        $this->KeywordIDS = $KeywordIDS;

        return $this;
    }
}