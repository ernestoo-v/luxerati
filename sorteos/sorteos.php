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
                <a href="../auth/logout.php">Cerrar sesion</a>
                </div>
                </div> ';
        }
    } else {
        echo ' <div class="dropbtn" ">
              <i class="fas fa-user"></i>
                
              
              <i class="fas fa-caret-down"></i>
                <div class="dropdown-content" id="myDropdown">
                <a href="../inicio-sesion/inicio.php">Iniciar sesion</a>
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
                            <a href="../auth/logout.php">Cerrar sesion</a>
                        </div>';
        }
    } else {
        echo '<div>
                           <i class="fas fa-user"></i>
                           <i class="fas fa-caret-down"></i>
                        </div>
                        <div class="dropDownMenu" id="dropDownMenu">
                            <a href="../inicio-sesion/inicio.php">Iniciar sesión</a>
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

                          
                            <a href="../auth/logout.php">Cerrar sesion</a>


                        </div>';
        }
    } else {
        echo '<div class="li-menu-drop-hamburguer-div">
                           <i class="fas fa-user"></i>
                            <a href="../inicio-sesion/inicio.php">Iniciar sesión</a>
                        </div>';
    }
}

/**
 * Funcion que retorna todos los equipos
 * @return array
 */
function getraffles()
{
    $conexion = new mysqli('localhost', 'root', '', 'pfc');

    $sql = "SELECT * FROM 2_sorteos";

    return $conexion->query($sql);
}

$resultado = getraffles();

function imprimeCards($cosas)
{
    while ($fila = $cosas->fetch_assoc()) {
        echo '<div class="div-contenido">';

        echo '<div class="contenido">';

        echo '<img src="' . '../ftos/index/sorteos' . '\\' . strtolower($fila['nombre_sorteo']) . '.png' . '" alt="" srcset="">';
        echo '<article>';
        echo '<a href="">';

        echo '<h1 class="search-name">' . $fila['nombre_sorteo'] . '</h1>';
        echo '<h2>' . $fila['descripcion_sorteo'] . '</h2>';
        echo '</a>';
        echo '<p>' . $fila['fecha_fin_sorteo'] . '</p>';

        echo '</article>';

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
    <link rel="icon" href="../ftos/LOGO.ico">
    <link rel="stylesheet" href="sorteos.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href="../index.php" class="enlace">
                <img src="../ftos/isotipo.png" alt="" class="logo">
            </a>
            <ul>
                <div class="hamburger-icon">
                    <i class="fas fa-bars" onclick="hamburguer_menu()"></i>
                </div>
                <li><a href="../noticias/noticias.php">NEWS</a></li>
                <li><a href="../tienda/tienda.php">SHOP</a></li>
                <li><a href="../eventos/eventos.php">EVENTS</a></li>
                <li><a href="../sorteos/sorteos.php">RAFFLES</a></li>


                <li><a href="../carrito/carrito.php"><i class="fa fa-heart"></i></a></li>

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
                <li><a href="../noticias/noticias.php">NEWS</a></li>
                <li><a href="../tienda/tienda.php">SHOP</a></li>
                <li><a href="../eventos/eventos.php">EVENTS</a></li>
                <li><a href="../sorteos/sorteos.php">RAFFLES</a></li>
                <div>

                    <div class="li-menu-drop-hamburguer" onclick="abrir_menu()">
                        <?php
                        sesion2()
                        ?>

                    </div>
                    <a href="../carrito/carrito.php"><i class="fa fa-heart"></i></a>

                </div>
            </ul>
        </div>
        <div id="div1">
            <section class="division-tienda">
                <div class="filtros">
                    <div class="buscar">
                        <i class="fas fa-search"></i>
                        <input class="input-field" type="text" id="search-input" placeholder="SEARCH" />
                    </div>
                </div>
                <div class="sorteos">
                    <div class="sorteos-eventos">
                        <div class="sorteo">
                            <?php
                            imprimeCards($resultado);
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="inicio-footer">
                <img src="../ftos/isotipo.png" alt="." class="logo-footer">
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
                    <li><a href="../noticias/noticias.php">NEWS</a></li>
                    <li><a href="../tienda/tienda.php">SHOP</a></li>
                    <li><a href="../eventos/eventos.php">EVENTS</a></li>
                    <li><a href="../sorteos/sorteos.php">RAFFLES</a></li>
                </ul>
            </div>
        </div>
        <div class="final-footer">
            <div class="linea"></div>
            <p>Copyright &copy <span id="year"></span></p>
        </div>
    </footer>
</body>
<script src="../js/nav.js"></script>
<script src="../js/eventos.js"></script>

</html>