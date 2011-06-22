<?php

namespace Biplane\YandexDirectBundle\Tests\Proxy\Client;

use Biplane\YandexDirectBundle\Contract;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class ApiBaseTest extends \Biplane\YandexDirectBundle\Tests\TestCase
{
    /**
     * @return \Biplane\YandexDirectBundle\Proxy\Client\ClientInterface
     */
    abstract protected function createClient();

    /**
     * @group yandex_api
     */
    public function testApiMethod_CreateForecast()
    {
        $client = $this->createClient();

        $forecastInfo = new Contract\NewForecastInfo();
        $forecastInfo
            ->setPhrases(array('купить слона', 'продать слона'));

        $result = $client->invoke('CreateNewForecast', array($forecastInfo));

        $this->assertInternalType('int', $result);
        $this->assertGreaterThan(0, $result);

        $done = false;

        for ($try = 0; $try < 5; $try++) {
            sleep(15);

            foreach ($client->invoke('GetForecastList', array()) as $listItem) {
                if ($listItem->getForecastID() === $result) {
                    if ($listItem->getStatusForecast() === 'Done') {
                        $done = true;
                        break 2;
                    }

                    break;
                }
            }
        }

        if (!$done) {
            $client->invoke('DeleteForecastReport', array($result));

            $this->markTestIncomplete('Timeout of creating forecast.');
        }

        return $result;
    }

    /**
     * @group yandex_api
     * @depends testApiMethod_CreateForecast
     */
    public function testApiMethod_GetForecast($id)
    {
        $client = $this->createClient();

        $result = $client->invoke('GetForecast', array($id));

        $this->assertTrue($result instanceOf Contract\GetForecastInfo, '->GetForecast() returns contract of type GetForecastInfo.');
    }

    /**
     * @group yandex_api
     * @depends testApiMethod_CreateForecast
     */
    public function testApiMethod_DeleteForecastReport($id)
    {
        $client = $this->createClient();

        $result = $client->invoke('DeleteForecastReport', array($id));

        $this->assertEquals(1, $result);
    }
}