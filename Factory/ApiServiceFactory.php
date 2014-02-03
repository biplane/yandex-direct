<?php

namespace Biplane\YandexDirectBundle\Factory;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirectBundle\Profile\ProfileInterface;
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
    private $dispatcher;

    /**
     * Constructor.
     *
     * @param ClientFactory            $clientFactory  The client factory
     * @param ProfileManager           $profileManager The profile manager
     * @param EventDispatcherInterface $dispatcher     The event dispatcher
     */
    public function __construct(
        ClientFactory $clientFactory,
        ProfileManager $profileManager,
        EventDispatcherInterface $dispatcher
    )
    {
        $this->clientFactory = $clientFactory;
        $this->profileManager = $profileManager;
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
        if (!$this->profileManager->has($profileName)) {
            throw new \InvalidArgumentException(sprintf('Profile named "%s" does not exist.', $profileName));
        }

        $this->defaultProfile = $profileName;
    }

    /**
     * Creates a proxy of API service.
     *
     * If the profile is null, will be used the default profile.
     *
     * @param ProfileInterface|string|null $profile The Profile object, profile name or null
     *
     * @return YandexApiService
     *
     * @throws \InvalidArgumentException When profile by specified name does not exist
     * @throws \InvalidArgumentException When profile name is null and the default profile is not defained
     */
    public function createApiService($profile = null)
    {
        if (!$profile instanceof ProfileInterface) {
            if ($profile === null) {
                if ($this->defaultProfile !== null) {
                    $profile = $this->defaultProfile;
                } else {
                    throw new \InvalidArgumentException(
                        'Profile name cannot be null, because the default profile is not defined.'
                    );
                }
            }

            $profile = $this->profileManager->get($profile);
        }

        $client = $this->clientFactory->create($profile->getType(), $profile->getConfiguration());
        $service = new YandexApiService($this->dispatcher, $client);

        return $service;
    }
}
