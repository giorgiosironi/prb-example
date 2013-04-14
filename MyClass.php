<?php
namespace MyNamespace;

class MyClass
{
    private $numbers;

    public function doSomething()
    {
        $this->__construct();
        $result = sprintf('The answer is %s', implode(" or ", $this->numbers));
        return $result;
    }

    private function __construct()
    {
        $this->numbers = array();
        $this->numbers[] = '42';
    }
}
