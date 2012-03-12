<?php

namespace Biplane\YandexDirectBundle\Tests\Profile;

use Biplane\YandexDirectBundle\Profile\Profile;

/**
 * ProfileTest
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ProfileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider clientTypeProvider
     */
    public function testConstructorAndGetters($clientType)
    {
        $configuration = $this->getMockForAbstractClass(
            'Biplane\\YandexDirectBundle\\Configuration\\BaseConfiguration',
            array('foo')
        );
        $profile = new Profile($clientType, $configuration);

        $this->assertEquals($clientType, $profile->getClientType());
        $this->assertEquals($configuration, $profile->getConfiguration());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenInvalidClientType()
    {
        new Profile(
            'foo',
            $this->getMockForAbstractClass(
                'Biplane\\YandexDirectBundle\\Configuration\\BaseConfiguration',
                array('foo')
            )
        );
    }

    public function clientTypeProvider()
    {
        return array(
            array(Profile::CLIENT_TYPE_JSON),
            array(Profile::CLIENT_TYPE_SOAP)
        );
    }
}