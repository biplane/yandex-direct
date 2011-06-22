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
     * @param ClientFactory $clientFactory
     * @param ProfileManager $profileManager
     * @param string $defaultProfile Имя профиля по умолчанию.
     *
     * @throws \LogicException Когда профиль по умолчанию не существует.
     */
    public function __construct(ClientFactory $clientFactory, ProfileManager $profileManager, $defaultProfile)
    {
        if (!$profileManager->has($defaultProfile)) {
            throw new \LogicException(sprintf('Default profile "%s" does not exist.', $defaultProfile));
        }

        $this->clientFactory = $clientFactory;
        $this->profileManager = $profileManager;
        $this->defaultProfile = $defaultProfile;
    }

    /**
     * @param string $profileName Profile nam or null (usage default profile).
     * @return YandexApiService
     *
     * @throws \InvalidArgumentException Когда профиль $profileName не существует.
     */
    public function createApiService($profileName = null)
    {
        if ($profileName === null) {
            $profileName = $this->defaultProfile;
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