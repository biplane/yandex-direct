<?php

namespace Biplane\YandexDirectBundle\Tests\Proxy\Client;

use Biplane\YandexDirectBundle\Encoder\JsonEncoder;
use Biplane\YandexDirectBundle\Factory\ConverterFactory;
use Biplane\YandexDirectBundle\Proxy\Client\JsonClient;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class JsonClientTest extends ApiBaseTest
{
    /**
     * @return \Biplane\YandexDirectBundle\Proxy\Client\ClientInterface
     */
    protected function createClient()
    {
        $config = $this->createConfiguration();

        return new JsonClient($config, new ConverterFactory(), new JsonEncoder());
    }
}