<?php

namespace Biplane\YandexDirect;

/**
 * Yandex Direct API events.
 *
 * @author Ural Davletshin
 */
final class Events
{
    /**
     * The BEFORE_REQUEST event occurs before requesting the Yandex Direct API method.
     */
    const BEFORE_REQUEST = 'biplane_yandex_direct.before_request';

    /**
     * The AFTER_REQUEST event occurs after requesting the Yandex Direct API method.
     */
    const AFTER_REQUEST = 'biplane_yandex_direct.after_request';

    /**
     * The FAIL_REQUEST event occurs when the Yandex Direct API method requesting failed.
     */
    const FAIL_REQUEST = 'biplane_yandex_direct.fail_request';
}
