<?php

namespace Biplane\YandexDirectBundle\Tests\Profile;

use Biplane\YandexDirectBundle\Profile\ProfileManager;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ProfileManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $manager = new ProfileManager(array(
            'foo' => $this->getProfileMock(),
            'bar' => $this->getProfileMock()
        ));

        $this->assertTrue($manager->has('foo'));
        $this->assertTrue($manager->has('bar'));
    }

    public function testGetAndSetProfile()
    {
        $profile = $this->getProfileMock();

        $manager = new ProfileManager();
        $manager->set('foo', $profile);

        $this->assertSame($profile, $manager->get('foo'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenGetInvalidProfile()
    {
        $manager = new ProfileManager();
        $manager->get('foo');
    }

    public function testHasProfile()
    {
        $manager = new ProfileManager();
        $manager->set('foo', $this->getProfileMock());

        $this->assertTrue($manager->has('foo'), '->has() returns true if the profile is set.');
        $this->assertFalse($manager->has('bar'), '->has() returns false if the profile is not set.');
    }

    public function testGetProfileNames()
    {
        $manager = new ProfileManager();

        $this->assertEquals(array(), $manager->getProfileNames());

        $manager->set('foo', $this->getProfileMock());
        $manager->set('bar', $this->getProfileMock());

        $this->assertEquals(array('foo', 'bar'), $manager->getProfileNames());
    }

    private function getProfileMock()
    {
        return $this->getMock('Biplane\YandexDirectBundle\Profile\ProfileInterface');
    }
}
