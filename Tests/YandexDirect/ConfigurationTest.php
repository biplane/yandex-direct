<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Configuration;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function getLocales()
    {
        return array(
            array(Configuration::LOCALE_EN),
            array(Configuration::LOCALE_RU),
            array(Configuration::LOCALE_UA)
        );
    }

    /**
     * @dataProvider getLocales
     */
    public function testLocaleShouldBeSet($locale)
    {

        $config = new Configuration(array(
            'locale' => $locale,
            'access_token' => 'foo',
        ));

        $this->assertSame($locale, $config->getLocale());
    }

    public function testLoginShouldBeNormalized()
    {
        $config = new Configuration(array(
            'login' => 'p.g.Ivanov',
            'access_token' => 'foo',
        ));

        $this->assertEquals('p-g-ivanov', $config->getLogin());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSetMasterTokenAndLoginIsMissing()
    {
        new Configuration(array(
            'access_token' => 'foo',
            'master_token' => 'bar',
        ));
    }

    public function testMasterTokenShouldBeSet()
    {
        $config = new Configuration(array(
            'master_token' => 'foo',
            'login'        => 'bar',
            'access_token' => 'token'
        ));

        $this->assertSame('foo', $config->getMasterToken());
        $this->assertSame('bar', $config->getLogin());
    }

    public function testFinanceTokenShouldBeCreated()
    {
        $config = new Configuration(array(
            'master_token' => 't0ken',
            'login'        => 'log1n',
            'access_token' => 'foo'
        ));

        $this->assertEquals(
            'ca556216659079c5e21ae6647560b3d4ad94b950a2d613974ab934e0a9f54d7d',
            $config->createFinanceToken('foo', 1)
        );
    }

    public function testHashCodeShouldBeGenerated()
    {
        $configuration = new Configuration(array(
            'access_token' => 'foo'
        ));

        $this->assertEquals('acbd18db4cc2f85cedef654fccc4a4d8', $configuration->getHashCode());
    }
}
