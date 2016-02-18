<?php

namespace Biplane\Bundle\YandexDirectBundle;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * UserFactory
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class UserFactory
{
    private $dispatcher;
    private $defaultOptions;
    private $defaultUser;
    private $users = array();

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher  The event dispatcher
     * @param string                   $locale      The default locale
     * @param array|null               $defaultUser The options of the default user or null
     */
    public function __construct(EventDispatcherInterface $dispatcher, $locale, array $defaultUser = null)
    {
        $this->dispatcher = $dispatcher;
        $this->defaultOptions = array(
            'locale' => $locale
        );
        $this->defaultUser = $defaultUser;
    }

    /**
     * Enables the sandbox mode.
     */
    public function enableSandbox()
    {
        $this->defaultOptions['sandbox'] = true;
    }

    /**
     * Disables the sandbox mode.
     */
    public function disableSandbox()
    {
        $this->defaultOptions['sandbox'] = false;
    }

    /**
     * Gets User object for the specific options.
     *
     * When the options is null will be try to create the default user.
     *
     * @param array|null $options The options for user
     *
     * @return User
     */
    public function getUser(array $options = null)
    {
        if (null === $options) {
            if (is_array($this->defaultUser)) {
                return $this->getUser($this->defaultUser);
            }

            throw new \LogicException(
                'The default user is not available, options is not defined for it.' .
                ' You may set options in the bundle configuration biplane_yandex_direct.user'
            );
        }

        $key = isset($options['login']) ? $options['login'] : $options['access_token'];

        if (!isset($this->users[$key])) {
            $this->users[$key] = new User($options + $this->defaultOptions, $this->dispatcher);
        }

        return $this->users[$key];
    }
}
