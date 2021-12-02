<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use Biplane\YandexDirect\Exception\ReportNotReadyException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use RuntimeException;

use function error_get_last;
use function fopen;
use function is_resource;
use function sprintf;
use function stream_copy_to_stream;

final class ReportResult
{
    /** @var ResponseInterface */
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * Gets the report response as a stream.
     *
     * @throws ReportNotReadyException
     */
    public function getStream(): StreamInterface
    {
        $this->ensureReportCanBeRead();

        return $this->response->getBody();
    }

    /**
     * Gets the report response as string.
     *
     * @throws ReportNotReadyException
     */
    public function getAsString(): string
    {
        $this->ensureReportCanBeRead();

        $stream = $this->response->getBody();

        $stream->rewind();
        $content = $stream->getContents();
        $stream->close();

        return $content;
    }

    /**
     * Writes the content of downloaded report to the specified file.
     *
     * @throws ReportNotReadyException
     * @throws RuntimeException
     */
    public function saveToFile(string $destFile): void
    {
        $this->ensureReportCanBeRead();

        $this->response->getBody()->rewind();
        $source = $this->response->getBody()->detach();

        if ($source === null) {
            throw new RuntimeException('Unable to read stream.');
        }

        $dest = fopen($destFile, 'wb');

        if (! is_resource($dest)) {
            throw new RuntimeException(sprintf('Could not open file "%s".', $destFile));
        }

        if (stream_copy_to_stream($source, $dest) !== false) {
            return;
        }

        $message = 'Could not copy source stream to file';
        $lastError = error_get_last();

        if ($lastError !== null) {
            $message .= ': ' . $lastError['message'];
        }

        throw new RuntimeException($message);
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
     * Gets the recommended interval in seconds for checking the report status.
     */
    public function retryIn(): ?int
    {
        if ($this->response->hasHeader('retryIn')) {
            return (int)$this->response->getHeader('retryIn')[0];
        }

        return null;
    }

    /**
     * Gets the number of offline reports waiting to be generated.
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

    private function ensureReportCanBeRead(): void
    {
        if (! $this->isReady()) {
            throw new ReportNotReadyException('Report is not ready yet.');
        }
    }
}
