<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;

/**
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class AuthTokenConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorAndGetters()
    {
        $configuration = new AuthTokenConfiguration('login', 'token');

        $this->assertEquals('login', $configuration->getYandexLogin());
        $this->assertEquals('token', $configuration->getToken());
    }

    public function testExceptionIsRaisedWhenInvalidLogin()
    {
        $this->setExpectedException('InvalidArgumentException');

        new AuthTokenConfiguration(null, 'token');
    }

    public function testExceptionIsRaisedWhenInvalidToken()
    {
        $this->setExpectedException('InvalidArgumentException');

        new AuthTokenConfiguration('login', null);
    }
}
