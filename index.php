<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evelyn Farmasi</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header id="cabecera">
        <input type="checkbox" id="btn-menu">
        <label for="btn_menu">
            <img src="#" alt="" class="imgmenu">
        </label>
        <nav id="navbar">
            <div class="contenedornav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>

            </div>

        </nav>
        <div class="contenedor-cabecera">
            <div class="texto-inicio">
                <h3>Evelyn Morales</h3>
                <h1>Farmasi</h1>
                <p>Me preocupo por tu desarrollo personal y profesional, por ello pongo a tu disposición
                    una serie de videos en los cuales encontraras lo necesario para iniciarte y asi poder
                    acompañarte a lo largo de tu crecimiento.</p>

            </div>
            <div class="imagen-inicio">
                <img src="illustraciones/eve-portada.png" alt="">
            </div>
        </div>



    </header>
    <section id="mi-cuenta">
        <div class="imagen-cuenta">
            <img src="illustraciones/imagen-cuenta.png" alt="">
        </div>
        <div class="texto-cuenta">
            <h2>Mi cuenta</h2>
            <h3>Farmasi</h3>
            <p>Todo lo que necesitas saber cuando te inicias en Farmasi
                esta aqui.
                desde entrar a tu perfil hasta realizar un pedido.</p>
                <a href="cuenta.html">Entrar</a>
        </div>
    </section>
    <section id="capacitate">
        <div class="texto-capacitate">
            <h2>Capacitate</h2>
            <p>¡Empieza a formarte! encuentra capacitaciones de producto y
                tutoriales de maquillaje de la mano de profesionales de la
                industria y gente comprometida a impulsar tu formación
                profesioal.</p>
                <a href="capacitate.html">Entrar</a>

        </div>
        <div class="img-capacitate">
            <img src="illustraciones/imag-capacitate.png" alt="">
        </div>
    </section>
    <section id="contacto">
        <h2>Contacto</h2>
        <form method="post">
            <input type="text" placeholder="Nombre" name="name" required="">
            <input type="text" placeholder="Asunto" name="asunto" required="">
            <input type="email" placeholder="Correo" name="email" required="">
            <textarea name="msg" placeholder="Mensaje"></textarea>
            <input type="submit" name="enviar">

        </form>

        </div>

    </section>
    <?php
    include("correo.php");
    ?>
    <footer id="principalfooter">
        <p>Evelyn Morales 2022&copy;</p>

    </footer>
    
</body>
</html>