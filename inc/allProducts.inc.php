<?php

/*
ALL PRODUCTS
$ring
$klocka
*/



$ring = new Product("diamant ring");
$ring->setDesc("Diamantring 0.5ct 18k guld");
$ring->setImg("https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-5_large.png?format=webp&v=1530129458");
$ring->setPrice("15000");
$ring->setId("123456");
// Tags
$ring->setTags("18k");
$ring->setTags("0.5ct");
$ring->setTags("guld");
$ring->setTags("ring");

$klocka = new Product("armbandsur");
$klocka->setDesc("Armbandsur Tissot mekaniskt");
$klocka->setImg("https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-5_large.png?format=webp&v=1530129458");
$klocka->setPrice("2500");
$klocka->setId("783456");
// Tags
$klocka->setTags("Tissot");
$klocka->setTags("mekanisk");
$klocka->setTags("klocka");


$klocka2 = new Product("armbandsur");
$klocka2->setDesc("Armbandsur Omega mekaniskt");
$klocka2->setImg("https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-5_large.png?format=webp&v=1530129458");
$klocka2->setPrice("5500");
$klocka2->setId("7845456");
// Tags
$klocka2->setTags("Omega");
$klocka2->setTags("mekanisk");
$klocka2->setTags("klocka");

$allProducts = new Filter("All products");
$allProducts->setProducts($ring);
$allProducts->setProducts($klocka);
$allProducts->setProducts($klocka2);