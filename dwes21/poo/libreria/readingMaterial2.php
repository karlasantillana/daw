<?php
//include
include 'publisher.php'; 
//require
//require_once

abstract class ReadingMaterial{
    //al momento de señalar si son público, privado o static
    //se convierten en atributos
    private $id;
    private $title;
    private $pages;
    private $price;

    //1.para crear el objeto Editor, antes tengo q crear la variable
    private $atributoEditor;


    //constructor
    //3.además de los propios atributos de ReadingMaterial, hay que agregar en el constructor los atributos de publisher
    function __construct($id , $title , $pages , $price , $atributoEditor){
        $this -> id=$id;
        $this -> title=$title;
        $this -> pages=$pages;
        $this -> price=$price;

        //2.objeto private Editor de la clase Publisher
        $this -> atributoEditor = $atributoEditor;
    }

    //creo método getter y setter de cada atributo
    
    /**
     * Get de id
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set de id
     */
    public function set_id($id)
    {
        $this->id = $id;
    }

    /**
     * Get de title
     */
    public function get_title()
    {
        return $this->title;
    }

    /**
     * Set de title
     */
    public function set_title($title)
    {
        $this->title = $title;
    }

    /**
     * Get de pages
     */
    public function get_pages()
    {
        return $this->pages;
    }

    /**
     * Set de pages
     */
    public function set_pages($pages)
    {
        $this->pages = $pages;
    }

    /**
     * Get de price
     */
    public function get_price()
    {
        return $this->price;
    }

    /**
     * Set de price
     */
    public function set_price($price)
    {
        $this->price = $price;
    }
}
?>