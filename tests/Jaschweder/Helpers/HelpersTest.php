<?php

class HelpersTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        putenv('JASCHWEDER_DEBUG=true');
    }

    public function testEnvFunctionExist()
    {
        $this->assertTrue(function_exists('env'));
    }

    public function testEnv()
    {
        putenv('FOO=bar');
        $this->assertEquals('bar', env('FOO'));
    }

    public function testDdFunctionExist()
    {
        $this->assertTrue(function_exists('dd'));
    }

    public function testDd()
    {
      $this->expectOutputString('string(11) "Lorem Ipsum"' . PHP_EOL);
        dd('Lorem Ipsum');
    }

    public function testDpFunctionExist()
    {
      $this->assertTrue(function_exists('dp'));
    }

    public function testDp()
    {
        $this->expectOutputString('Lorem Ipsum');
        dp('Lorem Ipsum');
    }
}
