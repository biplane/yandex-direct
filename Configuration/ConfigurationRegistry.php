<?php

namespace Biplane\YandexDirectBundle\Configuration;

/**
 * ConfigurationRegistry
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class ConfigurationRegistry
{
    private $configs;

    /**
     * Constructor.
     *
     * @param array $configs The hash of names and BaseConfiguration instances
     */
    public function __construct(array $configs = array())
    {
        $this->configs = array();

        foreach ($configs as $name => $config) {
            $this->set($name, $config);
        }
    }

    /**
     * Determines whether this registry contains configuration with specific name.
     *
     * @param string $name The name
     *
     * @return bool
     */
    public function has($name)
    {
        return isset($this->configs[$name]);
    }

    /**
     * Gets a configuration by name.
     *
     * @param string $name The name
     *
     * @return BaseConfiguration
     *
     * @throws \InvalidArgumentException
     */
    public function get($name)
    {
        if (!isset($this->configs[$name])) {
            throw new \InvalidArgumentException(sprintf('Configuration named "%s" does not exist.', $name));
        }

        return $this->configs[$name];
    }

    /**
     * Sets the config to this registry.
     *
     * @param string            $name   The name
     * @param BaseConfiguration $config A BaseConfiguration instance
     */
    public function set($name, BaseConfiguration $config)
    {
        $this->configs[$name] = $config;
    }

    /**
     * Gets an array of configs names.
     *
     * @return array
     */
    public function getNames()
    {
        return array_keys($this->configs);
    }
}
