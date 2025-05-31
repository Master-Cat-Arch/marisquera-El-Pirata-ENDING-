<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceviche el Pirata</title>
    <link rel="icon" href="Img/icono.jpg">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <!-- Menu en la barra superior (en modo de computadoras) o en toda la pantalla (en modo de telefono) -->
    <header id="header" class="header__menu">
        <div class="header__container-menu">
            <!-- Contenedor de objetos para modo de telefono -->
            <input type="checkbox" id="open-menu"><!-- Indicado de estado del menu y mantenerlo abierto o cerrado -->
            <label for="open-menu" class="menu-open--nav" role="button">≡</label><!-- Activador o desactivador del checkbox -->
            <nav class="nav-menu" id="nav-menu">
                <div class="menu__container-logo2" id="menu__container-logo1">
                    <a href="index.php" onclick="CerrarInp()"><img class="menu__img-logo2" src="Img/logo.jpg" type="jpg"></a><!-- Imagen de el Logo para modo de telefono-->
                    <div class="logo2-text">
                        <!-- Titulo y nombre del chef principal -->
                        <label>Ceviche el Pirata</label><!-- Titulo del Menu -->
                        <a href="#">__Leonardo-Chef__</a><!-- Chef Leo -->
                    </div>
                </div>
                <hr>
                <ul class="menu__nav-list"> <!-- 😎🥲😐😶‍🌫️😜🥶🥵😱 -->
                    <!-- Menu de occiones -->
                <ul class="menu__nav-list">
                    <li class="nav__li-item">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a onclick="CerrarInp()" href="Pag-Menu/index__pag-menu.html">Menu </a>
                        <?php else: ?>
                            <a class="enlace-desactivado" href="#" onclick="alert('Debes iniciar sesión para acceder a Menù');return false;" title="Inicia sesión para acceder">Menu</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav__li-item">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a onclick="CerrarInp()" href="Pag-Contacto/inedx__pag-contacto.html">Contacto</a>
                        <?php else: ?>
                            <a class="enlace-desactivado" href="#" onclick="alert('Debes iniciar sesión para acceder a Contacto');return false;" title="Inicia sesión para acceder">Contacto</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav__li-item">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a onclick="CerrarInp()" href="Pag-Reservaciones/inedx__pag-reservaciones.html">Reservaciones</a>
                        <?php else: ?>
                            <a class="enlace-desactivado" href="#" onclick="alert('Debes iniciar sesión para acceder a Reservaciones');return false;" title="Inicia sesión para acceder">Reservaciones</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav__li-item">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a onclick="CerrarInp()" href="Pag-Categoria/inedx__pag-categoria.html">Categoria </a>
                        <?php else: ?>
                            <a class="enlace-desactivado" href="#" onclick="alert('Debes iniciar sesión para acceder a Categoria');return false;" title="Inicia sesión para acceder">Categoria</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav__li-item">
                        <?php if (isset($_SESSION['usuario'])): ?>
                            <a onclick="CerrarInp()" href="Pag-Acerca-de/inedx__pag-acerca-de.html">Acerca de</a>
                        <?php else: ?>
                            <a class="enlace-desactivado" href="#" onclick="alert('Debes iniciar sesión para acceder a Acerca de');return false;" title="Inicia sesión para acceder">Acerca de</a>
                        <?php endif; ?>
                    </li>
                        <!-- onclick="CerrarInp()": Sirve para cerrar el menu al hacer click en cada una de las occiones -->
                        <!-- Nuevo boton de Login para el inicio de seccion en usuarios o administradores -->
                        <li class="nav__li-item" id="li-login">
                        <details class="container-cuenta_login">
                            <summary class="img-cuenta_login">
                                <img src="Img/login.png" class="img-login" alt="Imagen Usuario">
                            </summary>
                            <div class="container-cuenta_info">
                                    <h6 class="nombre-cuenta" id="nom-cuenta">
                                        <?php if (isset($_SESSION['usuario'])): ?>
                                            Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?>
                                            <br>
                                            <span class="rol-cuenta">(<?php echo htmlspecialchars($_SESSION['rol']); ?>)</span>
                                        <?php else: ?>
                                            Invitado
                                        <?php endif; ?>
                                    </h6>
                                <hr>
                                 <div class="btns-accion_cuenta">
                                    <?php if (isset($_SESSION['usuario'])): ?>
                                        <a href="Login/logout.php"><input class="btn-cerrar_sesion" type="button" value="Cerrar sesión"></a>
                                    <?php else: ?>
                                        <a href="Login/index__login.html"><input class="btn-login" type="button" value="Login"></a>
                                    <?php endif; ?>
                                </div>
                             </div>
                        </details>

                        <!-- <details>
                            <summary><a href="Login/index__login.html"><input class="login" id="login" type="button" value="Login"></a></summary>
                            <a href="Login/logout.php"><input style="margin: 10px;" class="login" id="login" type="button" value="Cerrar sesión"></a>
                        </details> -->
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__container-logo1">
            <!-- Contenedor de el logo -->
            <a href="index.php" onclick="CerrarInp()"><img class="img-logo1" src="Img/logo_.png" type="png" alt="Logo de el Pirata" title="Logo de el Pirata"></a><!-- Imagen 2 para modo de computadora -->
        </div>
    </header>
    
    <!-- Seccion principal -->
    <section class="sec-especialidad">
        <img class="img-especialidad" id="img-especialidad" src="Img/img_carpa.jpg" alt="Imágen del platillo principal" title="Especialidad"><!-- Imagen principal de promocion del ceviche -->
        <div class="info-enpleado">
            <!-- Texto de promocion -->
            <h2>DELICIAS DE LA CASA</h2>
            <p><b>Mariscos el pirata les da la oportunidad de traer desde el mar hasta tu paladar.</b> 
                Les ofrecemos una muy grande variedad de productos marinos y terrestres como milanesas de pollo, hamburguesas, etc. </p>
            <div class="inf-leo">
                <!-- Contenedor de info del chef -->
                <img class="img-leo" id="img-leo" src="Img/img-leo.jpg" alt="imagen del chef" title="hay mi leonardito" oncontextmenu="CambioImg();return false"><!-- Imagen del chef -->
                <div>
                    <label id="chef-leo">Leonardo Alvarez Vega.</label> <!-- Nombre del chef -->
                    <p>Empleado del mes.</p><!-- Logro -->
                </div>
            </div>
        </div>
    </section> 

    <section class="container-inf-video"><!-- Pendiente a completar -->
        <div class="inf-video">
            <iframe class="video-leo" width="350" height="300" src="https://www.youtube.com/embed/oSP48y49JBc?si=V7ijDGgueL1ZEbeL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <h2>Información Adicional</h2>
            <p>Esta es una sección lateral con información adicional.</p>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
            </ul>
        </div>
    </section>

    <!-- Seccion de informacion sobre el local, historia, etc -->
    <main class="main__principal">
        <section class="sec-descripcion"><!-- Seccion de informacion -->
            <h1>MARISCOS EL PIRATA: viene de toda una familia de marisqueros y sazones</h1><!-- Titulo principal -->
            <p>Todo empezó por un local muy pequeño (Hera un triciclo) el cual a sus principios no tenía muchas ventas, pero con el paso de los días y de los años es lo que hoy conocemos como MARISCOS EL PIRATA el cual día con día se esfuerza y se concentra para satisfacer su paladar para que prueben el sazón de <b>MARISCOS EL PIRATA</b> que viene de generación en generación.</p>
            <p>Todos nuestros productos son de muy buena calidad para brindarles a ustedes una mayor experiencia inolvidable </p>
            <p>Nuestra familia de marisquero es muy conocida en todo Guanajuato tenemos varios locales como en Celaya que fue donde empezó toda la historia. mariscos playa azul, Mariscos Peter’s esos provienen de la familia </p>
        </section>

        <div class="main__container-img-ceviche">
            <!-- contenedor de una receta del chef -->
            <img class="img-ceviche" src="Img/img_caldo-camaron.png" alt="Caldo-de-Camaron"><!-- imagen de la receta -->
            <!-- describcion -->
            <p>Nuestro <b>Caldo de Camaron</b> es una receta eapecial de "Leonardo", preparada con camarones frescos, caldo de mariscos bien sazonados y un toque de especias que realizan su sabor. Acompañado con verduras tiernas y servido bien caliente, este platillo es perfecto para reconfortar el alma y disfrutar del autentico gusto de del mar. !Una delicia que no te puedes perder!</p>
        </div>
        
        <section class="sec-descripcion"><!-- Seccion de informacion -->
            <p>El Pirata les ofrece calidad y un menú amplio con un destacado numero de recetas y platos que valen cada centavo. Desde una balita de <b>$30</b> pesos para despertar el hambre, hasta una cacerola todo en uno, de <b>$250</b>, usssh que chulada.</p>
            <p>Realizado con Salsas caseras, tostadas caseras, camarón recién salido, todo con una buena calidad para que se lleven toda una experiencia inolvidable, micheladas para todos esos soldados caídos del día siguiente, balitas para que la cruda se les quite y anden como si nada  un remedio casero echo para ustedes, caldos de camarón un combo perfecto para esos soldados caídos.</p>
            <p>Filetes empanizados, camarones empanizados y mojarras </p>
            <p>Al mojo de mojo de ajo, a la diabla, zarandeados</p>
            <p>Ostiones en su concha, toda una variedad de productos para ofrecerles y se sientan como en casa</p>
        </section>
        
        <section class="sec-descripcion"><!-- Seccion de informacion -->
            <p>En Ceviche el Pirata, no solo preparamos comida, sino que creamos experiencias. Cada platillo esta inspiradoen la tradicion marina, repetando los sabores autenticos y combinandolos en un toque unico que nos distingue.</p>
            <p>Nos aseguramos de que cada ingrediente sea fresco y de la mejor calidad, para que cada bocado te transporte al verdadero espiritu del mar</p>
        </section>

        <section class="sec-descripcion"><!-- Seccion de informacion -->
            <p>Mas que un pequeño local, somos un espacio donde amigos y familiares se reunen para disfrutar de buena comida en un ambiente calido y acogedor. Y sea que busque un ceviche clasico, un caldo reconfortante o un platillo lleno de sabor, aqui siempre encontraras algo especial. !Ven y descubre el autentico sabor del mar con nosotros!</p>
        </section>
    </main>

    <!-- Imagen de la ubicacion del local principal -->
    <section id="mapa">
        <img src="Img/img_mapa1.png" alt="Mapa de ubicacion del local"><!-- imagen de la ubicacion -->
    </section>
    
    <!-- Pie de pagina -->
    <footer class="footer-pie_de_pagina">
        <div class="footer-pie1">
            <!-- Contenedor de seccion 1 -->
            <h6>Ceviche el Pirata</h6><!-- Nombre del local -->
            <hr>
            <div class="footer__container-img">
                <img class="logo_footer" src="Img/logo.jpg" alt="Logo de el local de ceviche"><!-- Logo -->
                <!-- Palabras de marketing -->
                <p>Plataforma de marketing, menus y distribucion de informacion sobre el local de "Ceviche el Pirata"</p>
            </div>
            <label>Redes Sociales:</label><!-- Sub titulo -->
            <ul>
                <!-- Redes sociales -->
                <li><a href="https://www.instagram.com/mari.scoselpirata?igsh=MTRiYXl3eHUwxbA==" target="_blank">--Instagram--</a></li>
                <li><a href="https://facebook.com/groups/672554158442758/" target="_blank">--Facebook--</a></li>
                <li><a href="https://wa.me/+524451396753?text=Hola%20Leonardos,%20Me%20gustaria..." target="_blank">--WhatsApp--</a></li>
                <li><a href="https://of.com/" target="_blank">--OnliFans--</a></li>
            </ul>
        </div>
        <div class="footer-pie2">
            <!-- Contenedor de seccion 2 -->
            <label>Creditos:</label>
            <ul>
                <!-- Participantes -->
                <li>Miguel A. Hernandez Mtz.</li><!-- Frontend -->
                <li>Osviel A. Garcia S.</li><!-- Backend -->
                <li>Leonardo Alvarez Vrg.</li><!-- Chef -->
                <br>
                <label>Maestro:</label>
                <li>Juan Fer. Perez Esp.</li><!-- Profesor -->
            </ul>
        </div>
    </footer>

<!--llamado al PHP de inicio de sesión-->
<?php
session_start();
$mostrarSecciones = isset($_SESSION['usuario']);
?>

</body>
</html>