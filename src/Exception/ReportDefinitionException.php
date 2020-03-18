<?php

namespace Biplane\YandexDirect\Exception;

/**
 * ReportDefinitionException.
 *
 * @author Denis Vasilev
 */
class ReportDefinitionException extends \RuntimeException
{
    private $errors = [];

    /**
     * Creates a new instance of exception with errors of validation by schema.
     *
     * @param \libXMLError[] $errors
     */
    public static function schemaValidation(array $errors): self
    {
        $exception = new self('The report definition is not valid. For details, see list of errors.');
        $exception->errors = $errors;

        return $exception;
    }

    public static function compileError(array $errors): self
    {
        $expection = new self('Could not create XML for the report definition. For details, see list of errors.');
        $expection->errors = $errors;

        return $expection;
    }

    /**
     * Gets an array of errors.
     *
     * @return \libXMLError[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
