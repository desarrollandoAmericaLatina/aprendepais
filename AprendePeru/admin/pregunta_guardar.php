<?php
    $id_pregunta=$_POST['txtpregunta'];
    $id_respuesta=$_POST['txtrespuesta'];
    $id_examen=$_POST['txtexamen'];
    include "../modelo/clsConexion.php";
    $sql="insert into pregunta (examen_id,pregunta_tipo,respuesta_tipo)
    values (".$id_examen.",".$id_pregunta.",".$id_respuesta.");";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
    echo "pregunta grabada correctamente"
?>