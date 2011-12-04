<?php
        session_start();
    if($_POST){
        require_once("modulo/global.php");
        require_once("modelo/clsConexion.php");
        require_once("modelo/clsUsuario.php");
        $objUsuario = new Usuario();
        
       $objUsuario->tipo = $_POST['optTipo'];
       $objUsuario->usuario = mysql_real_escape_string($_POST['txtUsername']);
       $objUsuario->clave = $_POST['txtClave'];
       
       if($objUsuario->Login()){
            echo Mensaje(0,"Ingreso Exitoso");
            header("location: index.php");
       }else{
            echo Mensaje(3,"Error al iniciar sesion");
       }
    }else{
        echo Mensaje(3,"No se ha recibido ningun valor");
    }

?>