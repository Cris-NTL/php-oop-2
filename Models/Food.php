<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/CheckExpiration.php";
class Food extends Product
{
    use CheckExpiration;
    private $expiration;
    function __construct(String $_name, Float $_price, Category $_category, String $_image, String $_expiration)
    {
        parent::__construct($_name, $_price, $_category, $_image);
        $this->expiration = $_expiration;
    }

    public function getExpiration()
    {
        try {
            return $this->checkExpiration();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
