<?php

namespace Biplane\YandexDirectBundle\Tests\Encoder;

use Biplane\YandexDirectBundle\Encoder\JsonEncoder;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class JsonEncoderTest extends \PHPUnit_Framework_TestCase
{
    const FORMAT = 'json';

    /**
     * @var \Biplane\YandexDirectBundle\Encoder\JsonEncoder
     */
    private $encoder;

    protected function setUp()
    {
        $this->markTestIncomplete('Deprecated.');

        $this->encoder = new JsonEncoder();
    }

    public function testEncodeNull()
    {
        $this->assertEquals('null', $this->encoder->encode(null, self::FORMAT));
    }

    public function testEncodeBoolean()
    {
        $this->assertEquals('true', $this->encoder->encode(true, self::FORMAT));
        $this->assertEquals('false', $this->encoder->encode(false, self::FORMAT));
    }

    public function testEncodeNumeric()
    {
        $this->assertEquals('0', $this->encoder->encode(0, self::FORMAT));
        $this->assertEquals('0.5', $this->encoder->encode(0.5, self::FORMAT));
    }

    public function testEncodeString()
    {
        $this->assertEquals('"foo"', $this->encoder->encode('foo', self::FORMAT));
        $this->assertEquals('"\\"text with quotes\\""', $this->encoder->encode('"text with quotes"', self::FORMAT));
        $this->assertEquals('"\\"escaped quotes\\""', $this->encoder->encode('\\"escaped quotes\\"', self::FORMAT));
    }

    public function testEncodeArray()
    {
        $data = array('foo', 'bar', 5, null);

        $this->assertEquals('["foo","bar",5,null]', $this->encoder->encode($data, self::FORMAT));
    }

    public function testEncodeArrayAsJsonObject()
    {
        $data = array(
            'foo',
            'bar',
            'key' => 'baz'
        );

        $this->assertEquals('{"0":"foo","1":"bar","key":"baz"}', $this->encoder->encode($data, self::FORMAT));
    }

    public function testEncodeObject()
    {
        $data = new \stdClass();
        $data->foo = true;
        $data->bar = null;
        $data->baz = array(5,7);

        $this->assertEquals('{"foo":true,"bar":null,"baz":[5,7]}', $this->encoder->encode($data, self::FORMAT));
    }
}