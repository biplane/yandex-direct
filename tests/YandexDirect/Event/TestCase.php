<?php

namespace Biplane\Tests\YandexDirect\Event;

/**
 * TestCase
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getUserMock()
    {
        return $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();
    }
}
