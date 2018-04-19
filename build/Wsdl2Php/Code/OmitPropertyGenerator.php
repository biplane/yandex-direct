<?php

namespace Biplane\Build\Wsdl2Php\Code;

use Zend\Code\Generator\PropertyGenerator;

class OmitPropertyGenerator extends PropertyGenerator
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
        return '//' . $this->indentation . 'Can be omit.' . self::LINE_FEED
            . '//' . parent::generate();
    }
}
