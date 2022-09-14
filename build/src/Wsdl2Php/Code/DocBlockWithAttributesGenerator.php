<?php

namespace Biplane\Build\Wsdl2Php\Code;

use Laminas\Code\Generator\DocBlockGenerator;

/**
 * Workaround to support class attributes
 */
final class DocBlockWithAttributesGenerator extends DocBlockGenerator
{
    /**
     * @var array<string>
     */
    private $attributes = [];

    /**
     * @return array<string>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array<string> $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * {@inheritDoc}
     */
    public function generate()
    {
        $output = parent::generate();

        foreach ($this->attributes as $attribute) {
            $output .= sprintf('#[%s]', $attribute) . self::LINE_FEED;
        }

        return $output;
    }
}
