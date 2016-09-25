<?php

namespace Biplane\Wsdl2Php;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Wsdl2PhpGenerator\Config as BaseConfig;

/**
 * Config
 *
 * @author Denis Vasilev
 */
class Config extends BaseConfig
{
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'soapClientClass'   => 'SoapClient',
            'excludeTypes'      => array(),
            'excludeOperations' => array(),
            'renameType'        => function ($typeName) {
                return $typeName;
            }
        ));

        $resolver->setAllowedTypes('renameType', 'closure');

        $resolver->setRequired(array('baseSoapClientClass'));
    }
}
