<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
// var_dump($dog_category);
$cat_category = new Category("cat", "fa-solid fa-cat");
// var_dump($cat_category);

$my_cat = new Food("My Cat", 2.50, $cat_category, "https://m.media-amazon.com/images/I/71Tvyq+SmUL.jpg", "2023-08-21");
// var_dump($my_cat);
$my_dog = new Food("My Dog", 6.50, $dog_category, "https://happydog_it_sb.cstatic.io/440x440/f/69110/480x480/c90b13149a/hd-vet-new-product-slider-packshots-sensible-11kg-300g.png", "2023-4-14");
// var_dump($my_dog);

$duck = new Toy("Duck", "2.99", $dog_category, "https://cdn.shopify.com/s/files/1/0940/6942/products/duck.jpg?v=1600329317", "Wood", "Duck-Toy");
// var_dump($duck);

$mouse = new Toy("Mouse", "1.99", $cat_category, "https://5.imimg.com/data5/SELLER/Default/2021/2/LD/JE/UR/12304017/sticky-rat-toy-500x500.jpg", "Plastic", "Mouse-Toy");
// var_dump($mouse);

$products =
    [
        $my_cat,
        $my_dog,
        $duck,
        $mouse
    ];
