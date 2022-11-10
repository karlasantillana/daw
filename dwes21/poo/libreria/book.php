<?php
class Book extends ReadingMaterial{
    private $chapter;
    private $author;

    //además de los propios atributos de book, hay que agregar en el constructor los atributos de readingMaterial y de publisher
    function __construct($chap, $aut , $id , $title , $pages , $price , $idP , $nameP , $addressP , $telephoneP , $websiteP){
    $this -> chapter=$chap;
    $this -> author=$aut;

    //atributos de readingMaterial y Publisher
    parent::__construct($id , $title , $pages , $price , $idP , $nameP , $addressP , $telephoneP , $websiteP);
    }


    //métodos getter y setter de CHAPTER
    function get_chapter(){
        return $this->chapter;
    }

    function set_chapter($chap){
        $this -> chapter=$chap;
    }

    
    //métodos getter y setter de AUTHOR
    function get_author(){
        return $this->author;
    }
    function set_author($aut){
        $this -> author=$aut;
    }
}
?>