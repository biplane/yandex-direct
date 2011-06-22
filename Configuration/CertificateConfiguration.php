<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * Конфигурация с авторизацией через SSL сертификат.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class CertificateConfiguration extends AbstractConfiguration
{
    private $localCert;
    private $passphrase;

    /**
     * 
     * @param string $localCert Path to local certificate.
     * @param string $passphrase
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($localCert, $passphrase = '')
    {
        if (!is_readable($localCert)) {
            throw new \InvalidArgumentException('Invalid HTTPS client certificate path.');
        }

        $this->localCert = $localCert;
        $this->passphrase = (string)$passphrase;
    }

    public function getHttpsCertificate()
    {
        return $this->localCert;
    }

    public function getPassphrase()
    {
        return $this->passphrase;
    }
}