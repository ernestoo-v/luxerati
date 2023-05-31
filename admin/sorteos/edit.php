<?php
//1. Recoger el id de la url. Ver si existe y en tal caso recogerlo
$id = $_GET['id'];
$tabla = $_GET['tabla'];
//2. Importar la clase Database.php
require_once('../Database.php');
//3. Invocar la funcion delete de la clase Database.php
$sorteos = Database::findById($id, $tabla);
?>
<?php

// 0. Inicio sesion o continuo con sesion iniciada
//session_start();

// 1. Comprobar si la session esta iniciada
if (isset($_SESSION['user'])) {
    // Existe
    if ($_SESSION['user']['rol_id'] == 1) {
        // 3. Si session iniciada y rol de usuario, te mando al usuario
        header('Location: ../index.php');
    }
}

function sesion1()
{
    session_abort();
    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['rol_id'] == 2) {
            // 3. Si session iniciada y rol de usuario, te mando al usuario
            header('Location: ../index.php');
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
        header('Location: ../index.php');
    }
}

function sesion()
{
    session_abort();
    session_start();
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['rol_id'] == 1) {
            // 3. Si session iniciada y rol de usuario, te mando al usuario
            header('Location: admin.php');
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
            header('Location: admin.php');
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxerati</title>
    <link rel="icon" href="../../ftos/LOGO.ico">
    <link rel="stylesheet" href="../formulario.css">
    <link rel="stylesheet" href="../../nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<header>
    <nav>
        <a href="admin.php" class="enlace">
            <img src="../../ftos/isotipo.png" alt="" class="logo">
        </a>
        <ul>
            <div>
                <i class="fas fa-bars" onclick="hamburguer_menu()"></i>
            </div>
            <!-- <li><a href="../noticias/noticias.php">NEWS</a></li>
            <li><a href="../tienda/tienda.php">SHOP</a></li>
            <li><a href="../eventos/eventos.php">EVENTS</a></li>
            <li><a href="../sorteos/sorteos.php">RAFFLES</a></li>  -->

            <li class="li-menu-drop" onclick="openMenu()">

                <div class=" usuarioUl">
                    <?php
                    sesion1()
                    ?>
                </div>

            </li>
            <!-- <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            <li><a href="#"><i class="fa fa-heart"></i></a></li> -->
        </ul>
    </nav>
</header>

<body>
    <main>
        <div id="div-hamburguer" class="div-hamburger">
            <ul>
                <!-- <li><a href="../noticias/noticias.php">NEWS</a></li>
                <li><a href="../tienda/tienda.php">SHOP</a></li>
                <li><a href="../eventos/eventos.php">EVENTS</a></li>
                <li><a href="../sorteos/sorteos.php">RAFFLES</a></li> -->
                <div>

                    <div class="li-menu-drop-hamburguer" onclick="abrir_menu()">
                        <?php
                        echo '<div class="li-menu-drop-hamburguer-div">
                            <i class="fas fa-user"></i>
                            <p> ' . $_SESSION['user']['username'] . '</p>

                          
                            <a href="../../auth/logout.php">Cerrar sesion</a>


                        </div>';
                        ?>

                    </div>
                    <!-- <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a> -->
                </div>
            </ul>
        </div>
        <div id="div1">
            <form id="formulario" action="update.php" method="POST">
                <input type="hidden" name="id_sorteos" value="<?php echo $sorteos['id'] ?>" required>
                <input type="text" name="nombre_sorteo" value="<?php echo $sorteos['nombre_sorteo'] ?>" required>
                <input type="text" name="descripcion_sorteo" value="<?php echo $sorteos['descripcion_sorteo'] ?>" required>
                <input type="text" name="fecha_fin_sorteo" value="<?php echo $sorteos['fecha_fin_sorteo'] ?>" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

</body>
<script src="../../js/index.js"></script>
<script src="../../js/noticias.js"></script>

</html>