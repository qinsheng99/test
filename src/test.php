<?php


namespace Mysql\Dict;


class test
{

    private $a;
    private $b;

    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }



    public function Test()
    {
        return $this;
    }
    
    public function A()
    {
        return $this->a;
    }
}
