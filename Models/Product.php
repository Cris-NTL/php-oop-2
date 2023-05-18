<?php
require_once __DIR__ . "/Category.php";

/**
 * ## Product Class
 * defines product class
 * @author Cristian Natoli>
 */
class Product
{
    function __construct(public string $name, public float $price, public Category $category, public string $image)
    {
    }

    function getDetails()
    {
        return "";
    }
}
