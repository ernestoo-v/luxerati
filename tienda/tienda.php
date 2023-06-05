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
function getcars()
{
    $conexion = new mysqli('localhost', 'root', '', 'pfc');

    $sql = "SELECT * FROM 2_coches";

    return $conexion->query($sql);
}

$resultado = getcars();
$resultado2 = getcars();


function imprimeCards($cosas)
{

    while ($fila = $cosas->fetch_assoc()) {
        echo '<div class="div-contenido">';
        echo '<div class="contenido">';

        echo '<img src="' . '../ftos/index/tienda/fotos-inicio' . '\\' . strtolower($fila['marca_coche'])  . '-' .  strtolower($fila['modelo_coche'])  . '.png' . '" alt="" srcset="">';
        echo '<article>';
        echo '<a href="">';

        echo '<h1 class="car-name">' . $fila['marca_coche'] . ' ' . $fila['modelo_coche'] . '</h1>';
        echo '</a>';
        echo '<p>' . '$' . number_format($fila['precio_coche'], 2, '.', ',') . '</p>';

        echo '</article>';

        // echo '<a  href="coches.php?id=' . $fila['id'] . '"> Show more<button class="boton-coche"></a>';

        // echo '<a href="coches.php?id=' . $fila['id'] . '">' . 'Show more ' . '</a>';

        echo '<div class="showAdd">';
        echo ' <a class="boton-coche" href="coches.php?id=' . $fila['id'] . '"><button class="boton-coche"> Show more</button></a>';

        echo '<button class="addFavorite" onclick="addFavorite(' . $fila['id'] . ')"><i class="fa fa-heart"></i></button>';

        echo '</div>';


        echo '</div>';

        echo '</div>';
    }
}

// function imprimeFiltros($cosas)
// {

//     while ($fila = $cosas->fetch_assoc()) {
//         echo '<div class="div-contenido-filtro">';


//         // echo '<a href="" onclick="buscar2()"> <p class="search-car-marca" id="search-car-marca">' . $fila['marca_coche'] . '</p></a>';

//         echo '<label class="switch"> <input type="checkbox" onclick="buscar2()" class="switch-button"> <p class="search-car-marca" id="search-car-marca">  ' . $fila['marca_coche'] . '</p>';

//         //' . $fila['marca_coche'] . '
//         echo '</div>';
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" href="../ftos/LOGO.ico">
    <link rel="stylesheet" href="tienda.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>LUXERATI</title>
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
                    <div class="usuarioUl">
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

                    <div class="logos">
                        <div>
                            <img src="../ftos/index/logos/aston martin logo.png" alt="" onclick="mostrarCoches('aston martin')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/bently logo.png" alt="" onclick="mostrarCoches('bently')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/bmw logo.png" alt="" onclick="mostrarCoches('bmw')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/bugatti logo.png" alt="" onclick="mostrarCoches('bugatti')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/ferrari logo.png" alt="" onclick="mostrarCoches('ferrari')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/lamborghini logo.png" alt="" onclick="mostrarCoches('lamborghini')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/jaguar logo.png" alt="" onclick="mostrarCoches('aston martin')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/land rover logo.png" alt="" onclick="mostrarCoches('land rover')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/mclaren logo.png" alt="" onclick="mostrarCoches('mclaren')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/mercedes logo.png" alt="" onclick="mostrarCoches('mercedes')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/porsche logo.png" alt="" onclick="mostrarCoches('porsche')">
                        </div>
                        <div>
                            <img src="../ftos/index/logos/rolls royce logo.png" alt="" onclick="mostrarCoches('rolls royce')">
                        </div>
                    </div>
                    <!-- <p>filtros</p>

                    <div class="filtro-marca">

                        <?php
                        // imprimeFiltros($resultado2);
                        ?>
                    </div> -->
                </div>
                <div class="coches">
                    <div class="coches-tienda">
                        <div class="tienda">
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
<script src="../js/tienda.js"></script>
<script src="carrito.js"></script>

<script>
    function addFavorite(id) {

        var xhr = new XMLHttpRequest();
        // xhr.open("GET", "addFavorite.php?myVariable=" + encodeURIComponent(id), true);

        // xhr.open("GET", "addFavorite.php ? userid = " + encodeURIComponent(id2) + " &cardid = " + encodeURIComponent(id), true);
        // if (isset($_SESSION['user'])) {
        xhr.open("GET", "addFavorite.php?cardid=" + encodeURIComponent(id), true);

        // }
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Añadido a la tienda correctamente");
            }
        };
        xhr.send();
    }

    function mostrarCoches(marca) {

        let coches = document.querySelectorAll('.div-contenido');
        let cochesMarca = document.querySelectorAll('.div-contenido img[src*="' + marca + '"]');

        coches.forEach(coche => {
            coche.style.display = 'none';
        });

        cochesMarca.forEach(coche => {
            coche.parentElement.parentElement.style.display = 'block';
        });
    }
</script>


</html>