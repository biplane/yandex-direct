<?php

namespace Biplane\YandexDirectBundle\Factory;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Biplane\YandexDirectBundle\Proxy\Client\ClientInterface;
use Biplane\YandexDirectBundle\Proxy\Client\JsonClient;
use Biplane\YandexDirectBundle\Proxy\Client\SoapClient;
use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;

/**
 * ClientFactory
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ClientFactory
{
    const TYPE_SOAP = 'soap';
    const TYPE_JSON = 'json';

    static private $clients = array();

    public function __construct()
    {

    }

    public function create($type, BaseConfiguration $configuration)
    {
        $key = $type . spl_object_hash($configuration);

        if (isset(self::$clients[$key])) {
            return self::$clients[$key];
        }
        
        switch ($type) {
            case self::TYPE_SOAP:
                $client = new SoapClient($configuration, new ConverterFactory());
                break;
            case self::TYPE_JSON:
                $client = new JsonClient($configuration, new ConverterFactory(), new JsonEncoder());
                break;
            default:
                throw new \InvalidArgumentException(sprintf('The "%s" type of API client is not supported.', $type));
        }

        self::$clients[$key] = $client;

        return $client;
    }
}
