<?php

class Cat
{
    public function meow()
    {
        return "Meow!";
    }
}

class Dog
{
    public function bark()
    {
        return "Woof!";
    }
}

$aaa = new Cat();
$bbb = new Dog();
echo $aaa->meow();
echo $bbb->bark();
