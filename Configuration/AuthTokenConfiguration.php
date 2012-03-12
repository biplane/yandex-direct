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
     * Логин пользователя, к данным которого приложение собирается получить доступ.
     *
     * @var string
     */
    private $login;

    /**
     * Идентификатор приложения, присвоенный OAuth-сервером Яндекса
     *
     * @var string
     */
    private $applicationId;

    /**
     * Авторизационный токен, выданный OAuth-сервером Яндекса с согласия пользователя
     *
     * @var string
     */
    private $token;
    
    public function __construct($login, $applicationId, $token)
    {
        if (empty($login)) {
            throw new \InvalidArgumentException('Login cannot be empty.');
        }

        if (empty($applicationId)) {
            throw new \InvalidArgumentException('Application ID cannot be empty.');
        }

        if (empty($token)) {
            throw new \InvalidArgumentException('Token cannot be empty');
        }

        $this->login = $login;
        $this->applicationId = $applicationId;
        $this->token = $token;
    }

    public function getApplicationId()
    {
        return $this->applicationId;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getToken()
    {
        return $this->token;
    }
}