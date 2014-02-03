<?php

namespace Biplane\YandexDirectBundle\Profile;

use Biplane\YandexDirectBundle\ClientTypes;
use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

/**
 * Default implementation of {@link ProfileInterface}.
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Profile implements ProfileInterface
{
    private $clientType;
    private $configuration;

    /**
     * Constructor.
     *
     * @param string            $clientType    A constant of ClientTypes enumeration
     * @param BaseConfiguration $configuration The configuration
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($clientType, BaseConfiguration $configuration)
    {
        if (!in_array($clientType, array(ClientTypes::TYPE_JSON, ClientTypes::TYPE_SOAP))) {
            throw new \InvalidArgumentException(
                'The client type is invalid. Case must be one of the following constants of ClientTypes enumeration.'
            );
        }

        $this->clientType = $clientType;
        $this->configuration = $configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->clientType;
    }
}
