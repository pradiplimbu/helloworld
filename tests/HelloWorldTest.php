<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testGreet(): void
    {
        $class = new \Pradip\App\HelloWorld();
        $this->assertSame('Hello World!', $class->greet());
    }

}
