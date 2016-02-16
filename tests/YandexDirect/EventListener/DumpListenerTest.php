<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\DumpListener;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class DumpListenerTest extends \PHPUnit_Framework_TestCase
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
            $this->dumper->expects($this->once())
                ->method('dump')
                ->with($id, 'foo', 'bar');
        } else {
            $this->dumper->expects($this->never())
                ->method('dump');
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
            $this->dumper->expects($this->once())
                ->method('dump')
                ->with($id, 'foo', 'bar');
        } else {
            $this->dumper->expects($this->never())
                ->method('dump');
        }

        $listener->onSuccess($event);
    }

    public function getFailEvents()
    {
        return array(
            array(DumpListener::LEVEL_FAIL_REQUEST, true),
            array(DumpListener::LEVEL_ALL_REQUEST, true),
        );
    }

    public function getPostEvents()
    {
        return array(
            array(DumpListener::LEVEL_FAIL_REQUEST, false),
            array(DumpListener::LEVEL_ALL_REQUEST, true),
        );
    }

    protected function setUp()
    {
        $this->dumper = $this->getMockBuilder('Biplane\YandexDirect\Helper\Dumper')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        unset($this->dumper);
    }

    private function getEventMock($eventClass, $requestId, $request, $response)
    {
        $mock = $this->getMockBuilder('Biplane\\YandexDirect\\Event\\' . $eventClass)
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->any())
            ->method('getRequestId')
            ->willReturn($requestId);

        $mock->expects($this->any())
            ->method('getRequest')
            ->willReturn($request);

        $mock->expects($this->any())
            ->method('getResponse')
            ->willReturn($response);

        return $mock;
    }
}
