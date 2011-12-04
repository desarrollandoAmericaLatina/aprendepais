<?php

    //class Conexion extends PDO{
        
	$gestor="mysql";
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$base="bdAprendePais";
	
	//$cad = "$gestor:host=$servidor;dbname=$base";
        //$cad = "mysql:host=localhost;dbname='bdAprendePais'";
        
        //$cad  = new PDO($this->cad,$this->usuario,$this->clave);
	$cad="$gestor:host=$servidor;dbname=$base";
	$cnx = new PDO($cad,$usuario,$clave);
    /*   
        function __construct(){
            return  $this->cnx;
        }
	
        
    }
    */
    
?>