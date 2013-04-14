<?php
namespace MyNamespace;

class MyClass
{
    private $numbers;

    public function doSomething()
    {
        $this->numbers = array();
        $this->numbers[] = '42';
        $result = sprintf('The answer is %s', implode(" or ", $this->numbers));
        return $result;
    }
}
