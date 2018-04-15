<?php

namespace Biplane\Tests\YandexDirect\Helper;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\Helper\Dumper;
use PHPUnit\Framework\TestCase;

class DumperTest extends TestCase
{
    private $dir;

    public function testDump()
    {
        $dumper = new Dumper($this->dir);

        $dumper->dump('identifier', 'request data', 'response data');

        self::assertDumpFile('id/e/identifier_req.data', 'request data');
        self::assertDumpFile('id/e/identifier_resp.data', 'response data');
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

        $client = $this->createMock(SoapClient::class);

        $client->expects(self::any())
            ->method('getRequestId')
            ->willReturn('request-id');

        $client->expects(self::once())
            ->method('getLastRequest')
            ->willReturn('request data');

        $client->expects(self::once())
            ->method('getLastResponse')
            ->willReturn('response data');

        $dumper->dumpLastRequest($client);

        self::assertDumpFile('re/q/request-id_req.data', 'request data');
        self::assertDumpFile('re/q/request-id_resp.data', 'response data');
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

        self::assertFileExists($path);
        self::assertEquals($content, file_get_contents($path));
    }
}
