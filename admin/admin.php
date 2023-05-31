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

require_once('Database.php');

$database = new Database();

$evento = $database->getAllEvents();
$sorteo = $database->getAllRaffles();
$coches = $database->getAllCars();
$noticias = $database->getAllNews();
$usuarios = $database->getAllUsername();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxerati</title>
    <link rel="icon" href="../ftos/LOGO.ico">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<header>
    <nav>
        <a href="admin.php" class="enlace">
            <img src="../ftos/isotipo.png" alt="" class="logo">
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

                          
                            <a href="../auth/logout.php">Cerrar sesion</a>


                        </div>';
                        ?>

                    </div>
                    <!-- <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fa fa-heart"></i></a> -->
                </div>
            </ul>
        </div>
        <div id="div1">

            <div id="buttons" class="buttons">
                <div>
                    <button onclick="openNoticias()">Noticias</button>
                    <button onclick="openCoches()">Coches</button>
                    <button onclick="openEventos()">Eventos</button>
                    <button onclick="openSorteos()">Sorteos</button>
                    <button onclick="openUsernames()">Usuarios</button>
                </div>
            </div>

            <section id="tNoticias">
                <h1>Tabla de Noticias</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link Noticia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($noticias as $row) {
                            echo '<tr>';
                            for ($i = 1; $i < 3; $i++) {
                                echo '<td>' . $row[$i] . '</td>';
                            }
                            echo '<td>' . '<a href="noticias/edit.php?id=' . $row['id'] . '& tabla=2_noticias"><button>Editar</button></a> <a href="delete.php?id=' . $row['id'] . '& tabla=2_noticias"><button>Eliminar</button></a>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="tabla">
                    <div id="buttons" class="buttons">
                        <div>
                            <a href="noticias/create.php"><button>Crear</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tCoches">
                <h1>Tabla de Coches</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Speed 1-100km</th>
                            <th>Power CV</th>
                            <th>Consumption L/100km</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($coches as $row) {
                            echo '<tr>';
                            for ($i = 1; $i < 9; $i++) {
                                echo '<td>' . $row[$i] . '</td>';
                            }
                            echo '<td>' . '<a href="coches/edit.php?id=' . $row['id'] . '& tabla=2_coches"><button>Editar</button></a> <a href="delete.php?id=' . $row['id'] . '& tabla=2_coches"><button>Eliminar</button></a>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="tabla">
                    <div id="buttons" class="buttons">
                        <div>
                            <a href="coches/create.php"><button>Crear</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tEventos">
                <h1>Tabla de Eventos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Link Evento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($evento as $row) {
                            echo '<tr>';
                            for ($i = 1; $i < 5; $i++) {
                                echo '<td>' . $row[$i] . '</td>';
                            }
                            echo '<td>' . '<a href="eventos/edit.php?id=' . $row['id'] . '& tabla=2_eventos"><button>Editar</button></a> <a href="delete.php?id=' . $row['id'] . ' & tabla=2_eventos"><button>Eliminar</button></a>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="tabla">
                    <div id="buttons" class="buttons">
                        <div>
                            <a href="eventos/create.php"><button>Crear</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tSorteos">
                <h1>Tabla de Sorteos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($sorteo as $row) {
                            echo '<tr>';
                            for ($i = 1; $i < 4; $i++) {
                                echo '<td>' . $row[$i] . '</td>';
                            }
                            echo '<td>' . '<a href="sorteos/edit.php?id=' . $row['id'] . '& tabla=2_sorteos"><button>Editar</button></a> <a href="delete.php?id=' . $row['id'] . '& tabla=2_sorteos"><button>Eliminar</button></a>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="tabla">
                    <div id="buttons" class="buttons">
                        <div>
                            <a href="sorteos/create.php"><button>Crear</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tUsuarios">
                <h1>Tabla de Usuarios</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Rol</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($usuarios as $row) {
                            echo '<tr>';
                            for ($i = 1; $i < 5; $i++) {
                                echo '<td>' . $row[$i] . '</td>';
                            }
                            echo '<td>' . '<a href="username/edit.php?id=' . $row['id'] . '& tabla=2_users"><button>Editar</button></a> <a href="delete.php?id=' . $row['id'] . '& tabla=2_users"><button>Eliminar</button></a>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="tabla">
                    <div id="buttons" class="buttons">
                        <div>
                            <a href="username/create.php"><button>Crear</button></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
<script src="../js/nav.js"></script>
<script src="../js/noticias.js"></script>

</html>