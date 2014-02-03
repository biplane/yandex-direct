<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * ConfigurationTokenAuth
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class AuthTokenConfiguration extends BaseConfiguration
{
    /**
     * Авторизационный токен, выданный OAuth-сервером Яндекса с согласия пользователя
     *
     * @var string
     */
    private $token;

    public function __construct($yandexLogin, $token)
    {
        if (empty($token)) {
            throw new \InvalidArgumentException('Token cannot be empty');
        }

        parent::__construct($yandexLogin);

        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }
}
