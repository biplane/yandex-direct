<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\User;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    public function getLocales()
    {
        return array(
            array(User::LOCALE_EN),
            array(User::LOCALE_RU),
            array(User::LOCALE_UA)
        );
    }

    /**
     * @dataProvider getLocales
     */
    public function testLocaleShouldBeSet($locale)
    {

        $config = new User(array(
            'locale' => $locale,
            'access_token' => 'foo',
        ));

        $this->assertSame($locale, $config->getLocale());
    }

    public function testLoginShouldBeNormalized()
    {
        $config = new User(array(
            'login' => 'p.g.Ivanov',
            'access_token' => 'foo',
        ));

        $this->assertEquals('p-g-ivanov', $config->getLogin());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSetMasterTokenAndLoginIsMissing()
    {
        new User(array(
            'access_token' => 'foo',
            'master_token' => 'bar',
        ));
    }

    public function testMasterTokenShouldBeSet()
    {
        $config = new User(array(
            'master_token' => 'foo',
            'login'        => 'bar',
            'access_token' => 'token'
        ));

        $this->assertSame('foo', $config->getMasterToken());
        $this->assertSame('bar', $config->getLogin());
    }

    public function testFinanceTokenShouldBeCreated()
    {
        $config = new User(array(
            'master_token' => 't0ken',
            'login'        => 'log1n',
            'access_token' => 'foo'
        ));

        $this->assertEquals(
            'ca556216659079c5e21ae6647560b3d4ad94b950a2d613974ab934e0a9f54d7d',
            $config->createFinanceToken('foo', 1)
        );
    }

    public function testHashCodeShouldBeGenerated()
    {
        $user = new User(array(
            'access_token' => 'foo'
        ));

        $this->assertEquals('acbd18db4cc2f85cedef654fccc4a4d8', $user->getHashCode());
    }

    public function testEventDispatcherShouldBeCreatedWhenNotGiven()
    {
        $user = new User(array(
            'access_token' => 'foo'
        ));

        $this->assertInstanceOf('Symfony\Component\EventDispatcher\EventDispatcher', $user->getEventDispatcher());
    }

    public function testApiServiceShouldBeCreated()
    {
        $user = new User(array(
            'access_token' => 'foo'
        ));

        $this->assertInstanceOf('Biplane\YandexDirect\Api\V4\YandexApiService', $user->getApiService());
    }

    public function getServicesProxies()
    {
        return array(
            array('Biplane\YandexDirect\Api\V4\YandexApiService', 'getApiService'),
            array('Biplane\YandexDirect\Api\V5\AdGroups', 'getAdGroupsService'),
            array('Biplane\YandexDirect\Api\V5\Ads', 'getAdsService'),
            array('Biplane\YandexDirect\Api\V5\Bids', 'getBidsService'),
            array('Biplane\YandexDirect\Api\V5\Changes', 'getChangesService'),
            array('Biplane\YandexDirect\Api\V5\Keywords', 'getKeywordsService'),
            array('Biplane\YandexDirect\Api\V5\Sitelinks', 'getSitelinksService'),
            array('Biplane\YandexDirect\Api\V5\VCards', 'getVCardsService'),
        );
    }

    /**
     * @dataProvider getServicesProxies
     */
    public function testServiceProxyShouldBeInstantiated($serviceClass, $method)
    {
        $user = new User(array(
            'access_token' => 'foo'
        ));

        $this->assertInstanceOf($serviceClass, $user->$method());
    }

    public function testServiceProxyShouldBeCached()
    {
        $user = new User(array(
            'access_token' => 'foo'
        ));

        $proxy = $user->getAdsService();

        $this->assertSame($proxy, $user->getAdsService());
    }
}
