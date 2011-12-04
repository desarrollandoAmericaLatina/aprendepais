<?php require_once("../modulo/global.php"); ?>
<script>
$(document).ready(function(){
    $("button").button();
    $("#tipo").buttonset();
});
</script>
<section id="izq">
                    <figure>
                        <img src="<?php echo $path_images;?>marca_peru.jpg" alt="" />
                    </figure>
                </section>
<section id="der">
    
<section id="frmRegistro">
    <hgroup>
                        <h1><span style="color:#f00;">APRE</span> NDE <span style="color:#f00;">PAIS</span></h1>
                        <h2>REGISTRO DE NUEVO USUARIO</h2>
                        <h3></h3>
    </hgroup>
    <form id="frmNuevoUsuario" action="index.php" method="post">
        <input type="hidden" name="frm" id="frm"  value="guardar" />
                    <div class="group" id="tipo" style="position:relative; overflow:hidden; margin:auto; width:400px; ">
                        <label for="optProfe" style="font-size:13px; float:left;">Profesor</label>
                        <input type="radio" value="2" name="optTipo" id="optProfe" />
                        <label for="optEstudiante" style="font-size:13px; float:left;">Estudiante</label>
                        <input type="radio" value="3" name="optTipo" id="optEstudiante" />
                    </div>

     

        <input name="txtNombre" id="txtNombre" type="text" value="" placeholder="Ingrese sus nombres y apellidos completos" required />
        
        <input name="txtUsername" id="txtUsername"  type="text" value="" placeholder="Ingrese su nombre de usuario" required />
        
        <input name="txtClave" id="txtClave"  type="password" value="" placeholder="* * * * *" required />
        
        <input name="txtCorreo" id="txtCorreo"  type="email" value="" placeholder="Ingrese su correo electronico" required />
        
        <div style="text-align:right">
            <button type="submit" style="font-size:15px;font-weight:normal;">Registrame</button>
        </div>
        
    </form>
</section>
</section>