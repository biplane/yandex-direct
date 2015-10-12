<?php

namespace Biplane\YandexDirectBundle\Tests;

use Biplane\Bundle\YandexDirectBundle\UserFactory;
use Biplane\YandexDirect\User;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class UserFactoryTest extends \PHPUnit_Framework_TestCase
{
    private $dispatcher;

    public function testUserInstanceShouldBeCached()
    {
        $factory = new UserFactory($this->dispatcher, User::LOCALE_EN);
        $options = array(
            'access_token' => 'foo'
        );

        $user = $factory->getUser($options);

        $this->assertSame($user, $factory->getUser($options));
    }

    public function testDefaultUserShouldBeCreated()
    {
        $factory = new UserFactory($this->dispatcher, User::LOCALE_EN, array(
            'access_token' => 'foo'
        ));

        $this->assertInstanceOf('Biplane\YandexDirect\User', $factory->getUser());
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenOptionsForDefaultUserIsNotSet()
    {
        $factory = new UserFactory($this->dispatcher, User::LOCALE_EN);

        $factory->getUser();
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
    }

    protected function tearDown()
    {
        unset($this->dispatcher);
    }
}
