

<?php
    $usuario_id=$_GET['usuario_id'];
    $id_examen=$_GET['examen_id'];
    include "../modelo/clsConexion.php";
    $sql="select * from pregunta where examen_id=".$id_examen."";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
    echo "<h1>Conteste las siguientes preguntas</h1><br />";
    ?><form name="frm" action="examen_resultado.php" method="post" > <?php
    $cant=0; //numero al azar
    $cantidad=1; //cantidad total de preguntas
    while($registro=$rs->fetchObject()) {
        $id_pregunta=$registro->pregunta_tipo;
        $id_respuesta=$registro->respuesta_tipo;
        //pregunta al azar de acuerdo al tipo de pregunta
        $sql2="select * from dato where tipodato_id=".$id_pregunta."";   
        $rs2=$cnx->query($sql2) or die(var_dump($cnx->errorInfo()));
        $cant=$rs2->rowCount();
        $aleatorio=rand(1,$cant); //conseguimos un id
        $contador=1; //numero de pregunta
        $sql2="select * from dato where tipodato_id=".$id_pregunta."";   
        $rs2=$cnx->query($sql2) or die(var_dump($cnx->errorInfo()));
        while($registro2=$rs2->fetchObject())     {
            if($aleatorio==$contador)
            {   echo "<h2><b>PREGUNTA: </b>'".$registro2->dato_descripcion."'";
                ?><input type="hidden" name="txtpregunta_<?php echo $cantidad;?>"
                value="<?php echo $registro2->dato_id; ?>"/><?php    
            }
            $contador+=1;                           }
        //mostrar texto
        $sql2="select * from tipodato where tipodato_id=".$id_respuesta."";   
        $rs2=$cnx->query($sql2) or die(var_dump($cnx->errorInfo()));
        while($registro2=$rs2->fetchObject())                             { 
            echo " le pertenece tal ".$registro2->tipodato_descripcion."</h2><br />";}
        //respuestas
        $sql2="select * from dato where tipodato_id=".$id_respuesta."";   
        $rs2=$cnx->query($sql2) or die(var_dump($cnx->errorInfo()));
        //mostrar las posibles respuestas
        
        while($registro2=$rs2->fetchObject()) { //echo '<section id="rpta">';  ?>
        <input type="radio" name="txtrespuesta_<?php echo $cantidad; ?>" value="<?php echo $registro2->dato_id; ?>">
        <?php echo '<span style="text-transform:capitalize;">'.$registro2->dato_descripcion."</span><br />"; } ?>
        <input type="radio" name="txtrespuesta_<?php echo $cantidad; ?>" value="0"> Ninguno
        <?php echo "<br/><br/>";  $cantidad+=1;//echo '</section>';
        }
        
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
    <input type="hidden" name="txtcantidad_preguntas" value="<?php echo $cant; ?>"/>
    <div style="text-align:center; margin-top:10px;">
    <button type="submit" style="font-size:13px;" >Enviar</button>
    </div>
    <input type="hidden"  name="txtusuario" value="<?php echo $usuario_id; ?>"/>
    <input type="hidden" name= "txtexamen" value="<?php echo $id_examen; ?>" />
    </form>
    </body>
</html>
    
    