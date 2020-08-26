<?php

class Render {



    public static function renderProduct($product){
        
    echo "<div class='product'>
        <img class='item-full product__img' src='{$product->getImg()}'>
        <div class='product__info'>
            <p class='item product__title'>{$product->getTitle()}</p>
            <p class='item product__price'>{$product->getPrice()} kr</p>
            <div class='break'></div>
            <p class='item product__desc'>{$product->getDesc()}</p>
            <p class='item product__desc'>" . self::renderTags($product) . "</p>
        </div>   
    </div>";
    
    }

    public function renderTags($product) {
       $output ="";
        foreach($product->getTags() as $key => $tag){
           $output .= "<a href='#'>{$tag}</a>";
           if($key < (count($product->getTags()) - 1 )) {
            $output .= ", ";
           }
        }
        return $output;
    }

    public static function renderList($list){
        foreach($list as $product){
            self::renderProduct($product);
        }
    }
}


