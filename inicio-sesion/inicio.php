<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="inicio.css"> -->
    <!-- <link rel="stylesheet" href="singup.css"> -->
    <link rel="stylesheet" href="inicio1.css">
    <title>LUXERATI</title>
    <link rel="icon" href="../Ftos/LOGO.ico">
    <!-- <link rel="stylesheet" href="../fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


</head>

<body>
    <header class="content">
        <div class="header-video">
            <video autoplay loop muted plays-inline class="video">
                <source src="../Ftos/Coche - 88481.mp4" type="video/mp4">
            </video>
        </div>
        <div class="header-content">



            <div class="log-div">
                <!-- <div id="customAlertOverlay"></div>
                <div id="customAlert">
                    <span class="close" onclick="closeAlert()">x</span>
                    <p id="alertMessage">Username or email already exists</p>
                </div> -->
                <?php if (isset($_GET['valido'])) {
                    $valor = $_GET['valido'];

                    if ($valor == 3) {
                        echo ' <div id="customAlertOverlay"></div>
                <div id="customAlert">
                    <span class="close" onclick="closeAlert()">x</span>
                    <p id="alertMessage">Username or email already exists</p>
                </div>';
                    }
                }
                ?>

                <div class="log-in-act" id="log-in-act">
                    <div>
                        <h3> LOG IN</h3>
                    </div>
                    <div>
                        <form id="login-form" method="post" action="..\auth\comprobar.php">
                            <input placeholder="Username or Email" type="text" name="user" id="log-in-username" onfocus="Finput()" required>
                            <input placeholder="Password" type="password" name="pass" id="log-in-password" onfocus="Finput()" required>

                            <?php


                            if (isset($_GET['valido'])) {
                                $valor = $_GET['valido'];

                                if ($valor == 0) {
                                    echo '<div class="p_error" id="log-in-p_error">
                                    <i class="fas fa-times-circle" style="color: #ff0000;"></i>
                                <p>Invalid username or password</p>
                            </div>';

                                    // echo '<script src="malUserBorrar.js">malUser();</script>';
                                }
                            }
                            ?>
                            <button type="submit" class="btn">LOG IN</button>

                        </form>
                    </div>
                </div>
                <div class="log-in-inact" id="log-in-inact">
                    <div>
                        <h3>Hello Friend</h3>
                    </div>
                    <div>
                        <h1>Alredy have an account?</h1>
                        <button id="loginBtn" class="btn" onclick="floginC()"><a id="alogin" href="../index.php"></a>
                            LOG IN
                        </button>
                    </div>
                </div>
                <div class="sign-up-act" id="sign-up-act">
                    <div>
                        <h3>SIGN UP</h3>
                    </div>
                    <div>
                        <form id="register-form" method="post" action="..\auth\comprobarRegister.php" onsubmit="return validateForm()">
                            <input placeholder="Email" type="text" name="email" id="sign-up-email" onfocus="Finput()" required>

                            <input placeholder="Username" type="text" name="username" id="sign-up-username" onfocus="Finput()" required>

                            <input placeholder="Password" type="password" name="password" id="sign-up-password" onfocus="Finput()" required>



                            <div class="signup-p_error2" id="signup-p_error2">
                                <i class="fas fa-times-circle" style="color: #ff0000;"></i>
                                <p>Invalid Email: smth@smth.smth</p>

                            </div>

                            <button type="submit" class="btn">SIGN UP</button>

                        </form>
                    </div>
                </div>
                <div class="sign-up-inact" id="sign-up-inact">
                    <div>
                        <h3>Welcome back</h3>
                    </div>
                    <div>
                        <h1>Don't have an account?</h1>
                        <button id="loginBtn" class="btn" onclick="fsingupC()"><a id="alogin" href="../index.php"></a>
                            SIGN UP
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="../js/inicio.js"></script>
</body>

</html>