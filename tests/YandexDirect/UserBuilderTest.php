<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\User;
use Biplane\YandexDirect\UserBuilder;

class UserBuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild()
    {
        $dispatcher = $this->getDispatcherMock();
        $builder = new UserBuilder($dispatcher);

        $user = $builder
            ->setAccessToken('access token')
            ->setLocale(User::LOCALE_RU)
            ->setLogin('foo')
            ->setMasterToken('master token')
            ->enableUseOperatorUnits()
            ->getUser();

        $this->assertInstanceOf('Biplane\YandexDirect\User', $user);
        $this->assertSame($dispatcher, $user->getEventDispatcher());
        $this->assertEquals('access token', $user->getAccessToken());
        $this->assertEquals(User::LOCALE_RU, $user->getLocale());
        $this->assertEquals('foo', $user->getLogin());
        $this->assertEquals('master token', $user->getMasterToken());
        $this->assertTrue($user->useOperatorUnits());
    }

    public function testResetBuilder()
    {
        $dispatcher = $this->getDispatcherMock();
        $builder = new UserBuilder($dispatcher);

        $user1 = $builder
            ->setAccessToken('access token')
            ->setLogin('foo')
            ->enableUseOperatorUnits()
            ->getUser();

        $this->assertEquals('access token', $user1->getAccessToken());
        $this->assertEquals('foo', $user1->getLogin());
        $this->assertTrue($user1->useOperatorUnits());

        $builder->reset();

        $user2 = $builder
            ->setAccessToken('token')
            ->getUser();

        $this->assertNotSame($user1, $user2);
        $this->assertEquals('token', $user2->getAccessToken());
        $this->assertNull($user2->getLogin());
        $this->assertFalse($user2->useOperatorUnits());
    }

    private function getDispatcherMock()
    {
        return $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')->getMock();
    }
}
