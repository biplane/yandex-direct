<?php

namespace Biplane\YandexDirectBundle\Tests\Proxy\Client;

use Biplane\YandexDirectBundle\Factory\ConverterFactory;
use Biplane\YandexDirectBundle\Proxy\Client\SoapClient;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class SoapClientTest extends ApiBaseTest
{
    /**
     * @return \Biplane\YandexDirectBundle\Proxy\Client\ClientInterface
     */
    protected function createClient()
    {
        $config = $this->createConfiguration();

        return new SoapClient($config, new ConverterFactory());
    }
}