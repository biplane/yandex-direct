<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class BaseConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider localeProvider
     */
    public function testLocaleShouldBeSet($locale)
    {
        $config = $this->createConfig(array(
            'locale' => $locale
        ));

        $this->assertSame($locale, $config->getLocale());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSetMasterTokenAndLoginIsMissing()
    {
        $this->createConfig(array(
            'master_token' => 'foo',
        ));
    }

    public function testMasterTokenShouldBeSet()
    {
        $config = $this->createConfig(array(
            'master_token' => 'foo',
            'login'        => 'bar',
        ));

        $this->assertSame('foo', $config->getMasterToken());
        $this->assertSame('bar', $config->getYandexLogin());
    }

    public function testFinanceTokenShouldBeCreated()
    {
        $config = $this->createConfig(array(
            'master_token' => 't0ken',
            'login'        => 'log1n',
        ));

        $this->assertEquals(
            'ca556216659079c5e21ae6647560b3d4ad94b950a2d613974ab934e0a9f54d7d',
            $config->createFinanceToken('foo', 1)
        );
    }

    public function testLoginShouldBeNormalized()
    {
        $config = $this->createConfig(array(
            'login' => 'p.g.Ivanov',
        ));

        $this->assertEquals('p-g-ivanov', $config->getYandexLogin());
    }

    /**
     * @return array
     */
    public function localeProvider()
    {
        return array(
            array(BaseConfiguration::LOCALE_EN),
            array(BaseConfiguration::LOCALE_RU),
            array(BaseConfiguration::LOCALE_UA)
        );
    }

    /**
     * @param array $options
     *
     * @return \PHPUnit_Framework_MockObject_MockObject|BaseConfiguration
     */
    private function createConfig(array $options)
    {
        return $this->getMockForAbstractClass(
            'Biplane\YandexDirectBundle\Configuration\BaseConfiguration',
            array($options)
        );
    }
}
