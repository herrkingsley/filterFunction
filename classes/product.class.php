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

        //--------- desc--------------//
    public function setDesc($desc){
        $this->desc = $desc;
    }

    public function getDesc(){
        return $this->desc;
    }
        //--------- Img--------------//
    public function setImg($img){
        $this->img = $img;
    }

    public function getImg(){
        return $this->img;
    }
            //--------- Price--------------//

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }

    //--------- Price--------------//

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    //--------- Tags--------------//

    public function setTags($tag){
        $this->tags[] = $tag;
    }

    public function getTags(){
        return $this->tags;
    }

}