<?php

include 'repetidor.php';

class Alumno{
    //si no se aclara, por defecto se colocan como public
    private $nombre;
    private $apellido;

    //para crear una constante //pertenece a toda la clase, no a la instancia en particular //no hace falta poner $
    const CICLO ="DAW";

    //variable estática
    private static $curso = "primero";

    //CONSTRUCTOR
    //utilizo el $this para acceder a objetos privados
    function __construct($nom , $ape){
        $this-> nombre=$nom; //aquí el $ lo lleva el this y no Nombre xq es una referencia
        $this-> apellido=$ape;
    }

    //para private $nombre
    //function getter y setter para acceder y modificar
    public function get_nombre(){
        return $this->nombre;
    }

    public function set_nombre($nom){
        $this->nombre=$nom;
    }

    
    //para private_static $curso //en lugar de $this es self y el modo de acceso es ::
    public static function get_curso(){
        return self::$curso;
    }

    public static function set_curso($curso){
        self::$curso=$curso;
    }
}
//creo instancia de un objeto
$alumno1 = new Alumno("Karla", "Santillana");
print_r($alumno1);                                                         
//para acceder a la constante se utiliza el nombre de la clase (Alumno), la nomenglatura :: y el nombre de la constante
echo "El nombre del alumno es " . $alumno1->get_nombre() . " y está matriculado en ". Alumno::CICLO . 
"en curso " . Alumno::get_curso();

Alumno::set_curso("segundo");
echo "El nombre del alumno es " . $alumno1->get_nombre() . " y está matriculado en ". Alumno::CICLO . 
"en curso " . Alumno::get_curso();

//llamar al fichero repetidor.php
//creo una instancia de tipo Repetidor
$alumno2 = new Repetidor("BBDD","juan","garcia");

echo "</br>";
print_r ($alumno2);

//para ver todo el contenido uso var_dump
echo "<br>";
echo "<br>";
echo "<br>";
var_dump ($alumno2);
?>