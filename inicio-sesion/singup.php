<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXERATI</title>
    <link rel="icon" href="../Ftos/LOGO.ico">
    <link rel="stylesheet" href="singup.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>

<body>
    <header class="content">
        <div class="header-video">
            <video autoplay loop muted plays-inline class="video">
                <source src="../Ftos/Coche - 88481.mp4" type="video/mp4">
            </video>
        </div>
        <div class="header-content">
            <section class="login" id="login">
                <h3>Luxerati</h3>
                <form method="" action="">
                    <label class="label_form">
                        <div class="div_input_email" id="div_input_email">
                            <input placeholder="Email" type="email" name="email" id="email" onblur="validarEmail()"
                                onfocus="validarEmailFocus()">
                            <i class="fas fa-envelope" style="color: #000000; font-size: 20px;"></i>
                        </div>

                        <div class="div_email" id="div_email">
                            <i class="fas fa-times-circle" style="color: #ff0000;"></i>
                            <p>Invalid Email: </p>

                            <p>smth@smth.smth</p>
                        </div>

                        <div class="div_input_username" id="div_input_username">
                            <input placeholder="Username" type="text" name="username" onkeyup="validarUsername()"
                                id="username">
                            <i class="fas fa-user-circle"
                                style="color: #000000; font-size: 23px; padding-right: 14px;"></i>
                        </div>

                        <span class="span_username" id="span_username">
                            <ul>
                                Invalid Username<li>Dont use numbers</li>
                                <li>Only use letters</li>
                            </ul>
                        </span>
                        <input placeholder="Password" type="password" name="password" id="password"
                            onblur="validarPassword()" onfocus="validarPasswordFocus()">
                        <div class="p_error" id="p_error">
                            <i class="fas fa-times-circle" style="color: #ff0000;"></i>
                            <p>Invalid password</p>
                        </div>

                    </label>
                </form>
                <button id="loginBtn" class="btn" onclick="fsingupBtn()"><a id="asingup" href="../index.php"></a>
                    SING UP
                </button>
                <div class="loginText">Already have an account? <a href="inicio.php">Log in</a> </div>
            </section>
        </div>
    </header>
    <script src="../js/singup.js"></script>
</body>

</html>