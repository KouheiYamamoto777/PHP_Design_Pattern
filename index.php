<?php

// イントロダクション

abstract class ClassA
{
    private $attribute1;

    public abstract function operation1();

    public function operation2()
    {
        return true;
    }
}

class ClassB extends ClassA
{
    public function operation1()
    {

    }
}

interface InterfaceC
{
    public function oparation3(ClassA $param) : int;
}

class ClassD implements InterfaceC
{
    public function oparation3(ClassA $param)
    {
        return (int)$return_value;
    }
    
    public static function oparation4()
    {
        return new ClassE();
    }
}
