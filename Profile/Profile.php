<?php

namespace Biplane\YandexDirectBundle\Profile;

use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;

/**
 * Profile
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Profile
{
    const CLIENT_TYPE_SOAP = 'soap';
    const CLIENT_TYPE_JSON = 'json';

    private static $clientTypes = array(
        self::CLIENT_TYPE_JSON,
        self::CLIENT_TYPE_SOAP
    );

    private $clientType;
    private $configuration;

    /**
     * @param string $clientType
     * @param AbstractConfiguration $configuration
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($clientType, AbstractConfiguration $configuration)
    {
        if (!in_array($clientType, self::$clientTypes)) {
            throw new \InvalidArgumentException(
                'Invalid client type. Case must be one of the following constants Profile::CLIENT_TYPE_SOAP or Profile::CLIENT_TYPE_JSON.');    
        }

        $this->clientType = $clientType;
        $this->configuration = $configuration;
    }

    /**
     * @return string
     */
    public function getClientType()
    {
        return $this->clientType;
    }

    /**
     * @return \Biplane\YandexDirectBundle\Configuration\AbstractConfiguration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}
