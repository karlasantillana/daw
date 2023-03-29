<?php

class Magazine extends ReadingMaterial{

    private $additionalResources;

    function __construct($id , $title , $pages , $price , $additionalResources){
        parent::__construct($id , $title , $pages ,$price);
        $this -> additionalResources = $additionalResources;
    }


    function get_additionalResources(){
        return $this->additionalResources;
    }

    function set_additionalResources($additionalResources){
        $this-> additionalResources = $additionalResources;
    }
}
?>