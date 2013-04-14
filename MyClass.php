<?php
namespace MyNamespace;

class MyClass
{
    public function doSomething()
    {
        $numbers = array();
        $numbers[] = '42';
        $result = sprintf('The answer is %s', implode(" or ", $numbers));
        return $result;
    }
}
