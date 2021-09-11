<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\EventListener\DumpListener;
use Biplane\YandexDirect\Helper\Dumper;
use Biplane\YandexDirect\User;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use RuntimeException;

class DumpListenerTest extends TestCase
{
    /** @var MockObject&Dumper */
    private $dumper;

    protected function setUp(): void
    {
        $this->dumper = $this->createMock(Dumper::class);
    }

    protected function tearDown(): void
    {
        unset($this->dumper);
    }

    public function testThrowExceptionWhenLevelIsInvalid(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new DumpListener($this->dumper, 0);
    }

    /**
     * @dataProvider getFailEvents
     */
    public function testHandleFailEvent(int $level, bool $success): void
    {
        $listener = new DumpListener($this->dumper, $level);

        if ($success) {
            $this->dumper->expects(self::once())
                ->method('dump')
                ->with('requestId', 'request', 'response');
        } else {
            $this->dumper->expects(self::never())->method('dump');
        }

        $event = new FailCallEvent(
            'get',
            [],
            $this->createMock(User::class),
            $this->createClient('requestId', 'request', 'response'),
            new RuntimeException()
        );

        $listener->onFail($event);
    }

    /**
     * @dataProvider getPostEvents
     */
    public function testHandlePostEvent(int $level, bool $success): void
    {
        $listener = new DumpListener($this->dumper, $level);

        if ($success) {
            $this->dumper->expects(self::once())
                ->method('dump')
                ->with('requestId', 'request', 'response');
        } else {
            $this->dumper->expects(self::never())->method('dump');
        }

        $event = new PostCallEvent(
            'get',
            [],
            $this->createMock(User::class),
            $this->createClient('requestId', 'request', 'response'),
            null
        );

        $listener->onSuccess($event);
    }

    public function testDontDumpWhenRequestIdIsEmpty(): void
    {
        $listener = new DumpListener($this->dumper);

        $this->dumper->expects(self::never())->method('dump');

        $event = new PostCallEvent(
            'get',
            [],
            $this->createMock(User::class),
            $this->createClient('', 'request', 'response'),
            null
        );

        $listener->onSuccess($event);
    }

    /**
     * @return array<array{int, bool}>
     */
    public function getFailEvents(): array
    {
        return [
            [DumpListener::LEVEL_FAIL_REQUEST, true],
            [DumpListener::LEVEL_ALL_REQUEST, true],
        ];
    }

    /**
     * @return array<array{int, bool}>
     */
    public function getPostEvents(): array
    {
        return [
            [DumpListener::LEVEL_FAIL_REQUEST, false],
            [DumpListener::LEVEL_ALL_REQUEST, true],
        ];
    }
}
