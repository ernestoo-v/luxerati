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


// function getcars()
// {
//     $conexion = new mysqli('localhost', 'root', '', 'pfc');

//     $sql = "SELECT * from coches where id in(Select id_favorito from favoritos where id_user='" . $_SESSION['user']['id'] . "');";

//     return $conexion->query($sql);
// }

// $resultado = getcars();

function imprimeCards()
{

    session_abort();
    session_start();

    if (isset($_SESSION['user'])) {

        $conexion = new mysqli('localhost', 'root', '', 'pfc');

        $sql = "SELECT * from 2_coches where id in(Select id_coche from 2_favoritos where id_user='" . $_SESSION['user']['id'] . "');";

        $resultado = $conexion->query($sql);
        if (mysqli_num_rows($resultado) > 0) {
            echo '<div class="evento">';
            while ($fila = $resultado->fetch_assoc()) {
                echo '<div>';
                echo '<div class="deleteFavorite">';


                // echo ' <i  onclick="deleteFavorite(' . $fila['id'] . ')" class="fa-solid fa-square-xmark fa-beat-fade"></i>';
                echo '<a href="deleteFavorite.php?id=' . $fila['id'] . '& tabla=2_favoritos"><i  class="fa-solid fa-square-xmark fa-beat-fade"></i></a>';
                echo '</div>';


                echo '<div class="contenido">';

                echo '<img src="' . '../ftos/index/tienda/fotos-inicio' . '\\' . strtolower($fila['marca_coche'])  . '-' .  strtolower($fila['modelo_coche'])  . '.png' . '" alt="" srcset="">';
                echo '<article>';


                echo '<h1>' . $fila['marca_coche'] . ' ' . $fila['modelo_coche'] . '</h1>';

                echo '<h2> Color: ' . $fila['color_coche'] . ' </h2>';
                echo '<h2> Velocidad 1-100km: ' . $fila['velocidad_coche'] . ' sg  </h2>';
                echo '<h2> Potencia: ' . $fila['potencia_coche'] . ' cv </h2>';
                echo '<p>' . '$' . number_format($fila['precio_coche'], 2, '.', ',') . '</p>';

                echo '</article>';

                echo '</div>';

                echo '</div>';


                echo '<div class="linea"></div>';
            }
        } else {
            echo '<div class="carro-vacio">';
            echo '<p>No has añadido nada a tú lista de deseos</p>';
            echo '<p>Pulse el <i class="fa fa-heart"></i> para añadir</p>';
            echo '</div>';
        }
    } else {
        echo '<div class="carro-vacio">';
        echo '<p>Inicia Sesión o Registrate</p>';
        echo '<p>Para poder añadir con <i class="fa fa-heart"></i></p>';
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
    <link rel="stylesheet" href="carrito.css">
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
            <?php
            // Database::mostrarFavoritos('select * from cardstienda where id in(Select producto_id from carttienda)');
            ?>
            <section class="division-tienda">
                <div class="eventos">
                    <div class="info-eventos">
                        <?php
                        imprimeCards();
                        ?>
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

<script>
    function deleteFavorite(id) {
        var xhr = new XMLHttpRequest();
        // xhr.open("GET", "addFavorite.php?myVariable=" + encodeURIComponent(id), true);

        // xhr.open("GET", "addFavorite.php ? userid = " + encodeURIComponent(id2) + " &cardid = " + encodeURIComponent(id), true);
        // if (isset($_SESSION['user'])) {
        xhr.open("GET", "deleteFavorite.php?cardid=" + encodeURIComponent(id), true);
        console.log("hl")

        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Añadido a la tienda correctamente");
            }
        };
        xhr.send();
    }
</script>

</html>