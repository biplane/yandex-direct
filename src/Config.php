<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use Biplane\YandexDirect\Config\SoapOptions;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;
use Symfony\Component\OptionsResolver\OptionConfigurator;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

use function class_exists;
use function is_string;
use function sprintf;
use function str_replace;
use function strpos;
use function strtolower;

final class Config
{
    public const API_4 = 4;
    public const API_5 = 5;

    private const LOCALE_ALIAS_API4 = [
        'tr' => 'en',
        'uk' => 'ua',
    ];
    private const LOCALE_ALIAS_API5 = ['ua' => 'uk'];

    /** @var array<string, mixed> */
    private $options;

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(array $options)
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);

        $this->options = $resolver->resolve($options);

        if ($this->options['master_token'] !== null && $this->options['client_login'] === null) {
            throw new InvalidArgumentException('Option "client_login" is required when the master token defined');
        }

        $proxyRequired = $this->options['proxy_host'] !== null || $this->options['proxy_port'] !== null;

        if ($proxyRequired && ($this->options['proxy_host'] === null || $this->options['proxy_port'] === null)) {
            throw new InvalidArgumentException('Both options "proxy_host" and "proxy_port" are required');
        }
    }

    public function getAccessToken(): string
    {
        return $this->options['access_token'];
    }

    public function getClientLogin(): ?string
    {
        return $this->options['client_login'];
    }

    public function getMasterToken(): ?string
    {
        return $this->options['master_token'];
    }

    public function getLocale(int $apiVersion): string
    {
        if ($apiVersion === self::API_4) {
            return self::LOCALE_ALIAS_API4[$this->options['locale']] ?? $this->options['locale'];
        }

        if ($apiVersion === self::API_5) {
            return self::LOCALE_ALIAS_API5[$this->options['locale']] ?? $this->options['locale'];
        }

        throw new \InvalidArgumentException(sprintf(
            'Unknown API version (%d). Use one of constants from %s: API_4 or API_5',
            $apiVersion,
            self::class
        ));
    }

    public function useSandbox(): bool
    {
        return $this->options['sandbox'];
    }

    public function useOperatorUnits(): bool
    {
        return $this->options['use_operator_units'];
    }

    public function getProxyHost(): ?string
    {
        return $this->options['proxy_host'];
    }

    public function getProxyPort(): ?int
    {
        return $this->options['proxy_port'];
    }

    public function getProxyUsername(): ?string
    {
        return $this->options['proxy_username'];
    }

    public function getProxyPassword(): ?string
    {
        return $this->options['proxy_password'];
    }

    public function proxyAuthenticationRequired(): bool
    {
        return $this->options['proxy_username'] !== null;
    }

    /**
     * @deprecated Use `ApiServiceFactory` instead.
     */
    public function getSoapOptions(): SoapOptions
    {
        return $this->options['soap_options'];
    }

    private function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setRequired(['access_token'])
            ->setDefaults([
                'locale' => 'en',
                'master_token' => null,
                'client_login' => null,
                'sandbox' => false,
                'use_operator_units' => false,
                'proxy_host' => null,
                'proxy_port' => null,
                'proxy_username' => null,
                'proxy_password' => null,
                'soap_options' => SoapOptions::default(),
            ])
            ->setAllowedValues('locale', ['en', 'ru', 'tr', 'ua', 'uk'])
            ->setAllowedTypes('access_token', 'string')
            ->setAllowedTypes('master_token', ['string', 'null'])
            ->setAllowedTypes('client_login', ['string', 'null'])
            ->setAllowedTypes('sandbox', 'bool')
            ->setAllowedTypes('use_operator_units', 'bool')
            ->setAllowedTypes('proxy_host', ['string', 'null'])
            ->setAllowedTypes('proxy_port', ['int', 'null'])
            ->setAllowedTypes('proxy_username', ['string', 'null'])
            ->setAllowedTypes('proxy_password', ['string', 'null'])
            ->setAllowedTypes('soap_options', [SoapOptions::class])
            ->setNormalizer('client_login', static function (Options $options, $value) {
                if (is_string($value)) {
                    if (strpos($value, '@') === false) {
                        $value = str_replace('.', '-', $value);
                    }

                    return strtolower($value);
                }

                return $value;
            });

        if (class_exists(OptionConfigurator::class)) {
            $resolver->setDeprecated('soap_options', 'biplane/yandex-direct', '5.15.0');
        } else {
            $resolver->setDeprecated('soap_options');
        }
    }
}
