<?php

namespace Mattsmithdev;

class Product 
{
    public function __construct(
        private $name,
        private $price
    )
    {}

    public function __toString()
    {
        return "(Product) name: $this->name, price: $this->price";
    }
}
