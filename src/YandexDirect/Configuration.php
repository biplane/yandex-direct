<?php

namespace Biplane\YandexDirect;

use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Provides configuration for API services.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Configuration
{
    const LOCALE_RU = 'ru';
    const LOCALE_EN = 'en';
    const LOCALE_UA = 'ua';

    private $options;

    /**
     * Constructor.
     *
     * @param array $options The options
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->setDefaultOptions($resolver);

        $this->options = $resolver->resolve($options);

        if (!empty($this->options['master_token']) && empty($this->options['login'])) {
            throw new \InvalidArgumentException('The login cannot be empty when the master token is set.');
        }
    }

    /**
     * Gets the hash code of this object.
     *
     * @return string
     */
    public function getHashCode()
    {
        return md5($this->options['access_token']);
    }

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
     * Gets the login.
     *
     * @return string
     */
    public function getLogin()
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
     * @param OptionsResolver $resolver
     */
    protected function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setRequired(array('access_token'))
            ->setDefaults(array(
                'locale'       => self::LOCALE_EN,
                'master_token' => null,
                'login'        => null,
            ))
            ->setAllowedValues(array(
                'locale' => array(self::LOCALE_EN, self::LOCALE_RU, self::LOCALE_UA)
            ))
            ->setAllowedTypes(array(
                'master_token' => array('null', 'string'),
                'login'        => array('null', 'string'),
                'access_token' => array('string')
            ))
            // Если логин пользователя содержит точки и символы верхнего регистра (заглавные буквы),
            // то для получения нормализованного логина их следует заменить, соответственно, дефисами
            // и символами нижнего регистра.
            // http://api.yandex.ru/direct/doc/concepts/finance.xml#access
            ->setNormalizers(array(
                'login' => function (Options $options, $value) {
                    if (is_string($value)) {
                        return strtolower(str_replace('.', '-', $value));
                    }

                    return $value;
                }
            ));
    }
}
