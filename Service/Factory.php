<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;
use Biplane\YandexDirectBundle\Profile\ProfileManager;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Biplane\YandexDirectBundle\Service\Report\Downloader;

/**
 * Provides factory for report and forecast services.
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class Factory
{
    private $apiFactory;
    private $profileManager;

    /**
     * Constructor.
     *
     * @param ApiServiceFactory $apiFactory     The ApiServiceFactory instance
     * @param ProfileManager    $profileManager The ProfileManager instance
     */
    public function __construct(ApiServiceFactory $apiFactory, ProfileManager $profileManager)
    {
        $this->apiFactory = $apiFactory;
        $this->profileManager = $profileManager;
    }

    /**
     * Creates a report service for specified profile name.
     *
     * @param string $profileName A profile name
     *
     * @return ReportService A ReportService instance
     */
    public function createReportService($profileName)
    {
        $apiService = $this->getApiService($profileName);
        $downloader = new Downloader($this->profileManager->get($profileName)->getConfiguration());

        return new ReportService($apiService, $downloader);
    }

    /**
     * Creates a forecast service for specified profile name.
     *
     * @param string $profileName A profile name
     *
     * @return ForecastService A ForecastService instance
     */
    public function createForecastService($profileName)
    {
        return new ForecastService($this->getApiService($profileName));
    }

    /**
     * Gets the API service by profile name.
     *
     * @param string $name A Profile name
     *
     * @return YandexApiService An YandexApiService instance
     */
    private function getApiService($name)
    {
        return $this->apiFactory->createApiService($name);
    }
}