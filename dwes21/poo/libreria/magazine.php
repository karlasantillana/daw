<?php
class Magazine extends ReadingMaterial{
    private $additionalResources;

    //además de los propios atributos de Magazine, 
    // hay que agregar en el constructor los atributos de readingMaterial y de publisher
    function __construct($ar , $id , $title , $pages , $price , $atributoEditor){
        $this ->additionalResources=$ar;
        $this -> atributoEditor = $atributoEditor;

        //atributos de readingMaterial y Publisher
        parent::__construct($id , $title , $pages , $price , $atributoEditor);
    }

    //método getter y setter de addional resources
    function get_additionalResources(){
        return $this ->adddionalResources;
    }

    function set_additionalResources($ar){
        $this->addionalResources=$ar;
    }
}
?>