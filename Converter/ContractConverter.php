<?php

namespace Biplane\YandexDirectBundle\Converter;

/**
 * Конвертер для контракта определенного типа.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ContractConverter implements ConverterInterface
{
    private $childrenConverters = array();
    /**
     * @var \ReflectionProperty[]
     */
    private $fields = array();
    /**
     * @var \ReflectionClass
     */
    private $reflection;
    private $prototype;


    public function __construct($contractClass)
    {
        $this->reflection = new \ReflectionClass($contractClass);

        $filter = \ReflectionProperty::IS_PRIVATE
            | \ReflectionProperty::IS_PROTECTED
            | \ReflectionProperty::IS_PUBLIC;

        foreach ($this->reflection->getProperties($filter) as $property) {
            $property->setAccessible(true);
            $this->fields[$property->getName()] = $property;
        }
    }

    /**
     * @param string $propertyName
     * @return bool
     */
    public function hasChildConverter($propertyName)
    {
        return array_key_exists($propertyName, $this->childrenConverters);
    }

    /**
     * @param string $propertyName
     * @return ConverterInterface
     */
    public function getChildConverter($propertyName)
    {
        return $this->childrenConverters[$propertyName];
    }

    /**
     * @param string $propertyName
     * @param ConverterInterface $converter
     * @return void
     */
    public function setChildConverter($propertyName, ConverterInterface $converter)
    {
        $this->childrenConverters[$propertyName] = $converter;
    }

    /**
     * Преобразование контракта в ассоциативный массив.
     *
     * @param mixed $contract
     * @return array
     *
     * @throws \InvalidArgumentException
     */
    function toArray($contract)
    {
        if (!is_object($contract)) {
            throw new \InvalidArgumentException(sprintf(
                'Contract should be object type; received %s.', gettype($contract))
            );
        }
        else if (!$this->reflection->isInstance($contract)) {
            throw new \InvalidArgumentException(sprintf(
                'Contract %s is not instance of %s.',
                get_class($contract), $this->reflection->getName())
            );
        }

        $result = array();

        foreach ($this->fields as $key => $reflectionProperty) {
            // Если зарегестрирован конвертер для текущего свойства,
            // то используем его; иначе получаем значение свойства как есть.
            if ($this->hasChildConverter($key)) {
                $result[$key] = $this->getChildConverter($key)->toArray(
                    $reflectionProperty->getValue($contract)
                );
            }
            else {
                $result[$key] = $reflectionProperty->getValue($contract);
            }
        }

        return $result;
    }

    /**
     * Преобразование структуры в типизированный контракт.
     *
     * Структура может быть ассоциативным массивом или объектом типа \stdClass.
     *
     * @param array|\stdClass $struct
     * @return mixed
     *
     * @throws \InvalidArgumentException
     * @throws \UnexpectedValueException
     */
    function toContract($struct)
    {
        if ($struct === null) {
            return null;
        }

        if ($struct instanceof \stdClass) {
            $struct = (array)$struct;
        }
        else if (!is_array($struct)){
            throw new \InvalidArgumentException(sprintf(
                'The struct type should be the array or \stdClass; received %s.', gettype($struct))
            );
        }

        $contract = $this->newInstance();

        foreach ($struct as $key => $value) {
            if (!array_key_exists($key, $this->fields)) {
                throw new \UnexpectedValueException(sprintf(
                    'Invalid key "%s" of the struct.', $key));    
            }

            if ($this->hasChildConverter($key)) {
                $value = $this->getChildConverter($key)->toContract($value);
            }

            $this->fields[$key]->setValue($contract, $value);
        }

        return $contract;
    }


    /**
     * @return object
     */
    private function newInstance()
    {
        if ($this->prototype === null) {
            $this->prototype = unserialize(sprintf('O:%d:"%s":0:{}',
                strlen($this->reflection->getName()),
                $this->reflection->getName()
            ));
        }

        return clone $this->prototype;
    }
}