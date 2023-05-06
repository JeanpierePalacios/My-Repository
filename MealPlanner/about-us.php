<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meal Planner - Acerca de Nosotros</title>
  <!-- MDB icon -->
  <link rel="icon" href="./assets/icons/logo-calendar.svg" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
  />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/about-us.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Montserrat&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <section class="header-container" style="background: transparent;">
      <div class="container-fluid p-0 box-1" style="background: transparent; height:100%; width:100%;">
        <div class="container-fluid text-left p-0 busqueda" style="background: transparent;">
          <div class="m-0 p-0">
            <?php include("layouts/header.php"); ?>
            <!-- MDB -->
            <script type="text/javascript" src="js/mdb.min.js"></script>
            <!-- Custom scripts -->
            <script type="text/javascript"></script>
          </div>
        </div>
    </section>
  </header>
  <main>
    <section class="title-container">
      <img src="./assets/img/main-background.png" alt="Fondo con comida" class="title-backgound" >
      <img src="./assets/img/title.svg" alt="Titulo atractivo" class="title-img">
    </section>
    <section class="us-container">
      <div class="us-img"><img src="./assets/img/women-cooking.png" alt="Mujer cocinando"></div>
      <div class="us-info">
        <h2>¿QUIÉNES SOMOS?</h2>
        <p>Meal Planner es una plataforma que ayuda a organizar sus alimentos mediante un planificador de comidas personalizados basados ​​en sus preferencias alimentarias, presupuesto y horario.</p>
      </div>
    </section>
    <section class="mision-container">
      <div>
        <h2>MISIÓN</h2>
        <p>Somos una plataforma web que se centra en la mejora de la alimentación de cada usuario a través de un planificador dinámico, ágil y versátil,  y recomendación de recetas saludables, con el propósito de optimisar la calidad de los alimentos.</p>
      </div>
      <div>
        <h2>VISIÓN</h2>
        <p>Meal Planner busca brindar el mejor servicio personalizado de un planificador de comidas en base a sus preferencias de estilo de vida como tambien, mejorar la salud mental del usuario eliminando su ansiedad de elgir que comer cada días.</p>
      </div>
    </section>
    <section class="contact-container">
      <div><h2>CONTÁCTANOS</h2></div>
      <div>
        <div>
          <p>En caso de querer Comunicarse con un asesor puede hacerlo al siguiente número de WhastApp: <a href="#">+51 910 923 569</a></p>
          <p>Además puede acceder a nuestro manual de usuario <a href="#">AQUÍ</a>.</p>
        </div>
      </div>
    </section>
    <?php require('./layouts/footer-2.php')?>
  </main>
</body>
</html>