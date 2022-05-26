<?php

class Products {
    public $name;
    public $description;
    public $price;

    function __construct($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}