<?php
    require_once("modulo/global.php");
    require_once("modelo/clsConexion.php");
    require_once("modelo/clsUsuario.php");
    
    require_once($path.'index.php');
    
?>
<script>
    $(document).ready(function(){
        $("section#cuerpo").html("<iframe frameborder='0' width='1000' height='420'  src='admin/examen_listado.php' ></iframe>");
    });
</script>