<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Exception\AuthException;
use Buzz\Client\ClientInterface;
use Buzz\Client\Curl;
use Buzz\Message\Form\FormRequest;
use Buzz\Message\Response;

/**
 * Authenticator
 *
 * Documentation: http://api.yandex.ru/oauth/doc/dg/reference/obtain-access-token.xml
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class Authenticator
{
    const BASEURL = 'https://oauth.yandex.ru';

    private $client;
    private $appId;
    private $appSecret;

    /**
     * Constructor.
     *
     * @param string          $appId     The identifier of application
     * @param string          $appSecret The secret key of application
     * @param ClientInterface $client    The backend
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($appId, $appSecret, ClientInterface $client = null)
    {
        if (empty($appId)) {
            throw new \InvalidArgumentException('The identifier of application cannot be empty.');
        }

        if (empty($appSecret)) {
            throw new \InvalidArgumentException('The secret key of application cannot be empty.');
        }

        if ($client === null) {
            $client = new Curl();
        }

        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->client = $client;
    }

    /**
     * Gets the auth url to get the authorization code.
     *
     * @param bool $popup If true, will be added ``display=popup`` parameter
     *
     * @return string
     */
    public function getAuthUrl($popup = false)
    {
        $url = self::BASEURL . '/authorize?response_type=code&client_id=' . $this->appId;

        if ($popup) {
            $url .= '&display=popup';
        }

        return $url;
    }

    /**
     * Authenticate on OAuth server with the specific authorization code.
     *
     * @param string $code The authorization code
     *
     * @return array The struct array('access_token' => string, 'expires_in' => integer)
     *
     * @throws AuthException
     */
    public function authenticate($code)
    {
        $request = new FormRequest();
        $response = new Response();

        $request->setHost(self::BASEURL);
        $request->setResource('/token');
        $request->setField('grant_type', 'authorization_code');
        $request->setField('code', $code);
        $request->setField('client_id', $this->appId);
        $request->setField('client_secret', $this->appSecret);

        $this->client->send($request, $response);

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getContent(), true);
        }

        throw new AuthException(
            'Could not authenticate. Reason: ' . $response->getContent(),
            $response->getStatusCode()
        );
    }
}
