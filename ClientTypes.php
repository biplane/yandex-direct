<?php

namespace Biplane\YandexDirectBundle;

/**
 * ClientTypes
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
final class ClientTypes
{
    /**
     * Взаимодействие с API Яндекс.Директа по протоколу SOAP.
     */
    const TYPE_SOAP = 'soap';

    /**
     * Взаимодействие с API Яндекс.Директа в формате JSON.
     */
    const TYPE_JSON = 'json';
}
