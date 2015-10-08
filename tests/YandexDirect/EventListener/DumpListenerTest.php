<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\DumpListener;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class DumpListenerTest extends \PHPUnit_Framework_TestCase
{
    private $dir;

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenLevelIsInvalid()
    {
        new DumpListener($this->dir, 0);
    }

    /**
     * @dataProvider getFailEvents
     */
    public function testHandleFailEvent($level, $success)
    {
        $id = uniqid();

        $listener = new DumpListener($this->dir, $level);
        $event = $this->getEventMock('FailCallEvent', $id, 'foo', 'bar');

        $listener->onFail($event);

        if ($success) {
            $this->assertDumpFile($id . '_request', 'foo');
            $this->assertDumpFile($id . '_response', 'bar');
        } else {
            $this->assertFileNotExists($this->dir . '/' . $id . '_request');
            $this->assertFileNotExists($this->dir . '/' . $id . '_response');
        }
    }

    /**
     * @dataProvider getPostEvents
     */
    public function testHandlePostEvent($level, $success)
    {
        $id = uniqid();

        $listener = new DumpListener($this->dir, $level);
        $event = $this->getEventMock('PostCallEvent', $id, 'foo', 'bar');

        $listener->onSuccess($event);

        if ($success) {
            $this->assertDumpFile($id . '_request', 'foo');
            $this->assertDumpFile($id . '_response', 'bar');
        } else {
            $this->assertFileNotExists($this->dir . '/' . $id . '_request');
            $this->assertFileNotExists($this->dir . '/' . $id . '_response');
        }
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
        $this->dir = sys_get_temp_dir() . '/dump_' . uniqid();
    }

    protected function tearDown()
    {
        if (is_dir($this->dir)) {
            foreach (new \DirectoryIterator($this->dir) as $entry) {
                if ($entry->isFile()) {
                    unlink($entry->getPathname());
                } elseif ($entry->isDir() && !$entry->isDot()) {
                    rmdir($entry->getPathname());
                }
            }

            rmdir($this->dir);
        }
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

    private function assertDumpFile($filename, $content)
    {
        $path = $this->dir . '/' . $filename;

        $this->assertFileExists($path);
        $this->assertEquals($content, file_get_contents($path));
    }
}
