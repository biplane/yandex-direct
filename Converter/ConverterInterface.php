<?php

namespace Biplane\YandexDirectBundle\Converter;

/**
 * ConverterInterface
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
interface ConverterInterface
{
    /**
     * Преобразование структуры в типизированный контракт.
     *
     * Структура может быть ассоциативным массивом или объектом типа \stdClass.
     *
     * @param array|\stdClass $struct
     * @return mixed
     */
    function toContract($struct);

    /**
     * Преобразование контракта в ассоциативный массив.
     *
     * @param mixed $contract
     * @return array
     */
    function toArray($contract);
}