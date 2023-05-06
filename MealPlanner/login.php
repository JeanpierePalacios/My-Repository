<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Planner - Iniciar Sesión</title>
  <link rel="stylesheet" href="./assets/css/log-reg.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Montserrat&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
  <img class="back-img" src="./assets/img/login-background.png" alt="">
  <header>
      <section class="header-container">
        <a class="header-logo" href="./index.php">
          <i></i>
          <h1>MEAL PLANNER</h1>
        </a>
        <section class="header-links">
          <ul>
            <li><a href="./about-us.php">NOSOTROS</a></li>
            <li><a class="btn-first" href="register.php">REGÍSTRATE</a></li>
          </ul>
        </section>
      </section>
  </header>
  <main>
    <section class="main-container">
      <h1>Iniciar Sesión</h1>
      <h2>Ingrese su cuenta</h2>
      <form action="" method="post">
        <div class="input-container">
          <?php if(isset($_SESSION["errorMessage"])) ?>
          <i class="login-icon"></i>
          <input type="email" name="email" placeholder="Correo de usuario">
        </div>
        <div class="input-container">
          <i class="pass-icon"></i>
          <input type="password" name="password" placeholder="Contraseña">
        </div>
        <input type="submit" name="submit" value="Ingresar">
      </form>
      <div class="register-option">
        <p>¿No tienes cuenta?</p>
        <a href="register.php">REGISTRATE</a>
      </div>
    </section>
  </main>
  <footer class="login-footer">
    <?php require('./layouts/footer-2.php')?>
  </footer>
<?php
  if(isset($_POST["submit"])){
      if(!empty($_POST['email']) && !empty($_POST['password'])) {
          $usuario=strtolower($_POST['email']);
          $pass=$_POST['password'];
          $con=mysqli_connect('localhost','root','','mp');
          $query=mysqli_query($con, "SELECT * FROM usuario WHERE correo='".$usuario."' AND password='".$pass."'");
          $numrows=mysqli_num_rows($query);

          if($numrows!=0) {
				
              while($row=mysqli_fetch_assoc($query)) {
                  $dbusername=$row['correo'];
                  $dbpassword=$row['password'];
                  $dbnombre=$row['nombres'];
              }
            
              if($usuario == $dbusername && $pass == $dbpassword) {
                  session_start();
                  $_SESSION['sess_user']=$dbnombre;
                  header("Location: index.php");
              }  
          } else {
              $message = "Error! Usuario o password inválidos";
              echo "<script type='text/javascript'>alert('$message');</script>";
          }

      } else {
          $message = "Error! Completar todos los campos";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
  }
  ?>
</body>
</html>