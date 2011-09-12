<?php

namespace Biplane\YandexDirectBundle\Proxy\Client;

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Biplane\YandexDirectBundle\Converter\ConverterInterface;
use Biplane\YandexDirectBundle\Configuration\AuthTokenConfiguration;
use Biplane\YandexDirectBundle\Configuration\CertificateConfiguration;
use Biplane\YandexDirectBundle\Configuration\AbstractConfiguration;
use Biplane\YandexDirectBundle\Factory\ConverterFactory;
use Biplane\YandexDirectBundle\Exception\ApiException;

/**
 * JsonClient
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class JsonClient implements ClientInterface
{
    const ENDPOINT = 'https://soap.direct.yandex.ru/json-api/v4/';

    /**
     * @var \Biplane\YandexDirectBundle\Configuration\AbstractConfiguration
     */
    private $configuration;
    /**
     * @var array
     */
    private $curlOptions = array();
    /**
     * @var \Biplane\YandexDirectBundle\Proxy\Client\ConverterFactory
     */
    private $converterFactory;
    /**
     * @var \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    private $encoder;
    private $lastRequest;
    private $lastResponse;

    public function __construct(AbstractConfiguration $configuration, ConverterFactory $converterFactory, JsonEncoder $encoder)
    {
        $this->configuration = $configuration;
        $this->converterFactory = $converterFactory;
        $this->encoder = $encoder;

        if ($this->configuration->getProxyHost() !== null) {
            $this->setProxy($this->configuration->getProxyHost(), $this->configuration->getProxyPort());
        }

        if ($this->configuration instanceof CertificateConfiguration) {
            $this->setHttpsSertificate($this->configuration->getHttpsCertificate(), $this->configuration->getPassphrase());
        }
    }

    public function setProxy($host, $port, $user = null, $password = null)
    {
        $this->curlOptions[CURLOPT_PROXY] = $host;
        $this->curlOptions[CURLOPT_PROXYPORT] = $port;

        if ($user !== null && $password !== null) {
            $this->curlOptions[CURLOPT_PROXYUSERPWD] = sprintf('%s:%s', $user, $password);
        }
    }

    public function setHttpsSertificate($localSert, $passphrase)
    {
        $this->curlOptions[CURLOPT_SSLCERT] = $localSert;
        $this->curlOptions[CURLOPT_SSLCERTPASSWD] = $passphrase;
    }

    /**
     * @return string
     */
    function getLastResponse()
    {
        if ($this->lastResponse instanceof Response) {
            return (string)$this->lastResponse;
        }

        return null;
    }

    /**
     * @return string
     */
    function getLastRequest()
    {
        return $this->lastRequest;
    }

    /**
     * Вызывает метод веб-сервиса.
     *
     * @param string $methodName Имя метода.
     * @param array $arguments Массив аргументов для вызываемого метода.
     *
     * @throws ApiException
     * @throws \RuntimeException
     */
    public function invoke($methodName, array $arguments)
    {
        $param = array_shift($arguments);

        if (null !== $converter = $this->converterFactory->createForParameters($methodName)) {
            $param = $converter->toArray($param);
        }

        $jsonData = array(
            'method' => $methodName,
            'param' => $param,
            'locale' => $this->configuration->getLocale()
        );

        if ($this->configuration instanceof AuthTokenConfiguration) {
            $jsonData['login'] = $this->configuration->getLogin();
            $jsonData['application_id'] = $this->configuration->getApplicationId();
            $jsonData['token'] = $this->configuration->getToken();
        }

        $response = $this->doRequest($this->encoder->encode($jsonData, 'json'));
        $jsonData = $this->encoder->decode($response->getContent(), 'json');

        if (isset($jsonData['error_code'])) {
            $message = $jsonData['error_str'];

            if (!empty($jsonData['error_detail'])) {
                $message .= "\n" . $jsonData['error_detail'];
            }

            throw ApiException::create($message, $methodName, $jsonData['error_code']);
        }
        else if (!is_array($jsonData) || !isset($jsonData['data'])) {
            throw new \RuntimeException("Invalid response.\n" . $jsonData);
        }

        if (null !== $converter = $this->converterFactory->createForResult($methodName)) {
            return $converter->toContract($jsonData['data']);
        }

        return $jsonData['data'];
    }


    /**
     * @param string $content
     * @return Response
     *
     * @throws \RuntimeException
     */
    protected function doRequest($content)
    {
        $handler = curl_init();

        curl_setopt_array($handler, $this->curlOptions);
        curl_setopt($handler, CURLOPT_URL, self::ENDPOINT);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handler, CURLOPT_HEADER, true);
        curl_setopt($handler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handler, CURLOPT_POST, true);
        curl_setopt($handler, CURLOPT_POSTFIELDS, $content);

        $headers = array(
            'Content-Type: application/json; charset=utf-8'
        );
        curl_setopt($handler, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($handler, CURLINFO_HEADER_OUT, true);

        if (($curlResponse = curl_exec($handler)) === false) {
            throw new \RuntimeException(sprintf('cURL error: %s', curl_error($handler)), curl_errno($handler));
        }

        $this->lastRequest = curl_getinfo($handler, CURLINFO_HEADER_OUT) . "\n" . $content;
        $headerSize = curl_getinfo($handler, CURLINFO_HEADER_SIZE);

        // Check headers size
        if (($hsize = strpos($curlResponse, "\r\n\r\n") + 4) < $headerSize) {
            // Cut headers of proxy
            $curlResponse = substr($curlResponse, $hsize);
        }

        $headers = array();

        if (preg_match_all('#^([^:\r\n]+):\s+([^\r\n]+)#m', substr($curlResponse, 0, $headerSize), $matches)) {
            foreach ($matches[1] as $key => $name) {
                $headers[$name] = $matches[2][$key];
            }
        }

        $response = new Response(
            substr($curlResponse, $headerSize),
            curl_getinfo($handler, CURLINFO_HTTP_CODE),
            $headers
        );

        curl_close($handler);

        $this->lastResponse = $response;

        return $response;
    }
}