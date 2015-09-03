<?php

namespace Biplane\Tests\SysV;

use Biplane\SysV\Factory;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class FactoryTest extends TestCase
{
    private static $directory;

    public static function setUpBeforeClass()
    {
        self::$directory = sys_get_temp_dir() . '/ipc';

        if (!is_dir(self::$directory)) {
            mkdir(self::$directory);
        }
    }

    public static function tearDownAfterClass()
    {
        foreach (new \DirectoryIterator(self::$directory) as $entry) {
            if ($entry->isFile()) {
                unlink($entry->getPathname());
            } elseif ($entry->isDir() && !$entry->isDot()) {
                rmdir($entry->getPathname());
            }
        }

        rmdir(self::$directory);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testThrowExceptionWhenUnableToCreateDirectory()
    {
        touch($path = self::$directory . '/fake');

        new Factory($path, 1);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testThrowExceptionWhenUnableToWriteInDirectory()
    {
        mkdir($path = self::$directory . '/read-only');
        chmod($path, 0555);

        new Factory($path, 1);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenNameOfInvalidType()
    {
        $factory = new Factory(self::$directory, 100);
        $method = $this->createReflectionMethod('assertValidName');

        $method->invoke($factory, null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenNameIsEmpty()
    {
        $factory = new Factory(self::$directory, 100);
        $method = $this->createReflectionMethod('assertValidName');

        $method->invoke($factory, '');
    }

    public function testKeyCanBeGenerated()
    {
        $factory = new Factory(self::$directory, 100);
        $method = $this->createReflectionMethod('generateKey');

        $key = $method->invoke($factory, 'foo');

        $this->assertInternalType('int', $key);
        $this->assertGreaterThan(0, $key);
    }

    /**
     * @param string $methodName
     * @return \ReflectionMethod
     */
    private function createReflectionMethod($methodName)
    {
        $reflection = new \ReflectionMethod('Biplane\SysV\Factory', $methodName);
        $reflection->setAccessible(true);

        return $reflection;
    }
}
