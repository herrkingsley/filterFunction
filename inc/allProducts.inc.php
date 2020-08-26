<?php

/*
ALL PRODUCTS
$ring
$klocka
*/



$ring = new Product("diamant ring");
$ring->setDesc("Diamantring 0.5ct 18k guld");
$ring->setImg("img/ring.jpg");
$ring->setPrice("15000");
$ring->setId("123456");
// Tags
$ring->setTags("18k");
$ring->setTags("0.5ct");
$ring->setTags("guld");
$ring->setTags("ring");

$klocka = new Product("armbandsur");
$klocka->setDesc("Armbandsur Tissot mekaniskt");
$klocka->setImg("img/tissot.jpg");
$klocka->setPrice("2500");
$klocka->setId("783456");
// Tags
$klocka->setTags("Tissot");
$klocka->setTags("mekanisk");
$klocka->setTags("klocka");


$klocka2 = new Product("armbandsur");
$klocka2->setDesc("Armbandsur omega mekaniskt");
$klocka2->setImg("img/omega.jpg");
$klocka2->setPrice("5500");
$klocka2->setId("7845456");
// Tags
$klocka2->setTags("omega");
$klocka2->setTags("mekanisk");
$klocka2->setTags("klocka");

$allProducts = new Filter("All products");
$allProducts->setProducts($ring);
$allProducts->setProducts($klocka);
$allProducts->setProducts($klocka2);