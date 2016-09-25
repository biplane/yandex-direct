<?php

namespace Biplane\Tests\SysV;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (false !== strpos(PHP_OS, 'WIN')) {
            $this->markTestSkipped('Test is available only in *nix platform.');
        }
    }
}
