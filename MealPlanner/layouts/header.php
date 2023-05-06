<?php
				session_start();
        $usuario = "";
				if(isset($_SESSION["sess_user"])){  
          $usuario = $_SESSION["sess_user"];
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="img/logo.png"
        height="auto"
        alt=""
        loading="lazy"
        style="margin-top: -14px;width: 15vw;height: 6vw;"
        class="img-fluid me-3"
      />
    </a>
    <button
      class="navbar-toggler navbar-toggler-right ml-auto"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="navbar-nav collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-5 mx-auto">
        <li class="nav-item ">
          <a class="nav-link text-white" href="./about-us.php" style="margin-right:200px">Nosotros<hr style="opacity: 1;"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./recetas.php" style="margin-right:200px">Recetas</a>
        </li>
      </ul>
          '<div class="d-flex align-items-center me-3 botones" style="margin: 0vw -10vw;">
          <div class="container">
              <img src="./img/icon-user.png" class="img-fluid" alt="">
          </div>
          <div class="container">
            <div class="dropdown">
              <button
                class="btn dropdown-toggle"
                type="button"
                id="dropdownMenu2"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                style="padding:15px 35px;font-size:1.2vw;background:linear-gradient(88.33deg, #0779E4 -7.64%, #000000 145.94%); color: white"
              >
              <?=$usuario;?>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="./cerrar_sesion.php"><button class="dropdown-item font-weight-bold" type="button" style="font-size:1.2vw;">
                  Cerrar sesión</button></a></li>
              </ul>
            </div>
          </div>
    </div>
  </div>
</nav>
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript"></script>
<?php
  } else {
?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand me-2" href="./index.php">
      <img
        src="img/logo.png"
        height="auto"
        alt=""
        loading="lazy"
        style="margin-top: -14px;width: 210px;height: 90px;"
        class="img-fluid me-3"
      />
    </a>
    <button
      class="navbar-toggler navbar-toggler-right ml-auto"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="navbar-nav collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-5 mx-auto">
        <li class="nav-item ">
          <a class="nav-link text-white" href="./about-us.php" >Nosotros <hr style="opacity: 1;"></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./recetas.php" style="margin-right:200px">Recetas</a>
        </li>
      </ul>
      <div class="d-flex align-items-center botones">
        <a href="./register.php">
          <button type="button" id ="r" class="btn btn-primary me-3 btn-lg" style="font-size: 1.2vw;
          font-family: 'Montserrat', sans-serif;font-weight: 700; padding: 12px 30px;">
            Registrate
          </button>
        </a>
        <a href="./login.php">
          <button type="button" id ="i" class="btn btn-primary me-3 btn-lg"style="font-size: 1.2vw;
          font-family: 'Montserrat', sans-serif;font-weight: 700; padding: 12px 24px;">
            Iniciar sesión
          </button>
        </a>
      </div>
    </div>
  </div>
</nav>
<script type="text/javascript" src="../js/mdb.min.js"></script>
<script type="text/javascript"></script>
<?php
  }
?>