<?php

namespace Biplane\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Exception\LogicException;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseInterface;

/**
 * ReportResult.
 *
 * @author Denis Vasilev
 */
class ReportResult
{
    private $response;

    /**
     * Constructor.
     *
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * Gets the request identifier or null.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        if ($this->response->hasHeader('RequestId')) {
            return $this->response->getHeaderLine('RequestId');
        }

        return null;
    }

    /**
     * Gets an interval to check that report is ready, in seconds.
     *
     * @return int|null
     */
    public function retryIn()
    {
        if ($this->response->hasHeader('retryIn')) {
            return (int)$this->response->getHeader('retryIn')[0];
        }

        return null;
    }

    /**
     * Gets a quantity of offline-reports in queue.
     *
     * @return int|null
     */
    public function reportsInQueue()
    {
        if ($this->response->hasHeader('reportsInQueue')) {
            return (int)$this->response->getHeader('reportsInQueue')[0];
        }

        return null;
    }

    /**
     * Determines whether the report is ready for download.
     *
     * @return bool
     */
    public function isReady()
    {
        return $this->response->getStatusCode() === 200;
    }

    /**
     * Gets a content of the report.
     *
     * @return string
     *
     * @throws LogicException When the report is not ready yet
     */
    public function getData()
    {
        if (!$this->isReady()) {
            throw new LogicException('The report is not ready yet.');
        }

        return (string)$this->response->getBody();
    }

    /**
     * Saves the report to the specified destination.
     *
     * @param resource|string $destination
     *
     * @throws LogicException When the report is not ready yet
     * @throws \RuntimeException When a file could not be opened for write
     * @throws \InvalidArgumentException When the destination is invalid
     */
    public function save($destination)
    {
        if (!$this->isReady()) {
            throw new LogicException('The report is not ready yet.');
        }

        if (is_string($destination)) {
            $fh = fopen($destination, 'w');

            if (!is_resource($fh)) {
                throw new \RuntimeException(sprintf('Could not open file "%s" for write.', $destination));
            }

            $destination = $fh;
        } elseif (!is_resource($destination)) {
            throw new \InvalidArgumentException(
                'The destination must be string with path to a file or a file descriptor, but given "%s".',
                is_object($destination) ? get_class($destination) : gettype($destination)
            );
        }

        $destStream = Utils::streamFor($destination);
        Utils::copyToStream($this->response->getBody(), $destStream);
    }
}
