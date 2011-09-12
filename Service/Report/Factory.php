<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;
use Biplane\YandexDirectBundle\Profile\ProfileManager;

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
     * @var \Biplane\YandexDirectBundle\Profile\ProfileManager
     */
    private $profileManager;

    public function __construct(ApiServiceFactory $apiFactory, ProfileManager $profileManager)
    {
        $this->apiFactory = $apiFactory;
        $this->profileManager = $profileManager;
    }

    public function create($profileName)
    {
        $apiService = $this->apiFactory->createApiService($profileName);
        $downloader = new Downloader($this->profileManager->get($profileName)->getConfiguration());

        return new ReportService($apiService, $downloader);
    }
}