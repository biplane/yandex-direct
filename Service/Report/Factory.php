<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;

/**
 * Factory
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class Factory
{
    /**
     * @var \Biplane\YandexDirectBundle\Factory\ApiServiceFactory
     */
    private $apiFactory;
    /**
     * @var \Biplane\YandexDirectBundle\Report\Service\ReportDownloader
     */
    private $downloader;

    public function __construct(ApiServiceFactory $apiFactory, Downloader $downloader)
    {
        $this->apiFactory = $apiFactory;
        $this->downloader = $downloader;
    }

    public function create($profileName)
    {
        $service = new ReportService($this->apiFactory, $this->downloader);
        $service->setProfileName($profileName);

        return $service;
    }
}