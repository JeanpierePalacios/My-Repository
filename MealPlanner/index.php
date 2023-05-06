<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Meal Planner</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </head>
  <main class="container-fluid px-0">
    <!-- Start your project here-->
    <div class="container-fluid p-0 box-1" style="height:100%; width:100%;">
      <div class="container-fluid text-left p-0 busqueda">
        <div class="m-0 p-0">
			    <?php include("layouts/header.php"); ?>
          <!-- MDB -->
          <script type="text/javascript" src="js/mdb.min.js"></script>
          <!-- Custom scripts -->
          <script type="text/javascript"></script>
        </div>
      </div>
      <div class="container tittles">
        <div class="container-fluid">
          <h2 class="text1 text-md-left" style="font-size:3.5vw;">BIENVENIDO A</h2>
          <h2 class="text2 text-md-left" style="font-size:10vw;">MEAL</h2> 
          <h2 class="text3 text-md-left" style="font-size:5vw;">P       L       A       N       N       E       R </h2> 
          <div class="container my-5 mx-0">
                  <p class="text4 text-left text-md-center" style="font-size:2vw;margin: 0px auto;">Meal Planner crea planes de comidas personalizados basados ​​en sus 
            preferencias alimentarias, presupuesto y horario.</p>
          </div>
          <br>
        </div>
      </div>
    </div>  
  </div>
</main>
<div class="container box-2">
  <div class="text-center my-5">
    <h1 style="font-size:3.5vw"class="text5">¿QUÉ BRINDA MEAL PLANNER?</h1>
    <div class="d-block align-items-center justify-content-center box-3">
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-5 col-md-5 mx-5 text-center">
      <div class="container box-blue" style="width:100%;">
        <h2 class="text6 text-center font-weight-bold align-text-center" 
        style="font-size:1.7vw; color:white; font-family: 'Montserrat', sans-serif;">
          RECOMENDACIONES DE RECETAS</h2>
      </div>
      <br>  
      <img src="img/salad.png" alt="" class="img-fluid">
      <p class="text8" style="font-size:1.7vw;">Meal Planner recomienda las recetas más saludables para 
        que puedas añadir a tu Calendario de Comidas.</p>
        <a href="recetas.php">
          <button type="button" class="btn btn-outline btn-lg font-weight-bold" style="font-size:1.3vw;
          background:linear-gradient(88.33deg, #0779E4 -7.64%, #000000 145.94%);
          color:white;font-family: 'Montserrat', sans-serif;border-radius: 20px;">Clic aquí</button>
        </a>
    </div>
    <div class="col-5 col-md-5 text-center">
      <div class="container box-blue" style="width:100%;">
        <h2 class="text6 text-center font-weight-bold align-text-center" 
        style="font-size:1.7vw; color:white; font-family: 'Montserrat', sans-serif;">
          PERSONALIZA TU CALENDARIO</h2>
      </div>
      <br>
      <img src="img/calendar.png" alt="" class="img-fluid">
      <p class="text8" style="font-size:1.7vw;">Meal Planner recomienda las recetas más saludables para 
        que puedas añadir a tu Calendario de Comidas.</p>
        <a href="Calendario/index.php">
          <button type="button" class="btn btn-outline btn-lg font-weight-bold" style="font-size:1.3vw;
          background:linear-gradient(88.33deg, #0779E4 -7.64%, #000000 145.94%);
          color:white;font-family: 'Montserrat', sans-serif;border-radius: 20px;">Clic aquí</button>
        </a>
    </div>
  </div>
  <div class="text-center my-5">
    <h1 style="font-size:3.5vw"class="text5">TESTIMONIOS</h1>
    <div class="d-block align-items-center justify-content-center box-3">
    </div>
  </div>
</div>
<div class="container-fluid box4" style="background-color: #ADE7E8;">
  <br>
  <br>
  <br>
  <div class="row justify-content-around">
    <div class="col-5 col-md-5 mx-5 text-center">
      <img src="img/testimonio1.png" alt="" class="img-fluid">
    </div>
    <div class="col-5 col-md-5 mt-auto mb-auto text-center">
      <h2 style="color: #0779E4;font-size:3vw;font-family: 'Montserrat', sans-serif;" class="font-weight-bold">
        Jane Taylor</h2>
      <p class="text8" style="font-size:1.7vw;font-family: 'Montserrat', sans-serif;">"¡Me enteré de Meal Planner y perdí 15 kilos en 6 meses! 
        Este sitio web ideal para asegurarme de comer correctamente y administrar mi calendario alimenticio ". </p>
    </div>
  </div>
  <div class="row justify-content-around">
    <div class="col-5 col-md-5 mt-auto mb-auto text-center">
      <h2 style="color: #0779E4;font-size:3vw;font-family: 'Montserrat', sans-serif;" class="font-weight-bold">
        Liam Harris</h2>
      <p class="text8" style="font-size:1.7vw;font-family: 'Montserrat', sans-serif;">"Meal Planner no solo 
        me ayuda a alcanzar mis metas de bajar de peso, sino que también me asegura de no comer lo mismo 
        todos los días. He perdido 17 kilos durante el último año, y ahora estoy mejor que nunca". </p>
    </div>
    <div class="col-5 col-md-5 mx-5 text-center">
      <img src="img/testimonio2.png" alt="" class="img-fluid">
    </div>
  </div>
  <br>
  <br>
<?php include("layouts/footer.php"); ?>