<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class AbstractConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Biplane\YandexDirectBundle\Configuration\AbstractConfiguration
     */
    private $configuration;

    protected function setUp()
    {
        $this->configuration = $this->getMockForAbstractClass('Biplane\\YandexDirectBundle\\Configuration\\AbstractConfiguration');
    }

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
     * @param string $locale
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

    /**
     * @return array
     */
    public function localeProvider()
    {
        return array(
            array(AbstractConfiguration::LOCALE_EN),
            array(AbstractConfiguration::LOCALE_RU),
            array(AbstractConfiguration::LOCALE_UA)
        );
    }
}