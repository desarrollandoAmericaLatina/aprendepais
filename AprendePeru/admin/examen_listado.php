<?php
    require_once ("../modelo/clsConexion.php");
    session_start();
    $sql="select * from examen";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
    $usuario_id=$_SESSION['idUsuario'];
    $usuario_tipo=$_SESSION['tipousuario'];
?>

<style>
    table{ width:900px; border:1px solid #0080ff; box-shadow:0 0 10px #93c9ff; background:#fff;font-family:tahoma;}
    th{ background:#93c9ff; font-family:tahoma; font-size:14px; padding:5px 5px 5px 5px; }
    td{ padding:3px 3px 3px 3px; font-size:12px; }
    h1{font-size:18px; font-family:tahoma; color:#ffffff; padding:5px 5px 5px 5px; text-align:center; background:#0080c0; width:300px; margin-left:auto; margin-right:auto; margin-top:10px;font-weight:bold; text-shadow:2px 2px 2px #000; border-radius:5px;}
    a.ex:link{ position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px; text-transform:uppercase; text-decoration:none; font-family:tahoma;}
    a.ex:hover{ position:relative; padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px; text-transform:uppercase; text-decoration:none;  font-family:tahoma;}
    a.ex:active{  position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px;  text-transform:uppercase; text-decoration:none; font-family:tahoma;}
    a.ex:visited{  position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px;  text-transform:uppercase; text-decoration:none; font-family:tahoma;}
</style>
<input name="txtusuario" type="hidden" value="<?php echo $id_usuario; ?>"/>
<h1>LISTADO DE EXAMENES</h1>
<table>
    <tr>
    <th style="width:30px;">Id</th>
    <th>Titulo</th>
    <?php if($usuario_tipo==3) { ?>
    <th style="width:80px;">Dar</th>
    <?php } else { ?>
    <th style="width:80px;">Preguntas</th>
    <?php } ?>
    </tr>
    <tr>
    <?php $i=1; while($registro=$rs->fetchObject()) { ?>     
        <td><?php echo $i;$i++; ?></td>
        <td><?php echo "$registro->examen_titulo"; ?></td>
         <?php if($usuario_tipo==3) { ?>
        <td>
            <a  href="examen_dar.php?examen_id=<?php echo "$registro->examen_id"?>&usuario_id=<?php echo $usuario_id; ?>">
            <img src="../vista/images/mod.png" alt="eliminar"/>
            </a>
        </td>
        <?php } else { ?>
        <td align="center" style="text-align:center;">
            <a style="margin:auto;"  href="pregunta_registrar.php?examen_id=<?php echo "$registro->examen_id"?>&usuario_id=<?php echo $usuario_id; ?>">
            <img src="../vista/images/mod.png" alt="eliminar"/>
            </a>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>
<?php if($usuario_tipo==2) { ?>
<br ><br >
<a class="ex" href="examen_registrar.php">registrar de examenes</a>
<?php } ?>