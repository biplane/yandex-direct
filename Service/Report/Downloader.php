<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
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
     * @var AuthTokenConfiguration|CertificateConfiguration
     */
    private $config;

    /**
     * Constructor.
     *
     * @param BaseConfiguration $config The configuration
     */
    public function __construct(BaseConfiguration $config)
    {
        $this->config = $config;
    }

    /**
     * Downloads a content of report.
     *
     * @param string $url A report url
     *
     * @return null|string A report content or null
     *
     * @throws \LogicException
     */
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
            throw new \LogicException('Not yet implemented.');
        }

        return null;
    }
}