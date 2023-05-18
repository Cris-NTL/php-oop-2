<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
// var_dump($dog_category);
$cat_category = new Category("cat", "fa-solid fa-cat");
// var_dump($cat_category);

$my_cat = new Food("My Cat", 2, $cat_category, "", "2023-08-21");
// var_dump($my_cat);
$my_dog = new Food("My Dog", 3, $dog_category, "", "2023-4-14");
// var_dump($my_dog);

$duck = new Toy("Duck", "2.99", $dog_category, "", "wood", "duck");
// var_dump($duck);

$mouse = new Toy("Mouse", "1.99", $cat_category, "", "plastic", "mouse");
// var_dump($mouse);

$products =
    [
        $my_cat,
        $my_dog,
        $duck,
        $mouse
    ];
