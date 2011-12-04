<?php session_start(); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title><?php echo $proyecto_nombre; ?></title> 
            <?php echo $jqueryCSS.$jquery.$jqueryUI.$jqueryDAL.$proyectoCSS; ?>
            <script>
                $(document).ready(function(){
                    
                    $("a#bio").click(function(e){
                        e.preventDefault();
                        AbrirPagina("section#cuerpo","vista/bio.php");
                    });
                    $("a#regis").click(function(e){
                        e.preventDefault();
                        AbrirPagina("section#cuerpo","vista/regis.php");
                    });
                    $("a#in").click(function(e){
                        e.preventDefault();
                        AbrirPagina("section#cuerpo","vista/in.php");
                    });
                    
                    $("a#acerca").click(function(e){
                        e.preventDefault();
                        AbrirPagina("section#cuerpo","vista/acerca.php");
                    });
                    
                    $("a#adm").click(function(e){
                        e.preventDefault();
                        $("section#cuerpo").html("<iframe frameborder='0' width='1000' height='420'  src='admin/examen_listado.php' ></iframe>");
                    });
                    
                    $("a#salir").click(function(e){
                        e.preventDefault();
                        AbrirPagina("section#cuerpo","vista/salir.php");
                    });
                    
                    $("button").button();
                    
                });
            </script>
        </head>
        <body>
            <header id="cab">
                <section id="titulo">
                    <span class="titulo-pagina">APRENDE PAIS</span>
                    <figure id="logo">
                        <img src="<?php echo $path_images; ?>happy.png" alt="aprende pais" width="50" height="50" />
                    </figure>
                    <section id="menu">
                        <ul id="menu">
                            <li><a href="#bio" id="bio" style="background:#8000ff; box-shadow:0 0 20px #380071;">Bio</a></li>
                            
                            <?php if(!isset($_SESSION['login'])){ ?>
                            <li><a href="#regis" id="regis" style="background:#00ffff; box-shadow:0 0 20px #005e5e">Regis</a></li>
                            <li><a href="#in" id="in" style="background:#ff8000; box-shadow:0 0 20px #934900">In</a></li>
                            
                            <?php }else { ?>
                            
                            <li><a href="#adm" id="adm" style="background:#ff0000; box-shadow:0 0 20px #820000">Adminis</a></li>
                            <li><a href="#salir" id="salir" style="background:#00ffff; box-shadow:0 0 20px #005e5e">Salir</a></li>
                            <?php } ?>
                            <li><a href="#acerca" id="acerca" style="background:#00ff00; box-shadow:0 0 20px #004600">Acerca de?</a></li>
                            
                        </ul>
                    </section>
                </section>
            </header>
            <section id="cuerpo">
                <section id="izq">
                    <figure>
                        <img src="<?php echo $path_images;?>marca_peru.jpg" alt="" />
                    </figure>
                </section>
                <section id="der">
                    <hgroup>
                        <h1><span style="color:#f00;">APRE</span> NDE <span style="color:#f00;">PAIS</span></h1>
                        <h2></h2>
                        <h3></h3>
                    </hgroup>
                    <p>
                        <b>APRENDE PAIS</b>, es un solucion enfocado a la educacion ....
                    </p>
                </section>
            </section>
            <footer id="pie">
                <section class="pie">
                    
                </section>
            </footer>
        </body>
    </html>