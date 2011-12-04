<?php
    require_once("modulo/global.php");
    require_once("modelo/clsConexion.php");
    require_once("modelo/clsUsuario.php");
    
    require_once($path.'index.php');
    
    if($_POST){
        switch($_REQUEST["frm"]){
            
            case 'guardar':
                    $objUsuario = new Usuario();
                    $objUsuario->tipo = $_POST['optTipo'];
                    $objUsuario->nombre = mysql_real_escape_string($_POST['txtNombre']);
                    $objUsuario->usuario = mysql_real_escape_string($_POST['txtUsername']);
                    $objUsuario->clave = $_POST['txtClave'];
                    $objUsuario->email = mysql_real_escape_string($_POST['txtCorreo']);
                    
                    if($objUsuario->Registrar()){
                        $res_mensaje = $objUsuario->nombre . ', usted a sido registrado exitosamente.';
                        $res_tipo = 0;
                        header("location: index.php?t=$res_tipo&m=$res_mensaje");
                    }else{
                        $res_mensaje = 'Lo sentimos, usted no ha podido ser registrado.';
                        $res_tipo = 1;
                        header("location: index.php?t=$res_tipo&m=$res_mensaje");
                    }
                break;
        }
    }
    elseif($_GET){
        if(isset($_GET['t']) && isset($_GET['m'])){
            echo Mensaje($_GET['t'],$_GET['m']);
        }
    }
    

?>