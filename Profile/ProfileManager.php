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
     * Constructor.
     *
     * @param ProfileInterface[] $profiles A hash of names and ProfileInterface instances
     */
    public function __construct(array $profiles = array())
    {
        $this->profiles = array();

        foreach ($profiles as $name => $profile) {
            $this->set($name, $profile);
        }
    }

    /**
     * Determines whether this manager has profile with specific name.
     *
     * @param string $name The profile name
     *
     * @return bool
     */
    public function has($name)
    {
        return isset($this->profiles[$name]);
    }

    /**
     * Gets a profile by name.
     *
     * @param string $name The profile name
     *
     * @return ProfileInterface
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
     * Sets the profile to this manager.
     *
     * @param string           $name    The profile name
     * @param ProfileInterface $profile A ProfileInterface instance
     */
    public function set($name, ProfileInterface $profile)
    {
        $this->profiles[$name] = $profile;
    }

    /**
     * Gets an array of profiles names.
     *
     * @return array
     */
    public function getProfileNames()
    {
        return array_keys($this->profiles);
    }
}
