<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Helper;

use Biplane\YandexDirect\Soap\ApiSoapClient;
use InvalidArgumentException;
use RuntimeException;

use function chmod;
use function dirname;
use function file_put_contents;
use function is_dir;
use function is_writable;
use function mkdir;
use function preg_match;
use function sprintf;
use function substr;

/**
 * @deprecated
 */
class Dumper
{
    /** @var string */
    private $rootDir;

    /**
     * @param string $destDir The base distination path
     *
     * @throws RuntimeException
     */
    public function __construct(string $destDir)
    {
        $this->ensureDirectoryExists($destDir);

        $this->rootDir = $destDir;
    }

    /**
     * Dumps data of request and response to storage.
     *
     * @param string $requestId The request identifier
     * @param string $request   The request's content
     * @param string $response  The response's content
     *
     * @throws InvalidArgumentException
     */
    public function dump(string $requestId, string $request, string $response): void
    {
        if (empty($requestId)) {
            throw new InvalidArgumentException('The request ID cannot be empty.');
        }

        $dir = $this->rootDir . '/' . substr($requestId, 0, 2) . '/' . substr($requestId, 2, 1);

        $this->ensureDirectoryExists($dir);

        $this->saveFile($dir . '/' . $requestId . '_req.data', $request);
        $this->saveFile($dir . '/' . $requestId . '_resp.data', $response);
    }

    /**
     * Dumps data of the last request.
     */
    public function dumpLastRequest(ApiSoapClient $client): void
    {
        $requestId = $this->getRequestId($client);

        if ($requestId === null) {
            return;
        }

        $this->dump(
            $requestId,
            $client->__getLastRequestHeaders() . "\r\n\r\n" . $client->__getLastRequest(),
            $client->__getLastResponseHeaders() . "\r\n\r\n" . $client->__getLastResponse()
        );
    }

    private function ensureDirectoryExists(string $dir): void
    {
        if (! is_dir($dir)) {
            $this->ensureDirectoryExists(dirname($dir));

            if (! @mkdir($dir, 0775)) {
                throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
            }

            chmod($dir, 0775);
        }

        if (! is_writable($dir)) {
            throw new RuntimeException(sprintf('The directory "%s" is not writable.', $dir));
        }
    }

    private function saveFile(string $filename, string $content): void
    {
        file_put_contents($filename, $content);
        chmod($filename, 0664);
    }

    private function getRequestId(ApiSoapClient $soapClient): ?string
    {
        $headers = $soapClient->__getLastResponseHeaders();

        if ($headers !== '' && preg_match('/^RequestId: ([a-z\d]+)(\r|)$/im', $headers, $m)) {
            return $m[1];
        }

        return null;
    }
}
