<?php

namespace Biplane\Tests\SysV;

use Biplane\SysV\SharedMemory;
use Biplane\SysV\Util;

class SharedMemoryTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $semaphore;
    /**
     * @var SharedMemory
     */
    private $shm;

    public function varProvider()
    {
        $obj = new \stdClass();
        $obj->prop = 'memory';

        return array(
            array('foo', 'bar'),
            array('arr', array(1 => 'bar', 2 => 'foo')),
            array('obj', $obj)
        );
    }

    /**
     * @dataProvider varProvider
     */
    public function testCustomVarCanBePutAndGet($name, $value)
    {
        $this->semaphore->expects($this->exactly(2))
            ->method('acquire');

        $this->semaphore->expects($this->exactly(2))
            ->method('release');

        $this->shm->set($name, $value);

        $this->assertEquals($value, $this->shm->get($name));
    }

    public function testHasVar()
    {
        $this->semaphore->expects($this->exactly(3))
            ->method('acquire');

        $this->semaphore->expects($this->exactly(3))
            ->method('release');

        $varName = uniqid('var');

        $this->assertFalse($this->shm->has($varName));

        $this->shm->set($varName, 'bar');

        $this->assertTrue($this->shm->has($varName));
    }

    public function testCustomVarCanBeRemoved()
    {
        $this->semaphore->expects($this->exactly(4))
            ->method('acquire');

        $this->semaphore->expects($this->exactly(4))
            ->method('release');

        $this->shm->set('foo', 'bar');
        $this->assertTrue($this->shm->has('foo'));

        $this->assertTrue($this->shm->remove('foo'));

        $this->assertFalse($this->shm->has('foo'));
    }

    public function testKeysAndAll()
    {
        $this->shm->set('foo', 'Hello');
        $this->shm->set('bar', 'world');

        $this->assertEquals(array('foo', 'bar'), $this->shm->keys());
        $this->assertEquals(
            array(
                'foo' => 'Hello',
                'bar' => 'world',
            ),
            $this->shm->all()
        );
    }

    protected function setUp()
    {
        parent::setUp();

        $key = Util::generateKey();

        $this->semaphore = $this->getMockBuilder('Biplane\SysV\Semaphore')
            ->disableOriginalConstructor()
            ->getMock();

        $this->shm = new SharedMemory($key, $this->semaphore);
    }

    protected function tearDown()
    {
        if ($this->shm !== null) {
            foreach ($this->shm->keys() as $key) {
                $this->shm->remove($key);
            }

            $this->shm->detach();
        }
    }
}
