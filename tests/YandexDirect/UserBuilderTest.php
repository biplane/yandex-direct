<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\User;
use Biplane\YandexDirect\UserBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class UserBuilderTest extends TestCase
{
    public function testBuild(): void
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

        self::assertSame($dispatcher, $user->getEventDispatcher());
        self::assertEquals('access token', $user->getAccessToken());
        self::assertEquals(User::LOCALE_RU, $user->getLocale());
        self::assertEquals('foo', $user->getLogin());
        self::assertEquals('master token', $user->getMasterToken());
        self::assertTrue($user->useOperatorUnits());
    }

    public function testResetBuilder(): void
    {
        $dispatcher = $this->getDispatcherMock();
        $builder = new UserBuilder($dispatcher);

        $user1 = $builder
            ->setAccessToken('access token')
            ->setLogin('foo')
            ->enableUseOperatorUnits()
            ->getUser();

        self::assertEquals('access token', $user1->getAccessToken());
        self::assertEquals('foo', $user1->getLogin());
        self::assertTrue($user1->useOperatorUnits());

        $builder->reset();

        $user2 = $builder
            ->setAccessToken('token')
            ->getUser();

        self::assertNotSame($user1, $user2);
        self::assertEquals('token', $user2->getAccessToken());
        self::assertNull($user2->getLogin());
        self::assertFalse($user2->useOperatorUnits());
    }

    /**
     * @return MockObject&EventDispatcherInterface
     */
    private function getDispatcherMock()
    {
        return $this->createMock(EventDispatcherInterface::class);
    }
}
