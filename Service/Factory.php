<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Configuration\ConfigurationRegistry;
use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;
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
    private $configRegistry;

    /**
     * Constructor.
     *
     * @param ApiServiceFactory     $apiFactory     The ApiServiceFactory instance
     * @param ConfigurationRegistry $configRegistry The configuration registry
     */
    public function __construct(ApiServiceFactory $apiFactory, ConfigurationRegistry $configRegistry)
    {
        $this->apiFactory = $apiFactory;
        $this->configRegistry = $configRegistry;
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
        $downloader = new Downloader($this->configRegistry->get($profileName));

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
