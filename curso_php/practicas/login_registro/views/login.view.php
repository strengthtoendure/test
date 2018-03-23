<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Iniciar Sesión</title>
</head>
<body>
  <div class="contenedor">
    <h1 class="titulo">Iniciar Sesión</h1>
    <hr class="border">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">

      <div class="form-group">
        <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
      </div>

      <div class="form-group">
        <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
        <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
      </div>

      <?php if (!empty($errores)): ?>
        <div class="error">
          <ul>
            <?php echo $errores ?>
          </ul>
        </div>
      <?php endif; ?>

    </form>
    <p class="texto-registrate">
      ¿Aún no tienes cuenta?
      <a href="registro.php">Regístrate</a>
    </p>
  </div>
</body>
</html>