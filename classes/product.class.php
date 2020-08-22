<?php 

class Product {
    private $title;
    private $desc;
    private $img;
    private $price;
    private $id;
    private $tags = array();

    //--------- Getter and Setters--------------//
    public function __construct($title){
        $this->setTitle($title);
    }
    
    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setDesc($desc){
        $this->desc = $desc;
    }

    public function getDesc(){
        return $this->desc;
    }



}