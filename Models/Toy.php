<?php

require_once __DIR__ . "/Product.php";
class Toy extends Product
{
    public $material;
    public $shape;

    function __construct(String $_name, Float $_price, Category $_category, String $_image, String $_material, String $_shape,)
    {
        parent::__construct($_name, $_price, $_category, $_image);
        $this->material = $_material;
        $this->shape = $_shape;
    }

    function getDetails()
    {
        return "{$this->material}, {$this->shape}";
    }
}
