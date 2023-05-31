<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <form id="login-form" action="comprobar.php" method="post">
      <h2>Iniciar sesión</h2>
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" name="user" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="pass" id="password" required>
      </div>
      <div class="form-group">
        <button type="submit" id="login-button" disabled>Iniciar sesion</button>
      </div>
    </form>
  </div>
</body>
<script src="script.js"></script>
</html>
