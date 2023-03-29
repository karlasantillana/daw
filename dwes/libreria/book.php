<?php

    class Book extends ReadingMaterial{

        private $chapters;
        private $authors;
    

        function __construct ($id , $title , $pages ,$price , $chapters , $authors){
            parent::__construct($id , $title , $pages ,$price);
            $this -> chapters = $chapters;
            $this -> authors = $authors;

        }

        
        function get_chapthers(){
            return $this->chapters;
        }

        function set_chapthers($chapthers){
            $this->chapters = $chapthers;
        }


        function get_authors(){
            return $this->authors;
        }

        function set_authors($authors){
            $this ->authors=$authors;
        }

    }
?>