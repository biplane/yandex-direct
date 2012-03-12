<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class BaseConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Biplane\YandexDirectBundle\Configuration\BaseConfiguration
     */
    private $configuration;

    public function testSetProxySettings()
    {
        $this->configuration->setProxy('localhost', 8080);

        $this->assertEquals('localhost', $this->configuration->getProxyHost());
        $this->assertEquals(8080, $this->configuration->getProxyPort());
    }

    public function testExceptionIsRaisedWhenInvalidProxyPort()
    {
        $this->setExpectedException('InvalidArgumentException');

        $this->configuration->setProxy('localhost', '123');
    }

    /**
     * @dataProvider localeProvider
     */
    public function testGetterAndSetterLocale($locale)
    {
        $this->configuration->setLocale($locale);

        $this->assertEquals($locale, $this->configuration->getLocale());
    }

    public function testExceptionIsRaisedWhenInvalidLocale()
    {
        $this->setExpectedException('InvalidArgumentException');

        $this->configuration->setLocale('locale');
    }

    public function testGetterAndSetterMasterToken()
    {
        $this->configuration->setMasterToken('foo');

        $this->assertEquals('foo', $this->configuration->getMasterToken());

        $this->configuration->setMasterToken(null);

        $this->assertNull($this->configuration->getMasterToken());
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

    protected function setUp()
    {
        $this->configuration = $this->getMockForAbstractClass(
            'Biplane\YandexDirectBundle\Configuration\BaseConfiguration',
            array('foo')
        );
    }

    protected function tearDown()
    {
        unset($this->configuration);
    }
}