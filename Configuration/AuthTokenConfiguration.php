<?php

namespace Biplane\YandexDirectBundle\Configuration;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Provides implementation of {@link BaseConfiguration} for authorization by OAuth.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class AuthTokenConfiguration extends BaseConfiguration
{
    /**
     * Gets the access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->options['access_token'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHashCode()
    {
        return md5($this->options['access_token']);
    }

    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setRequired(array('access_token'));
        $resolver->setAllowedTypes(array(
            'access_token' => 'string'
        ));
    }
}
