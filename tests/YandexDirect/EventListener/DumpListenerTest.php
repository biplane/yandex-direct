<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\DumpListener;
use Biplane\YandexDirect\Helper\Dumper;

class DumpListenerTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dumper;

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenLevelIsInvalid()
    {
        new DumpListener($this->dumper, 0);
    }

    /**
     * @dataProvider getFailEvents
     */
    public function testHandleFailEvent($level, $success)
    {
        $id = 'identifier';

        $listener = new DumpListener($this->dumper, $level);
        $event = $this->getEventMock('FailCallEvent', $id, 'foo', 'bar');

        if ($success) {
            $this->dumper->expects(self::once())
                ->method('dump')
                ->with($id, 'foo', 'bar');
        } else {
            $this->dumper->expects(self::never())->method('dump');
        }

        $listener->onFail($event);
    }

    /**
     * @dataProvider getPostEvents
     */
    public function testHandlePostEvent($level, $success)
    {
        $id = 'identifier';

        $listener = new DumpListener($this->dumper, $level);
        $event = $this->getEventMock('PostCallEvent', $id, 'foo', 'bar');

        if ($success) {
            $this->dumper->expects(self::once())
                ->method('dump')
                ->with($id, 'foo', 'bar');
        } else {
            $this->dumper->expects(self::never())->method('dump');
        }

        $listener->onSuccess($event);
    }

    public function testDontDumpWhenRequestIdIsEmpty()
    {
        $listener = new DumpListener($this->dumper);
        $event = $this->getEventMock('FailCallEvent', null, 'foo', 'bar');

        $this->dumper->expects(self::never())->method('dump');

        $listener->onFail($event);
    }

    public function getFailEvents()
    {
        return [
            [DumpListener::LEVEL_FAIL_REQUEST, true],
            [DumpListener::LEVEL_ALL_REQUEST, true],
        ];
    }

    public function getPostEvents()
    {
        return [
            [DumpListener::LEVEL_FAIL_REQUEST, false],
            [DumpListener::LEVEL_ALL_REQUEST, true],
        ];
    }

    protected function setUp()
    {
        $this->dumper = $this->createMock(Dumper::class);
    }

    protected function tearDown()
    {
        unset($this->dumper);
    }
}
