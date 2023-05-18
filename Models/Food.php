<?php

require_once __DIR__ . "/Product.php";
class Food extends Product
{
    private $expiration;
    function __construct(String $_name, Float $_price, Category $_category, String $_image, String $_expiration)
    {
        parent::__construct($_name, $_price, $_category, $_image);
        $this->expiration = $_expiration;
    }
}
