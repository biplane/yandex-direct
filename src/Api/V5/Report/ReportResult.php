<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Exception\LogicException;
use GuzzleHttp\Psr7\Utils;
use InvalidArgumentException;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

use function fopen;
use function get_class;
use function gettype;
use function is_object;
use function is_resource;
use function is_string;
use function sprintf;

class ReportResult
{
    /** @var ResponseInterface */
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * Gets the request identifier or null.
     */
    public function getRequestId(): ?string
    {
        if ($this->response->hasHeader('RequestId')) {
            return $this->response->getHeaderLine('RequestId');
        }

        return null;
    }

    /**
     * Gets an interval to check that report is ready, in seconds.
     */
    public function retryIn(): ?int
    {
        if ($this->response->hasHeader('retryIn')) {
            return (int)$this->response->getHeader('retryIn')[0];
        }

        return null;
    }

    /**
     * Gets a quantity of offline-reports in queue.
     */
    public function reportsInQueue(): ?int
    {
        if ($this->response->hasHeader('reportsInQueue')) {
            return (int)$this->response->getHeader('reportsInQueue')[0];
        }

        return null;
    }

    /**
     * Determines whether the report is ready for download.
     */
    public function isReady(): bool
    {
        return $this->response->getStatusCode() === 200;
    }

    /**
     * Gets a content of the report.
     *
     * @throws LogicException When the report is not ready yet.
     */
    public function getData(): string
    {
        if (! $this->isReady()) {
            throw new LogicException('The report is not ready yet.');
        }

        return (string)$this->response->getBody();
    }

    /**
     * Saves the report to the specified destination.
     *
     * @param resource|string $destination
     *
     * @throws LogicException When the report is not ready yet.
     * @throws RuntimeException When a file could not be opened for write.
     * @throws InvalidArgumentException When the destination is invalid.
     */
    public function save($destination): void
    {
        if (! $this->isReady()) {
            throw new LogicException('The report is not ready yet.');
        }

        if (is_string($destination)) {
            $fh = fopen($destination, 'wb');

            if (! is_resource($fh)) {
                throw new RuntimeException(sprintf('Could not open file "%s" for write.', $destination));
            }

            $destination = $fh;
        } elseif (! is_resource($destination)) {
            throw new InvalidArgumentException(
                'The destination must be string with path to a file or a file descriptor, but given "%s".',
                is_object($destination) ? get_class($destination) : gettype($destination)
            );
        }

        $destStream = Utils::streamFor($destination);
        Utils::copyToStream($this->response->getBody(), $destStream);
    }
}
