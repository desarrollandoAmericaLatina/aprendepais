<?php

    $path = "vista/";
    $path_css = "vista/css/";
    $path_images = "vista/images/";
    
    
    $jquery = "<script type='text/javascript' src='libs/jquery-1.7.1.min.js' ></script>";
    $jqueryUI = "<script type='text/javascript' src='libs/jquery-ui-1.8.16.custom.min.js'></script>";
    $jqueryCSS = "<link type='text/css' href='".$path_css."ui-darkness/jquery-ui-1.8.16.custom.css' rel='stylesheet' />";
    
    $jqueryDAL = "<script type='text/javascript' src='libs/jquery.dal.js'></script>";
    
    $proyecto_nombre = "SISTEMA DE APRENDISAJE COLABORATIVO";
    $proyecto_autor[1] = "PiLMee GaTes / Ivan Wilfredo Uriarte Uriarte.";
    $proyecto_autor[2] = "InterFactel / Eswin Palacios.";
    
    $proyecto_metas = "dal, sistema de preguntas";
    $proyectoCSS = "<link type='text/css' href='".$path_css."dal.css' rel='stylesheet' />";
    
    $proyecto_pie = "&copy; Todos los derechos reservados";
    
    function Mensaje($tipo,$mensaje){
       $data = '<div class="sms" id="alerta"><img src="vista/images/'.$tipo.'.png" width="30" /> <b>MENSAJE: </b><br />'.$mensaje.'</div><script> $(document).ready(function(){ $("#alerta").delay(2000).fadeOut(); });</script>';
        return $data;
    /*
        switch($tipo){
            case 0:
                    $data = '<div class="sms"><img src="vista/images/'.$tipo.'.png" width="30" /> <b>EXITO: </b><br />'.$mensaje.'</div>';
                    return $data;
                break;
            case 1:
                    $data = '<div class="sms"><img src="vista/images/'.$tipo.'.png" width="30" /> <b>ERROR: </b><br />'.$mensaje.'</div>';
                    return $data;
                break;
            case 2:
                    $data = '<div class="sms"><img src="vista/images/'.$tipo.'.png" width="30" /> <b>ADVERTENCIA: </b><br />'.$mensaje.'</div>';
                    return $data;
                break;
                
        }
    */
    }
    
?>