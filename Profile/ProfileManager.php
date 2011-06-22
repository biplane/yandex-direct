<?php

namespace Biplane\YandexDirectBundle\Profile;

/**
 * Менеджер профилей с настройками для сервиса API
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ProfileManager
{
    private $profiles;

    /**
     * @param array $profiles
     */
    public function __construct(array $profiles = array())
    {
        $this->profiles = array();

        foreach ($profiles as $name => $profile) {
            $this->set($name, $profile);
        }
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return isset($this->profiles[$name]);
    }

    /**
     * @param string $name
     * @return Profile
     *
     * @throws \InvalidArgumentException
     */
    public function get($name)
    {
        if (!isset($this->profiles[$name])) {
            throw new \InvalidArgumentException(sprintf('Profile "%s" does not exist.', $name));
        }

        return $this->profiles[$name];
    }

    /**
     * @param string $name
     * @param Profile $profile
     */
    public function set($name, Profile $profile)
    {
        $this->profiles[$name] = $profile;
    }

    /**
     * @return array
     */
    public function getProfileNames()
    {
        return array_keys($this->profiles);
    }
}
