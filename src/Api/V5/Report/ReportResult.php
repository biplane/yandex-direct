<?php

namespace Biplane\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Exception\LogicException;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7 as GuzzleFunc;

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
     */
    public function save($destination)
    {
        if (!$this->isReady()) {
            throw new LogicException('The report is not ready yet.');
        }

        $destStream = GuzzleFunc\stream_for($destination);
        GuzzleFunc\copy_to_stream($this->response->getBody(), $destStream);
    }
}
