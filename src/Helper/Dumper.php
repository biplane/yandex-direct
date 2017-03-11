<?php

namespace Biplane\YandexDirect\Helper;

use Biplane\YandexDirect\Api\SoapClient;

/**
 * Dumper.
 *
 * @author Denis Vasilev
 */
class Dumper
{
    private $rootDir;

    /**
     * Constructor.
     *
     * @param string $destDir The base distination path
     *
     * @throws \RuntimeException
     */
    public function __construct($destDir)
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
     * @throws \InvalidArgumentException
     */
    public function dump($requestId, $request, $response)
    {
        if (empty($requestId)) {
            throw new \InvalidArgumentException('The request ID cannot be empty.');
        }

        $dir = $this->rootDir . '/' . substr($requestId, 0, 2) . '/' . substr($requestId, 2, 1);

        $this->ensureDirectoryExists($dir);

        $this->saveFile($dir . '/' . $requestId . '_req.data', $request);
        $this->saveFile($dir . '/' . $requestId . '_resp.data', $response);
    }

    /**
     * Dumps data of the last request.
     *
     * @param SoapClient $client
     */
    public function dumpLastRequest(SoapClient $client)
    {
        $requestId = $client->getRequestId();

        if (!empty($requestId)) {
            $this->dump($requestId, $client->getLastRequest(), $client->getLastResponse());
        }
    }

    private function ensureDirectoryExists($dir)
    {
        if (!is_dir($dir)) {
            $this->ensureDirectoryExists(dirname($dir));

            if (!@mkdir($dir, 0775)) {
                throw new \RuntimeException(sprintf('Could not create directory "%s".', $dir));
            }

            chmod($dir, 0775);
        }

        if (!is_writable($dir)) {
            throw new \RuntimeException(sprintf('The directory "%s" is not writable.', $dir));
        }
    }

    private function saveFile($filename, $content)
    {
        file_put_contents($filename, $content);
        chmod($filename, 0664);
    }
}
