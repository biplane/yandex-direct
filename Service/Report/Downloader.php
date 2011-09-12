<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;
use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * Downloader
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class Downloader
{
    /**
     * @var \Biplane\YandexDirectBundle\Configuration\AbstractConfiguration
     */
    private $config;

    public function __construct(AbstractConfiguration $config)
    {
        $this->config = $config;
    }

    public function download($url)
    {
        if ($this->config instanceof CertificateConfiguration) {
            $context = stream_context_create(array(
                'ssl' => array(
                    'local_cert' => $this->config->getHttpsCertificate(),
                    'passphrase' => $this->config->getPassphrase()
                )
            ));
            return file_get_contents($url, 0, $context);
        } else if ($this->config instanceof AuthTokenConfiguration) {
            throw new \RuntimeException('Not yet implemented.');
        }

        return null;
    }
}