<?php

namespace Biplane\YandexDirectBundle\Tests;

use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \Biplane\YandexDirectBundle\Configuration\CertificateConfiguration
     */
    protected function createConfiguration()
    {
        if (!isset($GLOBALS['YANDEX_LOCAL_CERT']) || empty($GLOBALS['YANDEX_LOCAL_CERT'])) {
            $this->markTestSkipped('Global variable "YANDEX_LOCAL_CERT" is not available or empty.');
        }

        $configuration = new CertificateConfiguration($GLOBALS['YANDEX_LOGIN'], $GLOBALS['YANDEX_LOCAL_CERT'], '');
        $configuration->setLocale(CertificateConfiguration::LOCALE_RU);

        if (!empty($GLOBALS['PROXY_HOST'])) {
            $configuration->setProxy($GLOBALS['PROXY_HOST'], (int)$GLOBALS['PROXY_PORT']);
        }

        return $configuration;
    }
}