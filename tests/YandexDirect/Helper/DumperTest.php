<?php

namespace Biplane\Tests\YandexDirect\Helper;

use Biplane\YandexDirect\Helper\Dumper;

class DumperTest extends \PHPUnit_Framework_TestCase
{
    private $dir;

    public function testDump()
    {
        $dumper = new Dumper($this->dir);

        $dumper->dump('identifier', 'request data', 'response data');

        $this->assertDumpFile('id/e/identifier_req.data', 'request data');
        $this->assertDumpFile('id/e/identifier_resp.data', 'response data');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenRequestIdIsEmpty()
    {
        $dumper = new Dumper($this->dir);

        $dumper->dump(null, 'request data', 'response data');
    }

    public function testDumpLastRequest()
    {
        $dumper = new Dumper($this->dir);

        $client = $this->getMockBuilder('Biplane\YandexDirect\Api\SoapClient')
            ->disableOriginalConstructor()
            ->getMock();

        $client->expects($this->any())
            ->method('getRequestId')
            ->willReturn('request-id');

        $client->expects($this->once())
            ->method('getLastRequest')
            ->willReturn('request data');

        $client->expects($this->once())
            ->method('getLastResponse')
            ->willReturn('response data');

        $dumper->dumpLastRequest($client);

        $this->assertDumpFile('re/q/request-id_req.data', 'request data');
        $this->assertDumpFile('re/q/request-id_resp.data', 'response data');
    }

    protected function setUp()
    {
        $this->dir = sys_get_temp_dir() . '/dump_' . uniqid();
    }

    protected function tearDown()
    {
        if (is_dir($this->dir)) {
            // Implementation taken from http://stackoverflow.com/a/3352564.
            $files = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($this->dir, \RecursiveDirectoryIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::CHILD_FIRST
            );

            foreach ($files as $fileInfo) {
                $deleteFunction = ($fileInfo->isDir() ? 'rmdir' : 'unlink');
                $deleteFunction($fileInfo->getRealPath());
            }

            rmdir($this->dir);
        }
    }

    private function assertDumpFile($filename, $content)
    {
        $path = $this->dir . '/' . $filename;

        $this->assertFileExists($path);
        $this->assertEquals($content, file_get_contents($path));
    }
}
