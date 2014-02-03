<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * Provides implementation of {@link BaseConfiguration} for authorization by OAuth.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class AuthTokenConfiguration extends BaseConfiguration
{
    private $token;

    /**
     * Constructor.
     *
     * @param string $yandexLogin The yandex login
     * @param string $token       The access token
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($yandexLogin, $token)
    {
        if (empty($token)) {
            throw new \InvalidArgumentException('Token cannot be empty');
        }

        parent::__construct($yandexLogin);

        $this->token = $token;
    }

    /**
     * Gets the access token.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
