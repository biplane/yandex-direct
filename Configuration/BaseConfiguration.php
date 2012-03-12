<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * Базовый объект конфигурации сервиса.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class BaseConfiguration
{
    const LOCALE_RU = 'ru';
    const LOCALE_EN = 'en';
    const LOCALE_UA = 'ua';

    protected $locale = self::LOCALE_EN;
    protected $proxyHost;
    protected $proxyPort;
    protected $masterToken;
    protected $yandexLogin;

    /**
     * Constructor.
     *
     * @param string $yandexLogin The yandex login
     */
    public function __construct($yandexLogin)
    {
        if (empty($yandexLogin)) {
            throw new \InvalidArgumentException('Yandex login cannot be empty.');
        }

        $this->yandexLogin = (string)$yandexLogin;
    }

    /**
     * Gets the yandex login.
     *
     * @return string
     */
    public function getYandexLogin()
    {
        return $this->yandexLogin;
    }

    /**
     * Gets the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Sets the locale.
     *
     * @param string $locale
     *
     * @throws \InvalidArgumentException
     */
    public function setLocale($locale)
    {
        switch ($locale) {
            case self::LOCALE_EN:
            case self::LOCALE_RU:
            case self::LOCALE_UA:
                $this->locale = $locale;
                break;
            default:
                throw new \InvalidArgumentException(
                    'Invalid locale. Case must be one of the following constants: LOCALE_RU, LOCALE_EN or LOCALE_UK.'
                );
        }
    }

    /**
     * Gets the proxy host.
     *
     * @return string
     */
    public function getProxyHost()
    {
        return $this->proxyHost;
    }

    /**
     * Gets the proxy port.
     *
     * @return int
     */
    public function getProxyPort()
    {
        return $this->proxyPort;
    }

    /**
     * Sets the proxy host and port.
     *
     * @param string $host The host
     * @param int    $port The port
     *
     * @throws \InvalidArgumentException
     */
    public function setProxy($host, $port)
    {
        if (!is_int($port)) {
            throw new \InvalidArgumentException(sprintf(
                'Proxy port should be the integer, given "%s" of type %s.',
                $port, gettype($port)
            ));
        }

        $this->proxyHost = $host;
        $this->proxyPort = $port;
    }

    /**
     * Gets the master token for financial operations.
     *
     * @return string
     */
    public function getMasterToken()
    {
        return $this->masterToken;
    }

    /**
     * Sets the master token for financial operations.
     *
     * @param string $token
     */
    public function setMasterToken($token)
    {
        $this->masterToken = (string)$token ?: null;
    }

    /**
     * Creates the finance token.
     *
     * @param string $methodName   The API method for which needed it token
     * @param int    $operationNum A number of operation
     *
     * @return string
     *
     * @throws \LogicException When the master token is empty
     */
    public function createFinanceToken($methodName, $operationNum)
    {
        if ($this->masterToken === null) {
            throw new \LogicException('Cannot be created the finance token when the master token is empty.');
        }

        return hash('sha256', $this->masterToken . $operationNum . $methodName . $this->yandexLogin);
    }
}