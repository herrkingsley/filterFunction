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
        $allTags = array();

        foreach($this->products as $product){
            $allTags[] = $product->getTags();
        }
        return $allTags;
    }

}