<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Planner - Registrarse</title>
  <link rel="stylesheet" href="./assets/css/log-reg.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <img class="back-img" src="./assets/img/register-background.png" alt="">
  <header>
      <section class="header-container">
        <a class="header-logo" href="./index.php">
          <i></i>
          <h1>MEAL PLANNER</h1>
        </a>
        <section class="header-links">
          <ul>
            <li><a href="./about-us.php">NOSOTROS</a></li>
            <li><a class="btn-first" href="login.php">INICIAR SESIÓN</a></li>
          </ul>
        </section>
      </section>
  </header>
  <main>
    <section class="main-container register-form">
      <h1>REGÍSTRATE</h1>
      <h2>Necesitamos de tu información básica para empezar</h2>
      <form action="register.php" method="post">
        <div class="register-groups">
          <ul>
            <li>
              <h3>Nombres</h3>
              <input class="input-container" type="text" name="name" placeholder="Ingresar sus nombres completos" require>
            </li>
            <li>
              <h3>Apellidos</h3>
              <input class="input-container" type="text" name="last-name" placeholder="Ingresar sus apellidos completos" require>
            </li>
            <li>
              <h3>Correo</h3>
              <input class="input-container" type="email" name="email" placeholder="Ingresar su correo electrónico" require>
            </li>
            <li>
              <h3>Sexo</h3>
              <div class="input-container">
                <select name="sexo" id="">
                  <div class="input-container">
                    <option value="" selected disabled hidden>Seleccionar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                  </div>
                </select>
              </div>
            </li>
          </ul>
          <ul>
            <li>
              <h3>Contraseña</h3>
              <input class="input-container" type="password" name="pass" placeholder="Ingresar su contraseña" require>
            </li>
            <li>
              <h3>Repite Contraseña</h3>
              <input class="input-container" type="password" name="pass2" placeholder="Ingresar nuevamente su contraseña" require>
            </li>
            <li>
              <h3>Celular (opcional)</h3>
              <input class="input-container" type="text" name="phone" placeholder="Ingresar su número de celular">
            </li>
            <li>
              <h3>Edad</h3>
              <input class="input-container" type="text" name="age" placeholder="Ingresar su edad" require>
            </li>
          </ul>
        </div>
        <input type="submit" name="submit" value="Registrar">
      </form>
      <div class="register-option">
        <p>¿Ya tienes cuenta?</p>
        <a href="login.php">INICIAR SESIÓN</a>
      </div>
    </section>
  </main>
  <footer>
    <?php require('./layouts/footer-2.php')?>
  </footer>
<?php
  if(isset($_POST["submit"])){
      if(!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['name']) &&
         !empty($_POST['last-name']) && !empty($_POST['sexo']) && !empty($_POST['age'])) {
          $name=$_POST['name'];
          $lastname=$_POST['last-name'];
          $email=strtolower($_POST['email']);
          $gender=$_POST['sexo'];
          $pass=$_POST['pass'];
          $pass2=$_POST['pass2'];
          $age=$_POST['age'];
          $phone=$_POST['phone'];

          if($pass != $pass2) {
            $message = "Error! Las contraseñas tienen que coincidir";
            echo "<script type='text/javascript'>alert('$message');</script>";
          } else {
              $con=mysqli_connect('localhost','root','','mp');
              $query=mysqli_query($con,"SELECT * FROM usuario WHERE correo='".$email."'");
              $numrows=mysqli_num_rows($query);

              if($numrows==0) {
                  $sql="INSERT INTO usuario (nombres, apellidos, sexo, edad, correo, password, celular) VALUES ('$name','$lastname', '$gender', '$age', '$email', '$pass', '$phone')";  
                  $result=mysqli_query($con, $sql);

                  if($result) {
                      $message = "Cuenta de usuario creada correctamente";
                      echo "<script type='text/javascript'>alert('$message');</script>";
                      echo "<script>window.location.href = 'login.php';</script>";
                  } else {  
                      $message = "Error!";
                      echo "<script type='text/javascript'>alert('$message');</script>";
                  }
              } else {
                  $message = "Error! El correo ingresado ya está siendo usado por otro usuario";
                  echo "<script type='text/javascript'>alert('$message');</script>";

              }
          }
      } else {
          $message = "Error! Completar todos los campos";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
  }
?>
</body>
</html>