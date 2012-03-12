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
    
    public function __construct($yandexLogin, $applicationId, $token)
    {
        if (empty($applicationId)) {
            throw new \InvalidArgumentException('Application ID cannot be empty.');
        }

        if (empty($token)) {
            throw new \InvalidArgumentException('Token cannot be empty');
        }

        parent::__construct($yandexLogin);

        $this->applicationId = $applicationId;
        $this->token = $token;
    }

    public function getApplicationId()
    {
        return $this->applicationId;
    }

    public function getToken()
    {
        return $this->token;
    }
}