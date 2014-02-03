<?php

namespace Biplane\YandexDirectBundle\Factory;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Biplane\YandexDirectBundle\ClientTypes;
use Biplane\YandexDirectBundle\Proxy\Client\ClientInterface;
use Biplane\YandexDirectBundle\Proxy\Client\JsonClient;
use Biplane\YandexDirectBundle\Proxy\Client\SoapClient;
use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

/**
 * ClientFactory
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ClientFactory
{
    private $clients = array();

    /**
     * Creates the client to communicate with API.
     *
     * @param string            $type The client type. One constant of ClientTypes enum
     * @param BaseConfiguration $configuration The configuration
     *
     * @return ClientInterface
     *
     * @throws \InvalidArgumentException
     */
    public function create($type, BaseConfiguration $configuration)
    {
        $key = $type . spl_object_hash($configuration);

        if (isset($this->clients[$key])) {
            return $this->clients[$key];
        }

        switch ($type) {
            case ClientTypes::TYPE_SOAP:
                $client = new SoapClient($configuration);
                break;
            case ClientTypes::TYPE_JSON:
                $client = new JsonClient($configuration, new ConverterFactory(), new JsonEncoder());
                break;
            default:
                throw new \InvalidArgumentException(sprintf('The "%s" type of API client is not supported.', $type));
        }

        return $this->clients[$key] = $client;
    }
}
