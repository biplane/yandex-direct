<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;

/**
 * AuthTokenConfigurationTest
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class AuthTokenConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorAndGetters()
    {
        $configuration = new AuthTokenConfiguration('login', 'applicationId', 'token');

        $this->assertEquals('login', $configuration->getYandexLogin());
        $this->assertEquals('applicationId', $configuration->getApplicationId());
        $this->assertEquals('token', $configuration->getToken());
    }

    public function testExceptionIsRaisedWhenInvalidLogin()
    {
        $this->setExpectedException('InvalidArgumentException');

        new AuthTokenConfiguration(null, 'applicationId', 'token');
    }

    public function testExceptionIsRaisedWhenInvalidApplicationId()
    {
        $this->setExpectedException('InvalidArgumentException');

        new AuthTokenConfiguration('login', '', 'token');
    }

    public function testExceptionIsRaisedWhenInvalidToken()
    {
        $this->setExpectedException('InvalidArgumentException');

        new AuthTokenConfiguration('login', 'applicationId', null);
    }
}
