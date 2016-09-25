<?php

namespace Biplane\YandexDirect\Auth;

/**
 * UserInfo
 *
 * @link http://api.yandex.ru/login/doc/dg/reference/response.xml
 *
 * @author Denis Vasilev
 */
class UserInfo
{
    private $data;

    /**
     * Constructor.
     *
     * @param array $data The raw data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Gets the identifier of Yandex's user.
     *
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
    }

    /**
     * Gets the username on Yandex.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->get('login');
    }

    private function get($key, $default = null)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }

        return $default;
    }
}
