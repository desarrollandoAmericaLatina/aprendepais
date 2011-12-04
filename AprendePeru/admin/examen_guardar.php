<?php
    $titulo=$_POST['txttitulo'];
    //echo $titulo."y".$clave;
    include "../modelo/clsConexion.php";
    $id_usuario=2;
    $sql="insert into examen (examen_titulo,usuario_id) values ('".$titulo."',".$id_usuario.");";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
    echo "examen guardado correctamente<br />";
?>
<a href="examen_listado.php">listado de examenes</a>