<?php

class Render {
    public static function renderProduct($product){

        echo "<h2>{$product->getTitle()}</h2>";
        echo "<p>{$product->getDesc()}</p>";
        echo "<img src='{$product->getImg()}' alt='' srcset=''>";
        echo "<p>{$product->getPrice()} kr</p>";
        echo "<p>{$product->getID()}</p>";
        echo "<br>";
        foreach($product->getTags() as $tag){
            echo "{$tag} <br>";
        }

    }
}


