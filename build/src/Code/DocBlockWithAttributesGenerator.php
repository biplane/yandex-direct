<?php

declare(strict_types=1);

namespace Biplane\Build\Code;

use Laminas\Code\Generator\DocBlockGenerator;
use Override;

use function sprintf;

/**
 * Workaround to support attributes.
 */
final class DocBlockWithAttributesGenerator extends DocBlockGenerator
{
    /** @var array<string> */
    private array $attributes = [];

    /** @return array<string> */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array<string> $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function generate()
    {
        $output = parent::generate();

        foreach ($this->getAttributes() as $attribute) {
            $output .= sprintf('%s#[%s]', $this->getIndentation(), $attribute) . self::LINE_FEED;
        }

        return $output;
    }
}
