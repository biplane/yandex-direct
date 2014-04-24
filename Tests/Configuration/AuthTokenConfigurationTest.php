<?php

namespace Biplane\YandexDirectBundle\Tests\Configuration;

use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;

/**
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class AuthTokenConfigurationTest extends \PHPUnit_Framework_TestCase
{
    public function testAccessTokenShouldBeSet()
    {
        $configuration = new AuthTokenConfiguration(array(
            'access_token' => 'access_t0ken'
        ));

        $this->assertSame(AuthTokenConfiguration::LOCALE_EN, $configuration->getLocale());
        $this->assertSame('access_t0ken', $configuration->getAccessToken());
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\MissingOptionsException
     * @expectedExceptionMessage The required option "access_token" is missing.
     */
    public function testThrowExceptionWhenAccessTokenIsEmpty()
    {
        new AuthTokenConfiguration();
    }

    public function testHashCodeShouldBeGenerated()
    {
        $configuration = new AuthTokenConfiguration(array(
            'access_token' => 'foo'
        ));

        $this->assertEquals('acbd18db4cc2f85cedef654fccc4a4d8', $configuration->getHashCode());
    }
}
