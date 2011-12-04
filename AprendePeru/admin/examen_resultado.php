<?php require_once("../modulo/global.php"); ?>
<?php
    include "../modelo/clsConexion.php";
    
    $examen_id=$_POST['txtexamen'];;
    $usuario_id=$_POST['txtusuario'];
    $cant=$_POST['txtcantidad_preguntas'];
    $puntaje=0;
    for($i=1;$i<=$cant;$i++)
    {
        $pregunta=$_POST['txtpregunta_'.$i];
        $respuesta=$_POST['txtrespuesta_'.$i];
        //echo "mando : ".$pregunta." y ".$respuesta;
        $sql="select * from detalle_dato where dato_padre=".$pregunta." and dato_hijo=".$respuesta."";   
        $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
        $cant=$rs->rowCount();
        if($cant==0)
        {
            $sql="select * from detalle_dato where dato_hijo=".$pregunta." and dato_padre=".$respuesta."";   
            $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
            $cant=$rs->rowCount();
        }
        if($cant>0)
            $puntaje+=1;
        //si respuesta correcta        
    }
    echo "puntaje : ".$puntaje;
    
    $sql="insert into detalle_examen (examen_id,usuario_id,puntaje) values (".$examen_id.",".$usuario_id.",".$puntaje.")";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
?>
<html>
    <head>
        <link type='text/css' href='../vista/css/ui-darkness/jquery-ui-1.8.16.custom.css' rel='stylesheet' />
        <script type='text/javascript' src='../libs/jquery-1.7.1.min.js' ></script>
        <script type='text/javascript' src='../libs/jquery-ui-1.8.16.custom.min.js'></script>
            
        <script>
            $(document).ready(function(){
                $("button").button();
            });
        </script>
        
        <style>
            button{ font-size:13px; }
            table{ width:900px; border:1px solid #0080ff; box-shadow:0 0 10px #93c9ff; background:#fff;font-family:tahoma;}
            th{ background:#93c9ff; font-family:tahoma; font-size:14px; padding:5px 5px 5px 5px; }
            td{ padding:3px 3px 3px 3px; font-size:12px; }
            h1,h2{font-size:18px; font-family:tahoma; color:#ffffff; padding:5px 5px 5px 5px; text-align:center; background:#0080c0; width:350px; margin-left:auto; margin-right:auto; margin-top:10px;font-weight:bold; text-shadow:2px 2px 2px #000; border-radius:5px;}
            h2{ font-size:14px; background:#ffff80; color:#000; text-shadow:none; width:400px; margin-top:0; }
            section#rpta{position:relative; overflow:hidden; margin:auto; border:1px solid #ccc; width:200px; padding:10px 10px 10px 10px;}
            input[type=radio]{ padding:5px 5px 5px 5px; }
        </style>
    </head>
    <body>
        <button type="button" onclick="location.href='examen_listado.php';">Volver </button>
    </body>
</html>