<?php
namespace MyNamespace;

require_once 'MyClass.php';

class MyClassTest extends \PHPUnit_Framework_TestCase
{
    public function testTheAnswerIsCorrect()
    {
        $object = new MyClass();
        $this->assertEquals('The answer is 42', $object->doSomething());
    }
}
