<?php require_once("../modulo/global.php"); ?>
<style>
    table{ width:900px; border:1px solid #0080ff; box-shadow:0 0 10px #93c9ff; background:#fff;font-family:tahoma;}
    th{ background:#93c9ff; font-family:tahoma; font-size:14px; padding:5px 5px 5px 5px; }
    td{ padding:3px 3px 3px 3px; font-size:12px; }
    h1{font-size:18px; font-family:tahoma; color:#ffffff; padding:5px 5px 5px 5px; text-align:center; background:#0080c0; width:300px; margin-left:auto; margin-right:auto; margin-top:10px;font-weight:bold; text-shadow:2px 2px 2px #000; border-radius:5px;}
    a.ex:link{ position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px; text-transform:uppercase; text-decoration:none; font-family:tahoma;}
    a.ex:hover{ position:relative; padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px; text-transform:uppercase; text-decoration:none;  font-family:tahoma;}
    a.ex:active{  position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px;  text-transform:uppercase; text-decoration:none; font-family:tahoma;}
    a.ex:visited{  position:relative;padding:10px 10px 10px 10px; background:#f00; text-align:center; color:#fff;border-radius:10px;  text-transform:uppercase; text-decoration:none; font-family:tahoma;}
    h2{ font-size:14px; background:#ffff80; color:#000; text-shadow:none; width:400px; margin-top:0; }
</style>
<section id="izq">
                    <figure>
                        <img src="<?php echo $path_images;?>marca_peru.jpg" alt="" />
                    </figure>
                </section>
<section id="der">
<section id="frmRegistro">
    <hgroup>
        <h1><span style="color:#f00;">APRE</span> NDE <span style="color:#f00;">PAIS</span></h1>
        <h2>REGISTRO DE NUEVO EXAMEN</h2>
        <h3></h3>
    </hgroup>
    <form id="frm" action="examen_guardar.php" method="post">
       <p>
        <label for="txttitulo">Titulo del Examen</label>
        <input name="txttitulo" id="txttitulo" type="text" value="" placeholder="Ingrese el titulo del examen" required />
       </p>
        <div style="text-align:right">
        <p>
            <button type="submit" style="font-size:15px;font-weight:normal;">Registrame</button>
        </p>
        </div>
    </form>
    
</section>
</section>