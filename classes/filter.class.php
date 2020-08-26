<?php 

class Filter {

    private $title;
    private $products = array();

    public function __construct($title){
        $this->setTitle($title);
    }
    
    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    // ----------- Storing all the objects in a Array

    public function setProducts($product){

        $this->products[] = $product;

    }

    public function getProducts($title) {

        return $this->products;
    }


// ----------- Finding a tag among all products

    public function filterByTag($tag) {
        $taggedProducts = array();

        
        foreach($this->products as $product){
            if(in_array(strtolower($tag), $product->getTags())) {
                $taggedProducts[] = $product;
            }
        }
        return $taggedProducts;
    }

//------------------ Reciving all tags------------

    public function getAllTags(){
        $i = 0;
        $allTagsArray = array();
        $allTags = "";

        foreach($this->products as $product){
            $i++;
            $array = $product->getTags();
            $lastElement = end($array);
            foreach($product->getTags() as $key => $value){
                $allTagsArray[] = $value;
            }
        }
        return $allTagsArray;

    }

}