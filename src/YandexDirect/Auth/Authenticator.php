<?php

namespace Biplane\YandexDirect\Auth;

use Buzz\Client\ClientInterface;
use Buzz\Client\Curl;
use Buzz\Exception\ClientException;
use Buzz\Message\Form\FormRequest;
use Buzz\Message\Request;
use Buzz\Message\Response;

/**
 * Authenticator
 *
 * Documentation: http://api.yandex.ru/oauth/doc/dg/reference/obtain-access-token.xml
 *
 * @author Denis Vasilev <yethee@biplane.ru>
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
     * @throws Exception\AuthException
     * @throws Exception\NetworkException
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

        try {
            $this->client->send($request, $response);
        } catch (ClientException $ex) {
            throw new Exception\NetworkException($ex, $request, $response);
        }

        if ($response->getStatusCode() === 200) {
            return json_decode($response->getContent(), true);
        }

        throw new Exception\AuthException(
            'Could not authenticate. Reason: ' . $response->getContent(),
            $response->getStatusCode()
        );
    }

    /**
     * Gets an info of user by the access token.
     *
     * @param string $token The access token
     *
     * @return UserInfo
     *
     * @throws Exception\AuthException
     * @throws Exception\NetworkException
     */
    public function getUserInfo($token)
    {
        if (empty($token)) {
            throw new \InvalidArgumentException('The access token cannot be empty.');
        }

        $request = new Request();
        $response = new Response();

        $request->setHost('https://login.yandex.ru');
        $request->setResource('/info?format=json');
        $request->addHeader('Authorization: OAuth ' .$token);

        try {
            $this->client->send($request, $response);
        } catch (ClientException $ex) {
            throw new Exception\NetworkException($ex, $request, $response);
        }

        if ($response->getStatusCode() === 200) {
            return new UserInfo($this->jsonDecode($response->getContent()));
        }

        throw new Exception\AuthException(
            'Could not fetch user info. Reason: ' . $response->getContent(),
            $response->getStatusCode()
        );
    }

    /**
     * Decodes a JSON string.
     *
     * @param string $string The json string being decoded
     *
     * @return array
     */
    private function jsonDecode($string)
    {
        $decoded = json_decode($string, true);

        if (JSON_ERROR_NONE === $errNumber = json_last_error()) {
            return $decoded;
        }

        switch ($errNumber) {
            case JSON_ERROR_DEPTH:
                $message = 'Could not decode JSON, maximum stack depth exceeded.';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $message = 'Could not decode JSON, underflow or the nodes mismatch.';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $message = 'Could not decode JSON, unexpected control character found.';
                break;
            case JSON_ERROR_SYNTAX:
                $message = 'Could not decode JSON, syntax error - malformed JSON.';
                break;
            case JSON_ERROR_UTF8:
                $message = 'Could not decode JSON, malformed UTF-8 characters (incorrectly encoded?)';
                break;
            default:
                $message = 'Could not decode JSON.';
        }

        throw new \RuntimeException($message, $errNumber);
    }
}
