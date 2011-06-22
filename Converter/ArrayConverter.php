<?php

namespace Biplane\YandexDirectBundle\Converter;

/**
 * Конвертер для массива контрактов одного типа.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ArrayConverter implements ConverterInterface
{
    private $childConverter;


    public function __construct(ConverterInterface $childConverter)
    {
        $this->childConverter = $childConverter;
    }

    /**
     * Преобразование контракта в ассоциативный массив.
     *
     * @param array $contract
     * @return array
     *
     * @throws \InvalidArgumentException
     */
    function toArray($contract)
    {
        if (!is_array($contract)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument should be array of a contract; recieved %s', gettype($contract))
            );
        }

        $result = array();

        foreach ($contract as $item) {
            $result[] = $this->childConverter->toArray($item);
        }

        return $result;
    }

    /**
     * Преобразование структуры в типизированный контракт.
     *
     * Структура может быть ассоциативным массивом или объектом типа \stdClass.
     *
     * @param array $struct
     * @return array
     *
     * @throws \InvalidArgumentException
     */
    function toContract($struct)
    {
        if ($struct === null) {
            return null;
        }
        
        if (!is_array($struct)) {
            throw new \InvalidArgumentException(sprintf(
                'Argument should be array of a struct; recieved %s', gettype($struct))
            );
        }

        $result = array();

        foreach ($struct as $item) {
            $result[] = $this->childConverter->toContract($item);
        }

        return $result;
    }
}