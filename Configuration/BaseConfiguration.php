<?php

namespace Biplane\YandexDirectBundle\Configuration;

use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Provides the base entity of configuration's profile.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class BaseConfiguration
{
    const LOCALE_RU = 'ru';
    const LOCALE_EN = 'en';
    const LOCALE_UA = 'ua';

    protected $options;

    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->setDefaultOptions($resolver);

        $this->options = $resolver->resolve($options);
    }

    /**
     * Gets the hash code of this object.
     *
     * @return string
     */
    abstract public function getHashCode();

    /**
     * Gets the yandex login.
     *
     * @return string
     */
    public function getYandexLogin()
    {
        return $this->options['login'];
    }

    /**
     * Gets the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->options['locale'];
    }

    /**
     * Gets the master token for financial operations.
     *
     * @return string
     */
    public function getMasterToken()
    {
        return $this->options['master_token'];
    }

    /**
     * Creates the finance token.
     *
     * @param string $methodName   The API method for which needed it token
     * @param int    $operationNum A number of operation
     *
     * @return string
     *
     * @throws \LogicException When the master token is empty
     */
    public function createFinanceToken($methodName, $operationNum)
    {
        if (empty($this->options['master_token'])) {
            throw new \LogicException('The finance token cannot be created when the master token is empty.');
        }

        if (empty($this->options['login'])) {
            throw new \LogicException('The finance token cannot be created when the login is empty.');
        }

        return hash('sha256', $this->options['master_token'] . $operationNum . $methodName . $this->options['login']);
    }

    /**
     * Sets the default options.
     *
     * @param OptionsResolverInterface $resolver
     */
    protected function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'locale'       => self::LOCALE_EN,
            'master_token' => null,
            'login'        => function (Options $options, $value) {
                if (!empty($options['master_token'])) {
                    throw new MissingOptionsException('The required option "login" is missing.');
                }

                return $value;
            }
        ));

        $resolver->setAllowedValues(array(
            'locale' => array(self::LOCALE_EN, self::LOCALE_RU, self::LOCALE_UA),
        ));

        $resolver->setAllowedTypes(array(
            'master_token' => array('null', 'string'),
            'login'        => array('null', 'string'),
        ));
    }
}
