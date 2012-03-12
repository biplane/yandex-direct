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
}