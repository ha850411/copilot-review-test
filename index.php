<?php

/**
 * Cat class represents a cat animal.
 * 
 * This class provides methods to simulate cat behaviors.
 */
class Cat
{
    /**
     * Makes the cat meow.
     * 
     * @return string The sound a cat makes
     */
    public function meow()
    {
        return "Meow!";
    }
}

/**
 * Dog class represents a dog animal.
 * 
 * This class provides methods to simulate dog behaviors.
 */
class Dog
{
    /**
     * Makes the dog bark.
     * 
     * @return string The sound a dog makes
     */
    public function bark()
    {
        return "Woof!";
    }
}

$cat = new Cat();
$dog = new Dog();
echo $cat->meow();
echo $dog->bark();
