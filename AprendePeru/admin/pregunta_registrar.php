<?php require_once("../modulo/global.php"); ?>
<?php
    $id_examen=$_GET['examen_id'];
    include "../modelo/clsConexion.php";
    $sql="select * from tipodato";   
    $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo()));
?>
<section id="izq">
                    <figure>
                        <img src="<?php echo $path_images;?>marca_peru.jpg" alt="" />
                    </figure>
                </section>
<section id="der">
<section id="frmRegistro">
    <form id="frm" action="pregunta_guardar.php" method="post">
    <input type="hidden" name="txtexamen" value="<?php echo $id_examen; ?>"/>
    <p>
        <label for="lblpregunta">Tipo de Dato de la Pregunta</label>
        <select id="txtpregunta" name="txtpregunta">
        <?php while($registro=$rs->fetchObject()) { ?>
        <OPTION VALUE='<?php echo "$registro->tipodato_id"?>'><?php echo "$registro->tipodato_descripcion"?></OPTION>
        <?php } ?>
        </select>
    </p>
    <?php $rs=$cnx->query($sql) or die(var_dump($cnx->errorInfo())); ?>
    <p>
        <label for="lblrespuesta">Tipo de Dato de la Respuesta</label>
        <select id="txtrespuesta" name="txtrespuesta">
        <?php while($registro=$rs->fetchObject()) { ?>
        <OPTION VALUE='<?php echo "$registro->tipodato_id"?>'><?php echo "$registro->tipodato_descripcion"?></OPTION>
        <?php } ?>
        </select>
    </p>
    <p>
        <button type="submit" style="font-size:15px;font-weight:normal;">Registrame</button>
    </p>
    </form>
    </form>
</section>
</section>