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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/recetas.css" />
    <link rel="stylesheet" href="css/styles.css" />    
 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    

</head>

<body>
    <script src="js/javascript.js"></script>
    <div class="container-fluid p-0 search" style="height:100%; width:100%;">
        <div class="container-fluid text-left p-0 busqueda">
            <div class="m-0 p-0">
                <?php include("layouts/header.php"); ?>
                <script type="text/javascript" src="js/mdb.min.js"></script>
                <script type="text/javascript"></script>
            </div>
        </div>
        <div class="container d-flex align-items-center text-center justify-content-center mt-0 pt-5"
        style="padding-top:8em">
            <h3 class="text-white small text-*-center m-3 mt-auto mb-auto"
            style="font-size:4vw;font-family: 'Montserrat', serif;">ELIGE TU</h3>
            <h3 class="text-white text-*-center" 
            style="font-size:6.1vw; font-family: 'Roboto Slab', serif;">RECETA</h3>
        </div>              
            <div class="container input-group mb-5 w-75 botones " style="">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group" style="margin-left:12px">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">DESAYUNO</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">ALMUERZO</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">CENA</label>
                </div>         
                <div class="container d-flex justify-content-center botones">  
                    <select class="form-select" style="width:20%; border:none; border-radius:0">
                        <option>Tipo</option>
                        <option>Dietética</option>
                        <option>Vegetariana</option>
                        <option>Típica peruana</option>
                        <option>Comida rápida</option>
                    </select>
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" style="height:auto;border:none;border-radius:0px" required="true"/>
                    <button type="button" class="btn btn-primary" onclick="searchReceta()"
                    style="border-radius:0px;background-color:#F3F3F4;color:black">
                        <i class="fas fa-search"></i>
                    </button>
                </div>


            </div>   
            <br>
            <br>
            <br>       
      </div>
    <div class="container" style="margin-top:7vw">
        <div class="row row-cols-1 row-cols-md-3 g-4" id="space-list">
    </div> 
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" style="max-width:700px">
            <div class="modal-content" style="background-color:#F1FDFE;">
                <div class="modal-header">
                    <h5 class="modal-title text-center font-weight-bolder" id="exampleModalLabel" 
                    style="color:#032D53;font-size:1.2rem">INGREDIENTES QUE NECESITAS PARA 
                        LA ENSALADA DE SALMÓN CON AGUACATE, TOMATE Y PEPINO
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-around">
                        <h6 style="font-size:0.8rem;font-weight:bolder;color:black"><img src="img/icon1.png" style="height:2rem" alt="">
                        4 PORCIONES</h6>
                        <h6 style="font-size:0.8rem;font-weight:bolder;color:black"><img src="img/icon2.png" style="height:2rem" alt="">
                        TIEMPO DE PREPARACIÓN: 10 MIN</h6>
                        <h6 style="font-size:0.8rem;font-weight:bolder;color:black"><img src="img/icon2.png" style="height:2rem" alt="">
                        TIEMPO DE COCCIÓN: 10 MIN</h6>
                    </div>
                    <h6 style="color:#032D53;font-weight:bolder">INGREDIENTES:</h6>
                    <img src="img/img-receta.png"  class="img-fluid" style="display:inline-block;float:right;height:16rem" alt="">
                    <ul style="color:black">
                        <li style="list-style: disc;font-size:0.9rem">500 g (1 libra) de filetes de salmón sin piel</li>
                        <li style="list-style: disc;font-size:0.9rem">4 tazas de hojas de lechuga romana, lavadas y secas</li>
                        <li style="list-style: disc;font-size:0.9rem">1 pepino grande, cortado en cubitos</li>
                        <li style="list-style: disc;font-size:0.9rem">1 taza de tomates uva, cortados en cuartos</li>
                        <li style="list-style: disc;font-size:0.9rem">1 cebolla morada, cortada en cubitos</li>
                        <li style="list-style: disc;font-size:0.9rem">1 aguacate, cortado en cubitos</li>
                        <li style="list-style: disc;font-size:0.9rem">4 cucharadas de aceite de oliva</li>
                        <li style="list-style: disc;font-size:0.9rem">3 cucharadas de jugo de limón fresco</li>
                        <li style="list-style: disc;font-size:0.9rem">1 cucharada de vinagre de vino tinto (opcional)</li>
                        <li style="list-style: disc;font-size:0.9rem">1 cucharada de eneldo fresco picado</li>
                        <li style="list-style: disc;font-size:0.9rem">1 cucharadita de orégano seco</li>
                        <li style="list-style: disc;font-size:0.9rem">1 cucharadita de sal</li>
                        <li style="list-style: disc;font-size:0.9rem">Pimienta negra molida, al gusto</li>  
                                              
                    </ul>
                    
                    <h6 style="color:#032D53;font-weight:bolder">PREPARACIÓN:</h6>
                    <ol style="color:black">
                        <li style="list-style: number;font-size:0.9rem">Para hacer la ensalada de salmón: mezcle todos los 
                        ingredientes de la marinada / aderezo (aceite de oliva, jugo de limón, eneldo, 
                        orégano, vinagre de vino tinto, sal y pimienta) en un frasco grande de vidrio. 
                        Vierta la mitad de la marinada en un plato grande y poco profundo. Refrigere 
                        la marinada restante para usarla como aderezo más tarde.</li>
                        <li style="list-style: number;font-size:0.9rem">Cubra el filete de salmón con la marinada. Caliente 
                        1 cucharada de aceite en una sartén a fuego medio. Dorar el salmón por ambos lados 
                        hasta que esté crujiente y cocido a su gusto.</li>
                        <li style="list-style: number;font-size:0.9rem">Mientras se cocina el salmón, prepare todos los 
                        ingredientes de la ensalada (lechuga romana, tomate, aguacate, pepino y cebolla morada) 
                        y mezcle o coloque en una ensaladera grande.</li>
                        <li style="list-style: number;font-size:0.9rem">Cortar el salmón en rodajas y colocarlo sobre la ensalada. 
                        Rocíe la ensalada de salmón con el aderezo restante que guardó en el paso.</li>
                        <li style="list-style: number;font-size:0.9rem">Adorne con rodajas de limón y sirva inmediatamente o refrigere. 
                        ¡Disfrutar!</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>         
  </div>
  
</body>
  
  <br>
  <br>
  <br>
  <?php include("layouts/footer.php"); ?>
  <script src="js/javascript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
