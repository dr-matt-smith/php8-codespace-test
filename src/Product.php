<?php

namespace Mattsmithdev;

class Product 
{
    public function __construct(
        private $name,
        private $price
    )
    {
        $this->setName($name);
    }

    public function setName($name)
    {
        if(empty($name)){
            throw new \Exception("empty name argument");
        } else 
            $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return "(Product) name: $this->name, price: $this->price";
    }
}
