<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Profile\ProfileManager;
use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;
use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * ReportDownloader
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ReportDownloader
{
    private $profileManager;

    public function __construct(ProfileManager $profileManager)
    {
        $this->profileManager = $profileManager;
    }

    public function download($url, $profileName)
    {
        $config = $this->profileManager->get($profileName)->getConfiguration();
        if ($config instanceof CertificateConfiguration) {
            $context = stream_context_create(array(
                'ssl' => array(
                    'local_cert' => $config->getHttpsCertificate(),
                    'passphrase' => $config->getPassphrase()
                )
            ));
            return file_get_contents($url, 0, $context);
        } else if ($config instanceof AuthTokenConfiguration) {
            throw new \RuntimeException('Not yet implemented.');
        }

        return null;
    }
}