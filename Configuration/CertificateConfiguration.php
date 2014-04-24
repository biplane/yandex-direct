<?php

namespace Biplane\YandexDirectBundle\Configuration;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Provides implementation of {@link BaseConfiguration} for authorization by SSL certificate.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class CertificateConfiguration extends BaseConfiguration
{
    /**
     * Constructor.
     *
     * @param array $options The options
     *
     * \InvalidArgumentException
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);

        if (!is_readable($this->options['cert_file'])) {
            throw new \InvalidArgumentException('Invalid HTTPS client certificate path.');
        }
    }

    /**
     * Gets HTTPS certificate.
     *
     * @return string
     */
    public function getHttpsCertificate()
    {
        return $this->options['cert_file'];
    }

    /**
     * Gets the passphrase.
     *
     * @return string
     */
    public function getPassphrase()
    {
        return $this->options['passphrase'];
    }

    /**
     * {@inheritdoc}
     */
    public function getHashCode()
    {
        return md5($this->options['cert_file']);
    }

    /**
     * {@inheritdoc}
     */
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setRequired(array('cert_file'));
        $resolver->setDefaults(array(
            'passphrase' => '',
        ));
    }
}
