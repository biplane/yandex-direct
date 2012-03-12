<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * Конфигурация с авторизацией через SSL сертификат.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class CertificateConfiguration extends BaseConfiguration
{
    private $localCert;
    private $passphrase;

    /**
     * Constructor.
     *
     * @param string $yandexLogin The yandex login
     * @param string $localCert   Path to local certificate
     * @param string $passphrase  The passphrase for certificate
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($yandexLogin, $localCert, $passphrase = '')
    {
        if (!is_readable($localCert)) {
            throw new \InvalidArgumentException('Invalid HTTPS client certificate path.');
        }

        parent::__construct($yandexLogin);

        $this->localCert = $localCert;
        $this->passphrase = (string)$passphrase;
    }

    /**
     * Gets HTTPS certificate.
     *
     * @return string
     */
    public function getHttpsCertificate()
    {
        return $this->localCert;
    }

    /**
     * Gets the passphrase.
     *
     * @return string
     */
    public function getPassphrase()
    {
        return $this->passphrase;
    }
}