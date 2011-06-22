<?php

namespace Biplane\YandexDirectBundle\Tests\Converter\Fixtures;

/**
 * SimpleContract
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class SimpleContract 
{
    private $FirstProperty;
    protected $secondProperty;
    public $third_property;

    public function getFirstProperty()
    {
        return $this->FirstProperty;
    }

    public function getSecondProperty()
    {
        return $this->secondProperty;
    }
}