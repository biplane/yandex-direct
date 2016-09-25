<?php

namespace Biplane\Tests\YandexDirect\Auth;

use Biplane\YandexDirect\Auth\Authenticator;
use Buzz\Message\Form\FormRequest;
use Buzz\Message\Request;
use Buzz\Message\Response;

class AuthenticatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenApplicationIdIsEmpty()
    {
        new Authenticator(null, null);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSecretKeyIsEmpty()
    {
        new Authenticator('identifier', null);
    }

    public function testGetAuthUrlWhenPopupIsTrue()
    {
        $authenticator = new Authenticator('id', 'secr4t');

        $this->assertEquals(
            'https://oauth.yandex.ru/authorize?response_type=code&client_id=id&display=popup',
            $authenticator->getAuthUrl(true)
        );
    }

    public function testGetAuthUrlWhenPopupIsFalse()
    {
        $authenticator = new Authenticator('id', 'secr4t');

        $this->assertEquals(
            'https://oauth.yandex.ru/authorize?response_type=code&client_id=id',
            $authenticator->getAuthUrl()
        );
    }

    public function testAuthenticationShouldBeCompleted()
    {
        $client = $this->getMockBuilder('Buzz\Client\ClientInterface')->getMock();
        $authenticator = new Authenticator('Id', 's$cr4t', $client);

        $request = new FormRequest();
        $request->setHost('https://oauth.yandex.ru');
        $request->setResource('/token');
        $request->addFields(array(
            'grant_type'    => 'authorization_code',
            'code'          => 'c0de',
            'client_id'     => 'Id',
            'client_secret' => 's$cr4t',
        ));

        $client->expects($this->once())
            ->method('send')
            ->with($this->equalTo($request))
            ->willReturnCallback(function ($request, Response $response) {
                $response->addHeader('HTTP 200 OK');
                $response->addHeader('Content-type: application/json');
                $response->addHeader('Content-Length: 76');
                $response->setContent('{"access_token": "ea135929105c4f29a0f5117d2960926f", "expires_in": 2592000}');
            });

        $token = $authenticator->authenticate('c0de');

        $this->assertSame(
            array(
                'access_token' => 'ea135929105c4f29a0f5117d2960926f',
                'expires_in'   => 2592000,
            ),
            $token
        );
    }

    public function testUserInfoShouldBeFetched()
    {
        $client = $this->getMockBuilder('Buzz\Client\ClientInterface')->getMock();
        $authenticator = new Authenticator('Id', 's$cr4t', $client);

        $request = new Request();
        $request->fromUrl('https://login.yandex.ru/info?format=json');
        $request->addHeader('Authorization: OAuth access_token');

        $client->expects($this->once())
            ->method('send')
            ->with($this->equalTo($request))
            ->willReturnCallback(function ($request, Response $response) {
                $response->addHeader('HTTP 200 OK');
                $response->addHeader('Content-type: application/json');
                $response->addHeader('Content-Length: 120');
                $response->setContent('{"login":"vasya","default_email":"test@yandex.ru","id":"1000034426","emails":["test@yandex.ru","other-test@yandex.ru"]}');
            });

        $userInfo = $authenticator->getUserInfo('access_token');

        $this->assertNotNull($userInfo);
        $this->assertSame('1000034426', $userInfo->getId());
        $this->assertSame('vasya', $userInfo->getLogin());
    }
}
