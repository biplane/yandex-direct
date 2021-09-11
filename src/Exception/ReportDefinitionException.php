<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Exception;

use libXMLError;
use RuntimeException;

class ReportDefinitionException extends RuntimeException
{
    /** @var array<libXMLError> */
    private $errors = [];

    /**
     * Creates a new instance of exception with errors of validation by schema.
     *
     * @param array<libXMLError> $errors
     */
    public static function schemaValidation(array $errors): self
    {
        $exception = new self('The report definition is not valid. For details, see list of errors.');
        $exception->errors = $errors;

        return $exception;
    }

    /**
     * @param array<libXMLError> $errors
     */
    public static function compileError(array $errors): self
    {
        $expection = new self('Could not create XML for the report definition. For details, see list of errors.');
        $expection->errors = $errors;

        return $expection;
    }

    /**
     * Gets an array of errors.
     *
     * @return array<libXMLError>
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
