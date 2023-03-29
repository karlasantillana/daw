
<?php
    abstract class ReadingMaterial{

        private $id;
        private $title;
        private $pages;
        private $price;

        function __construct($id , $title , $pages , $price){

            $this -> id= $id;
            $this -> title = $title;
            $this -> $pages = $pages;
            $this -> $price = $price;
        }

        
        function get_id(){
            return $this->id;
        }

        function set_id($id){
            $this->id=$id;
        }


        function get_title(){
            return $this->title;
        }

        function set_title($title){
            $this->title=$title;
        }


        function get_pages(){
            return $this->pages;
        }

        function set_pages($pages){
            $this->pages=$pages;
        }


        function get_price(){
            return $this->price;
        }

        function set_price($price){
            $this->price=$price;
        }

    }
    
    
?>
