<?php

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello World', $helloWorld->hello());
    }

    public function testHello()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }
}

