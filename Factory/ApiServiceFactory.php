<?php

namespace Biplane\YandexDirectBundle\Factory;

use Biplane\YandexDirectBundle\ClientTypes;
use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Biplane\YandexDirectBundle\Configuration\ConfigurationRegistry;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * ApiFactory
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiServiceFactory
{
    private $clientFactory;
    private $configRegistry;
    private $defaultProfile;
    private $dispatcher;

    /**
     * Constructor.
     *
     * @param ClientFactory            $clientFactory  The client factory
     * @param ConfigurationRegistry    $configRegistry The configurarions registry
     * @param EventDispatcherInterface $dispatcher     The event dispatcher
     */
    public function __construct(
        ClientFactory $clientFactory,
        ConfigurationRegistry $configRegistry,
        EventDispatcherInterface $dispatcher
    )
    {
        $this->clientFactory = $clientFactory;
        $this->configRegistry = $configRegistry;
        $this->dispatcher = $dispatcher;
    }

    /**
     * Gets the name of default profile.
     *
     * @return string
     */
    public function getDefaultProfile()
    {
        return $this->defaultProfile;
    }

    /**
     * Sets the default profile name.
     *
     * @param string $profileName A profile name
     *
     * @throws \InvalidArgumentException When profile by specified name does not exist
     */
    public function setDefaultProfile($profileName)
    {
        if (!$this->configRegistry->has($profileName)) {
            throw new \InvalidArgumentException(sprintf('Profile named "%s" does not exist.', $profileName));
        }

        $this->defaultProfile = $profileName;
    }

    /**
     * Creates a proxy of API service.
     *
     * If the config is null, will be used the default profile.
     *
     * @param BaseConfiguration|string|null $config The configuration, profile name or null
     * @param string                        $type   One constant of ClientTypes enumeration
     *
     * @return YandexApiService
     *
     * @throws \InvalidArgumentException
     */
    public function createApiService($config = null, $type = ClientTypes::TYPE_SOAP)
    {
        if (!$config instanceof BaseConfiguration) {
            if ($config === null) {
                if ($this->defaultProfile !== null) {
                    $config = $this->defaultProfile;
                } else {
                    throw new \InvalidArgumentException(
                        'Profile name cannot be null, because the default profile is not defined.'
                    );
                }
            }

            $config = $this->configRegistry->get($config);

        }

        $client = $this->clientFactory->create($type, $config);

        return new YandexApiService($this->dispatcher, $client);
    }
}
