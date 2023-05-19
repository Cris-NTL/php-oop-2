<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/PetHouse.php";

$dog_category = new Category("dog", "fa-solid fa-dog");
// var_dump($dog_category);
$cat_category = new Category("cat", "fa-solid fa-cat");
// var_dump($cat_category);

$my_cat = new Food("My Cat", 2.50, $cat_category, "https://m.media-amazon.com/images/I/71Tvyq+SmUL.jpg", "2021-05-21");
// var_dump($my_cat);
$my_dog = new Food("My Dog", 6.50, $dog_category, "https://happydog_it_sb.cstatic.io/440x440/f/69110/480x480/c90b13149a/hd-vet-new-product-slider-packshots-sensible-11kg-300g.png", "2023-4-14");
// var_dump($my_dog);

$duck = new Toy("Duck", "2.99", $dog_category, "https://cdn.shopify.com/s/files/1/0940/6942/products/duck.jpg?v=1600329317", "Wood", "Duck-Toy");
// var_dump($duck);

$mouse = new Toy("Mouse", "1.99", $cat_category, "https://5.imimg.com/data5/SELLER/Default/2021/2/LD/JE/UR/12304017/sticky-rat-toy-500x500.jpg", "Plastic", "Mouse-Toy");
// var_dump($mouse);

$dog_house = new PetHouse("Dog House", "49.90", $dog_category, "https://media.istockphoto.com/id/516461357/it/foto/carino-carlino-cane-in-the-dog-house.jpg?s=612x612&w=0&k=20&c=BOkkwx0Sri9LdEWa6vWvTYEJdeL9fuimCG5qkW2mnVg=", "Wood", "Pet-House");
$dog_house1 = new PetHouse("Dog House", "39.99", $dog_category, "https://m.media-amazon.com/images/I/71NYH0alGAS.jpg", "Plastic", "Pet-House");

$cat_house = new PetHouse("Cat House", "29.99", $cat_category, "https://secure.img1-cg.wfcdn.com/im/13845511/compr-r85/1516/151632373/outdoor-cat-house.jpg", "Plastic", "Pet-House");
$cat_house1 = new PetHouse("Cat House", "69.99", $cat_category, "https://5.imimg.com/data5/SELLER/Default/2021/3/CJ/QH/BK/124991817/wooden-cat-house-small--1000x1000.jpg", "Wood", "Pet-House");

$products =
    [
        $my_cat,
        $my_dog,
        $duck,
        $mouse,
        $dog_house,
        $cat_house,
        $dog_house1,
        $cat_house1,
    ];
