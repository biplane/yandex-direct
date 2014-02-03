<?php

namespace Biplane\YandexDirectBundle\Tests\Profile;

use Biplane\YandexDirectBundle\ClientTypes;
use Biplane\YandexDirectBundle\Profile\Profile;

/**
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
            'Biplane\YandexDirectBundle\Configuration\BaseConfiguration',
            array('foo')
        );
        $profile = new Profile($clientType, $configuration);

        $this->assertEquals($clientType, $profile->getType());
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
                'Biplane\YandexDirectBundle\Configuration\BaseConfiguration',
                array('foo')
            )
        );
    }

    public function clientTypeProvider()
    {
        return array(
            array(ClientTypes::TYPE_JSON),
            array(ClientTypes::TYPE_SOAP)
        );
    }
}
