<?php

declare(strict_types=1);

namespace Biplane\Build\Code;

use Laminas\Code\Generator\PropertyGenerator as BasePropertyGenerator;
use Override;

use function implode;

final class PropertyGenerator extends BasePropertyGenerator
{
    private bool $canBeOmitted = false;

    public function canBeOmitted(): bool
    {
        return $this->canBeOmitted;
    }

    public function setCanBeOmitted(bool $canBeOmitted): self
    {
        $this->canBeOmitted = $canBeOmitted;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function generate()
    {
        if ($this->canBeOmitted()) {
            $code = [
                '//' . $this->indentation . 'Can be omitted.',
                '//' . parent::generate(),
            ];

            return implode(self::LINE_FEED, $code);
        }

        return parent::generate();
    }
}
