<?php

namespace Biplane\YandexDirectBundle\Profile;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

/**
 * ProfileInterface
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
interface ProfileInterface
{
    /**
     * Gets the configuration.
     *
     * @return BaseConfiguration
     */
    public function getConfiguration();

    /**
     * Gets the type of proxy of API.
     *
     * Returns one of constants of ClientTypes enum.
     *
     * @return string
     */
    public function getType();
}
