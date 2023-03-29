<?php

class Publisher{

    private $idP;
    private $nameP;
    private $addressP;
    private $telephoneP;
    private $websiteP;

    function __construct($idP , $nameP , $addressP , $telephoneP , $websiteP){
        $this -> idP = $idP;
        $this -> nameP = $nameP;
        $this -> addressP = $addressP;
        $this -> telephoneP = $telephoneP;
        $this -> websiteP = $websiteP;
    }


    function get_idP(){
        return $this->idP;
    }

    function set_idP($idP){
        $this->idP = $idP;
    }


    function get_nameP(){
        return $this->nameP;
    }

    function set_nameP($nameP){
        $this -> nameP = $nameP;
    }


    function get_addressP(){
        return $this -> addressP;
    }

    function set_addressP($addressP){
        $this->addressP = $addressP;
    }


    function get_telephoneP(){
        return $this -> telephoneP;
    }

    function set_telephoneP($telephoneP){
        $this->addressP = $telephoneP;
    }


    function get_websiteP(){
        return $this -> websiteP;
    }

    function set_websiteP($websiteP){
        $this->addressP = $websiteP;
    }



}
?>