<?php

namespace Biplane\YandexDirectBundle\Tests\Converterr;

use Biplane\YandexDirectBundle\Converter\ArrayConverter;

/**
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ArrayConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testConvertionToContract()
    {
        $mock = $this->getMockBuilder('Biplane\YandexDirectBundle\Converter\ConverterInterface')
            ->getMock();
        $mock->expects($this->exactly(3))
            ->method('toContract')
            ->will($this->returnArgument(0));

        $converter = new ArrayConverter($mock);

        $result = $converter->toContract(array(
            new \stdClass(), // as POPO
            $this, // as another object
            array('foo' => 'bar') // as assoc array
        ));

        $this->assertTrue(is_array($result));
        $this->assertEquals(3, count($result));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenNotArrayConvertToContract()
    {
        $converter = new ArrayConverter(
            $this->getMockBuilder('Biplane\YandexDirectBundle\Converter\ConverterInterface')
                ->getMock()
        );

        $converter->toContract('array');
    }

    public function testConvertionToArray()
    {
        $mock = $this->getMockBuilder('Biplane\YandexDirectBundle\Converter\ConverterInterface')
            ->getMock();
        $mock->expects($this->once())
            ->method('toArray')
            ->will($this->returnArgument(0));

        $converter = new ArrayConverter($mock);

        $result = $converter->toArray(array(new \stdClass()));

        $this->assertTrue(is_array($result));
        $this->assertEquals(1, count($result));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenNotArrayConvertToArray()
    {
        $converter = new ArrayConverter(
            $this->getMockBuilder('Biplane\YandexDirectBundle\Converter\ConverterInterface')
                ->getMock()
        );

        $converter->toContract('array');
    }
}