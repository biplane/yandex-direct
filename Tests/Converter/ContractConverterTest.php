<?php

namespace Biplane\YandexDirectBundle\Tests\Converter;

use Biplane\YandexDirectBundle\Converter\ContractConverter;
use Biplane\YandexDirectBundle\Tests\Converter\Fixtures;

/**
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ContractConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Biplane\YandexDirectBundle\Converter\ContractConverter
     */
    private $converter;

    protected function setUp()
    {
        $this->converter = new ContractConverter(__NAMESPACE__ . '\\Fixtures\\SimpleContract');
    }

    public function testSimpleConvertationToContract()
    {
        $contract = $this->converter->toContract(array(
            'FirstProperty' => 'foo',
            'secondProperty' => 'bar',
            'third_property' => 'baz'
        ));

        $this->assertTrue($contract instanceof Fixtures\SimpleContract);
        $this->assertEquals('foo', $contract->getFirstProperty());
        $this->assertEquals('bar', $contract->getSecondProperty());
        $this->assertEquals('baz', $contract->third_property);
    }

    public function testNestedConvertationToContract()
    {
        $converter = new ContractConverter(__NAMESPACE__ . '\\Fixtures\\ComplexContract');
        $converter->setChildConverter('simple', new ContractConverter(__NAMESPACE__ . '\\Fixtures\\SimpleContract'));

        $contract = $converter->toContract(array(
            'foo' => 'foo',
            'simple' => array(
                'FirstProperty' => 'foo',
                'secondProperty' => 'bar',
                'third_property' => 'baz'
            )
        ));

        $this->assertTrue($contract instanceof Fixtures\ComplexContract);
        $this->assertEquals('foo', $contract->foo);
        $this->assertTrue($contract->simple instanceOf Fixtures\SimpleContract);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenInvalidTypeConvertToContract()
    {
        $this->converter->toContract('contract');
    }

    /**
     * @expectedException \UnexpectedValueException
     */
    public function testExceptionIsRaisedWhenUnexpectedStruct()
    {
        $struct = new \stdClass();
        $struct->FirstProperty = 'foo';
        $struct->secondProperty = 'bar';
        $struct->another = 'bad';
        $struct->third_property = 'baz';

        $this->converter->toContract($struct);
    }

    public function testSimpleConvertationToArrray()
    {
        $contract = new Fixtures\SimpleContract();
        $contract->third_property = 'foo';

        $result = $this->converter->toArray($contract);

        $this->assertTrue(is_array($result));
        $this->assertSame(array(
            'FirstProperty' => null,
            'secondProperty' => null,
            'third_property' => 'foo'
        ), $result);
    }

    public function testNestedConvertationToArray()
    {
        $contract = new Fixtures\ComplexContract();
        $contract->foo = 'foo';
        $contract->simple = new Fixtures\SimpleContract();
        $contract->simple->third_property = 'baz';

        $converter = new ContractConverter(__NAMESPACE__ . '\\Fixtures\\ComplexContract');
        $converter->setChildConverter('simple', new ContractConverter(__NAMESPACE__ . '\\Fixtures\\SimpleContract'));

        $result = $converter->toArray($contract);

        $this->assertTrue(is_array($result));
        $this->assertSame(array(
            'foo' => 'foo',
            'simple' => array(
                'FirstProperty' => null,
                'secondProperty' => null,
                'third_property' => 'baz'
            )
        ), $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenInvalidTypeConvertToArray()
    {
        $this->converter->toArray('contract');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenInvalidObjectConvertToArray()
    {
        $this->converter->toArray(new \stdClass());
    }
}