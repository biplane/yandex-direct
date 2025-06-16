<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use Biplane\YandexDirect\Config\SoapOptions;

final class ConfigBuilder
{
    /** @var array<string, mixed> */
    private $options = [];

    public static function create(): ConfigBuilder
    {
        return new self();
    }

    public function setAccessToken(string $token): self
    {
        $this->options['access_token'] = $token;

        return $this;
    }

    public function setClientLogin(string $clientLogin): self
    {
        $this->options['client_login'] = $clientLogin;

        return $this;
    }

    public function setMasterToken(string $token): self
    {
        $this->options['master_token'] = $token;

        return $this;
    }

    public function setMemberToken(string $token): self
    {
        $this->options['member_token'] = $token;

        return $this;
    }

    public function setLocale(string $locale): self
    {
        $this->options['locale'] = $locale;

        return $this;
    }

    public function useSandbox(bool $enable = true): self
    {
        $this->options['sandbox'] = $enable;

        return $this;
    }

    public function useOperatorUnits(bool $enable = true): self
    {
        $this->options['use_operator_units'] = $enable;

        return $this;
    }

    public function setProxy(string $host, int $port, ?string $username = null, ?string $password = null): self
    {
        $this->options['proxy_host'] = $host;
        $this->options['proxy_port'] = $port;

        if ($username !== null) {
            $this->options['proxy_username'] = $username;
        }

        if ($password !== null) {
            $this->options['proxy_password'] = $password;
        }

        return $this;
    }

    /**
     * @deprecated Use `ApiServiceFactory` or `ApiServiceFactoryBuilder::setSoapOptions()` instead.
     */
    public function setSoapOptions(SoapOptions $options): self
    {
        $this->options['soap_options'] = $options;

        return $this;
    }

    public function getConfig(): Config
    {
        return new Config($this->options);
    }
}
