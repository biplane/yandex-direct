<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Code;

use Laminas\Code\Generator\PropertyGenerator;

final class OmitPropertyGenerator extends PropertyGenerator
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->setVisibility(self::VISIBILITY_PROTECTED);
    }

    /**
     * {@inheritdoc}
     */
    public function generate()
    {
        return '//' . $this->indentation . 'Can be omitted.' . self::LINE_FEED
            . '//' . parent::generate();
    }
}
