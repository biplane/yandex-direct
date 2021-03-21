<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Wsdl2PhpGenerator\Config as BaseConfig;

class Config extends BaseConfig
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults([
            'soapClientClass' => 'SoapClient',
            'excludeTypes' => [],
            'excludeOperations' => [],
            'renameType' => static function (string $typeName): string {
                return $typeName;
            },
        ]);

        $resolver->setAllowedTypes('renameType', 'closure');
    }
}
