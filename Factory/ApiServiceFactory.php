<?php

namespace Biplane\YandexDirectBundle\Factory;

use Biplane\YandexDirectBundle\Profile\ProfileManager;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * ApiFactory
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ApiServiceFactory
{
    private $clientFactory;
    private $profileManager;
    private $defaultProfile;

    /**
     * Constructor.
     *
     * @param ClientFactory  $clientFactory  The client factory
     * @param ProfileManager $profileManager The profile manager
     */
    public function __construct(ClientFactory $clientFactory, ProfileManager $profileManager)
    {
        $this->clientFactory = $clientFactory;
        $this->profileManager = $profileManager;
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
        if (!$this->profileManager->has($profileName)) {
            throw new \InvalidArgumentException(sprintf('Profile named "%s" does not exist.', $profileName));
        }

        $this->defaultProfile = $profileName;
    }

    /**
     * Creates a proxy of API service.
     *
     * @param string|null $profileName A profile name or null (will be used the default profile)
     *
     * @return YandexApiService A proxy of API serivce
     *
     * @throws \InvalidArgumentException When profile by specified name does not exist
     * @throws \InvalidArgumentException When profile name is null and the default profile is not defained
     */
    public function createApiService($profileName = null)
    {
        if ($profileName === null) {
            if ($this->defaultProfile !== null) {
                $profileName = $this->defaultProfile;
            }
            else {
                throw new \InvalidArgumentException(
                    'Profile name cannot be null, because the default profile is not defined.'
                );
            }
        }

        if (!$this->profileManager->has($profileName)) {
            throw new \InvalidArgumentException(sprintf('Profile named "%s" does not exist.', $profileName));
        }

        /** @var $profile \Biplane\YandexDirectBundle\Profile\Profile */
        $profile = $this->profileManager->get($profileName);

        $client = $this->clientFactory->create($profile->getClientType(), $profile->getConfiguration());
        $service = new YandexApiService($client);

        return $service;
    }
}