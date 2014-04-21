<?php

namespace Biplane\YandexDirectBundle\Tests\Profile;

use Biplane\YandexDirectBundle\Configuration\ConfigurationRegistry;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ConfigurationRegistryTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $registry = new ConfigurationRegistry(array(
            'foo' => $this->getConfigMock(),
            'bar' => $this->getConfigMock()
        ));

        $this->assertTrue($registry->has('foo'));
        $this->assertTrue($registry->has('bar'));
    }

    public function testGetAndSetConfig()
    {
        $config = $this->getConfigMock();

        $registry = new ConfigurationRegistry();
        $registry->set('foo', $config);

        $this->assertSame($config, $registry->get('foo'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenConfigNotRegistered()
    {
        $registry = new ConfigurationRegistry();
        $registry->get('foo');
    }

    public function testHasConfig()
    {
        $registry = new ConfigurationRegistry();
        $registry->set('foo', $this->getConfigMock());

        $this->assertTrue($registry->has('foo'), '->has() returns true if the profile is set.');
        $this->assertFalse($registry->has('bar'), '->has() returns false if the profile is not set.');
    }

    public function testGetProfileNames()
    {
        $registry = new ConfigurationRegistry();

        $this->assertEquals(array(), $registry->getNames());

        $registry->set('foo', $this->getConfigMock());
        $registry->set('bar', $this->getConfigMock());

        $this->assertEquals(array('foo', 'bar'), $registry->getNames());
    }

    private function getConfigMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirectBundle\Configuration\BaseConfiguration')
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
    }
}
