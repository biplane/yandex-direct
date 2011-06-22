<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * Базовый объект конфигурации сервиса.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class AbstractConfiguration
{
    const LOCALE_RU = 'ru';
    const LOCALE_EN = 'en';
    const LOCALE_UA = 'ua';

    protected $locale = self::LOCALE_EN;
    protected $proxyHost;
    protected $proxyPort;

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        switch ($locale) {
            case self::LOCALE_EN:
            case self::LOCALE_RU:
            case self::LOCALE_UA:
                $this->locale = $locale;
                break;
            default:
                throw new \InvalidArgumentException('Invalid locale. Case must be one of the following constants: LOCALE_RU, LOCALE_EN, LOCALE_UK');
        }
    }

    public function getProxyHost()
    {
        return $this->proxyHost;
    }

    public function getProxyPort()
    {
        return $this->proxyPort;
    }

    public function setProxy($host, $port)
    {
        if (!is_int($port)) {
            throw new \InvalidArgumentException(sprintf('Port proxy must be the integer, recieved "%s" of type %s.', $port, gettype($port)));
        }

        $this->proxyHost = $host;
        $this->proxyPort = $port;
    }
}