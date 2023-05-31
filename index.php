<?php

// 0. Inicio sesion o continuo con sesion iniciada
//session_start();

// 1. Comprobar si la session esta iniciada
if (isset($_SESSION['user'])) {
    // Existe
    if ($_SESSION['user']['rol_id'] == 1) {
        // 3. Si session iniciada y rol de usuario, te mando al usuario
        header('Location: ../admin/admin.php');
    }
}
?>

<?php


function sesion1()
{
    session_abort();
    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['rol_id'] == 1) {
            // 3. Si session iniciada y rol de usuario, te mando al usuario
            header('Location: ../admin/admin.php');
        } else {
            echo '  <div class="dropbtn" ">
              <i class="fas fa-user"></i>
                           <p> ' . $_SESSION['user']['username'] . '</p>
                            <i class="fas fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown">
                <a href="auth/logout.php">Cerrar sesion</a>
                </div>
                </div> ';
        }
    } else {
        echo ' <div class="dropbtn" ">
              <i class="fas fa-user"></i>
                
              
              <i class="fas fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown">
                <a href="inicio-sesion/inicio.php">Iniciar sesion</a>
                </div>
                </div> ';
    }
}

function sesion()
{
    session_abort();
    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['rol_id'] == 1) {
            // 3. Si session iniciada y rol de usuario, te mando al usuario
            header('Location: ../admin/admin.php');
        } else {
            echo '<div>
                            <i class="fas fa-user"></i>
                           <p> ' . $_SESSION['user']['username'] . '</p>

                            <i class="fas fa-caret-down"></i>

                        </div>
                        <div class="dropDownMenu" id="dropDownMenu">
                            <a href="auth/logout.php">Cerrar sesion</a>
                        </div>';
        }
    } else {
        echo '<div>
                           <i class="fas fa-user"></i>
                           <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="dropDownMenu" id="dropDownMenu">
                            <a href="inicio-sesion/inicio.php">Iniciar sesión</a>
                        </div>';
    }
}

function sesion2()
{
    session_abort();
    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['rol_id'] == 1) {
            // 3. Si session iniciada y rol de usuario, te mando al usuario
            header('Location: ../admin/admin.php');
        } else {
            echo '<div class="li-menu-drop-hamburguer-div">
                            <i class="fas fa-user"></i>
                            <p> ' . $_SESSION['user']['username'] . '</p>

                          
                            <a href="auth/logout.php">Cerrar sesion</a>


                        </div>';
        }
    } else {
        echo '<div class="li-menu-drop-hamburguer-div">
                           <i class="fas fa-user"></i>
                            <a href="inicio-sesion/inicio.php">Iniciar sesión</a>
                        </div>';
    }
}

/**
 * Funcion que retorna todos los equipos
 * @return array
 */
function getnews()
{
    $conexion = new mysqli('localhost', 'root', '', 'pfc');

    $sql = "SELECT * FROM 2_noticias ORDER BY RAND() LIMIT 2";

    return $conexion->query($sql);
}

$noticias = getnews();

function imprimeCardsNoticias($cosas)
{
    while ($fila = $cosas->fetch_assoc()) {
        echo '<div>';

        echo '<div class="contenidoNoticias">';

        echo '<img src="' . 'ftos/index/noticias' . '\\' . strtolower($fila['nombre_noticias'])  . '.png' . '" alt="" srcset="">';
        echo '<article>';



        echo '<a href="' . strtolower($fila['href_noticia']) . '">';
        echo '<p> News </p>';
        echo '</a>';

        echo '<a href="' . strtolower($fila['href_noticia']) . '">';

        echo '<h1>' . $fila['nombre_noticias'] . '</h1>';
        echo '</a>';

        echo '</article>';

        echo '</div>';

        echo '</div>';
    }
}

function getcars()
{
    $conexion = new mysqli('localhost', 'root', '', 'pfc');

    $sql = "SELECT * FROM 2_coches ORDER BY RAND() LIMIT 2";

    return $conexion->query($sql);
}

$coches = getcars();

function imprimeCardsCoches($cosas)
{
    while ($fila = $cosas->fetch_assoc()) {
        echo '<div>';

        echo '<div class="contenidoCoches">';

        echo '<img src="' . 'ftos/index/tienda/fotos-inicio' . '\\' . strtolower($fila['marca_coche'])  . '-' .  strtolower($fila['modelo_coche'])  . '.png' . '" alt="" srcset="">';
        echo '<article>';
        echo '<a href="">';

        echo '<h1>' . $fila['marca_coche'] . ' ' . $fila['modelo_coche'] . '</h1>';
        echo '</a>';
        echo '<p>' . '$' . number_format($fila['precio_coche'], 2, '.', ',') . '</p>';

        echo '</article>';

        echo '<button class="boton-coche">';

        echo '<a href="tienda/coches.php?id=' . $fila['id'] . '">' . 'Show more ' . '</a>';

        echo '</button>';

        echo '</div>';

        echo '</div>';
    }
}

function getevents()
{
    $conexion = new mysqli('localhost', 'root', '', 'pfc');

    $sql = "SELECT * FROM 2_eventos ORDER BY RAND() LIMIT 2";

    return $conexion->query($sql);
}

$eventos = getevents();

function imprimeCardsEventos($cosas)
{
    while ($fila = $cosas->fetch_assoc()) {
        echo '<div>';

        echo '<div class="contenidoEventos">';

        echo '<a href="' . $fila['href_evento'] . '">';

        echo '<img src="' . 'ftos/index/eventos/' . '\\' . strtolower($fila['nombre_evento']) . '.png' . '" alt="." srcset="">';

        echo '</a>';

        echo '</div>';

        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXERATI</title>
    <link rel="icon" href="ftos/LOGO.ico">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="enlace">
                <img src="ftos/isotipo.png" alt="" class="logo">
            </a>
            <ul>
                <div class="hamburger-icon">
                    <i class="fas fa-bars" onclick="hamburguer_menu()"></i>
                </div>
                <li><a href="noticias/noticias.php">NEWS</a></li>
                <li><a href="tienda/tienda.php">SHOP</a></li>
                <li><a href="eventos/eventos.php">EVENTS</a></li>
                <li><a href="sorteos/sorteos.php">RAFFLES</a></li>

                <li><a href="carrito/carrito.php"><i class="fa fa-heart"></i></a></li>
                <li class="li-menu-drop" onclick="openMenu()">

                    <div class=" usuarioUl">
                        <?php
                        sesion1()
                        ?>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="div-hamburguer" class="div-hamburgers">
            <ul>
                <li><a href="noticias/noticias.php">NEWS</a></li>
                <li><a href="tienda/tienda.php">SHOP</a></li>
                <li><a href="eventos/eventos.php">EVENTS</a></li>
                <li><a href="sorteos/sorteos.php">RAFFLES</a></li>
                <div>

                    <div class="li-menu-drop-hamburguer" onclick="abrir_menu()">
                        <?php
                        sesion2()
                        ?>

                    </div>
                    <a href="carrito/carrito.php"><i class="fa fa-heart"></i></a>
                </div>
            </ul>
        </div>
        <div id="div1">
            <section class="slider-principal">
                <div id="slider">
                    <figure>
                        <div class="articulo">
                            <img src="ftos/index/slider/ferrari-slider.png" alt="">
                            <a href="https://www.thedrive.com/news/this-14000-ferrari-250-gto-ad-is-real-heres-what-happened-to-the-car">
                                <article>This $14,000 Ferrari 250 GTO Ad Is Real. Here’s What Happened to the Car
                                </article>
                            </a>
                        </div>
                        <div class="articulo">
                            <img src="ftos/index/slider/rolls-slider.png" alt="">
                            <a href="https://www.topspeed.com/things-you-need-to-know-about-the-28-million-rolls-royce-boat-tail/#the-exotic-car-features-a-neatly-tailored-and-detailed-exterior">
                                <article>10 Things You Need To Know About The $28-Million Rolls-Royce Boat Tail
                                </article>
                            </a>
                        </div>
                        <div class="articulo">
                            <img src="ftos/index/slider/bugatti-slider.png" alt="">
                            <a href="https://autojosh.com/watch-as-4-bugatti-divo-hypercars-worth-23-million-cruises-into-a-dealership-in-style/">
                                <article>Watch As 4 Bugatti Divo Hypercars Worth $23 Million Cruises Into A Dealership
                                    In Style</article>
                            </a>
                        </div>
                        <div class="articulo">
                            <img src="ftos/index/slider/lamborghini-slider.png" alt="">
                            <a href="https://www.topspeed.com/things-you-need-to-know-about-the-28-million-rolls-royce-boat-tail/#the-exotic-car-features-a-neatly-tailored-and-detailed-exterior">
                                <article>These Crazy One-Offs Are the Final Pure V-12 Lamborghinis, We Promise</article>
                            </a>
                        </div>
                    </figure>
                </div>
            </section>
            <section class="noticia">
                <p class="cabecera">Latest News</p>
                <div class="info-noticias">
                    <div class="noticias-coches">
                        <div class="noticias">
                            <?php
                            imprimeCardsNoticias($noticias);
                            ?>
                        </div>
                    </div>
                </div>
                <a href="noticias/noticias.php"><button class="boton">Show more News</button></a>
            </section>
            <section class="division"></section>
            <section class="cochesVenta">
                <p class="cabecera">Cars for Sale</p>
                <div class="info-noticias">
                    <div class="noticias-coches">
                        <div class="noticias">
                            <?php
                            imprimeCardsCoches($coches);
                            ?>
                        </div>
                    </div>
                </div>
                <a href="tienda/tienda.php"><button class="boton">Show more Cars</button></a>
            </section>
            <section>
                <div class="logos">
                    <div>
                        <img src="ftos/index/logos/aston martin logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/bently logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/bmw logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/bugatti logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/ferrari logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/lamborghini logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/jaguar logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/land rover logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/mclaren logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/mercedes logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/porsche logo.png" alt="">
                    </div>
                    <div>
                        <img src="ftos/index/logos/logo- rolls royce.png" alt="">
                    </div>
                </div>
            </section>
            <section class="eventos">
                <p class="cabecera">Events</p>
                <div>
                    <div class="info-eventos">
                        <div class="evento">
                            <?php
                            imprimeCardsEventos($eventos);
                            ?>
                        </div>
                    </div>
                </div>
                <a href="eventos/eventos.php"><button class="boton">Show more Events</button></a>
            </section>
            <section class="sect">
                <video src="ftos/pexels-treedeo-footage-9129105.mp4" autoplay loop muted plays-inline></video>
            </section>
            <!--
                <section class="cochesVenta">
                <p class="cabecera">Raffles</p>
                <div class="coches">
                    <div>
                        <div class="contenido">
                            <img src="ftos/index/tienda/aston-martin-sub-img/aston-martin-valkyrie.png" alt="">
                            <article>
                                <a href="#">
                                    <h1>Aston Martin Valkyrie</h1>
                                </a>
                                <p>$3,000,000</p>
                            </article>
                        </div>
                    </div>
                    <div>
                        <div class="contenido">
                            <img src="ftos/index/tienda/bmw-hurricane.png" alt="">
                            <article>
                                <a href="">
                                    <h1>2012 BMW M5 G-Power Hurricane</h1>
                                </a>
                                <p>$470,000</p>
                            </article>
                        </div>
                    </div>
                </div>
                <a href="#"><button class="boton">Show more Raffle</button></a>
            </section>
            -->
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="inicio-footer">
                <img src="ftos/isotipo.png" alt="." class="logo-footer">
                <div class="linkedin">
                    <div>
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/ernesto-villar-desarrollador-java-unreal-engine/">
                            <p>Ernesto</p>
                        </a>
                    </div>
                    <div>
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/ana-suarez-villaescusa/">
                            <p>Ana</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-footer">
                <ul class="menu">
                    <li><a href="noticias/noticias.php">NEWS</a></li>
                    <li><a href="tienda/tienda.php">SHOP</a></li>
                    <li><a href="eventos/eventos.php">EVENTS</a></li>
                    <li><a href="sorteos/sorteos.php">RAFFLES</a></li>
                </ul>
            </div>
        </div>
        <div class="final-footer">
            <div class="linea"></div>
            <p>Copyright &copy <span id="year"></span></p>
        </div>
    </footer>

</body>
<script src="js/nav.js"></script>

</html>