function searchReceta(){
    let html='';
    for (var i = 0; i < 9; i++) {
        html+=
        '<div class="col">'+
            '<div class="card h-100">'+
                '<img src="img/recetas.png" class="card-img-top img-fluid" alt="...">'+
                '<div class="card-body">'+
                    '<h5 class="card-title float-left" style="font-size:1.1em;color:black ">NOMBRE DE LA RECETA'+
                    '<img src="img/manzanita.png" alt="" class="img-fluid float-right mt-0"'+
                    'style="height:1.8em; float:right; padding-top:0"></h5>'+
                    '<div class="d-flex">'+
                        '<p class="card-text" style="font-size:1em">Tiempo de cocción: </p><p style="font-size:1em">1h</p>'+
                    '</div>'+
                    '<div class="d-flex">'+
                        '<p class="card-text" style="font-size:1em">Calorías: </p><p style="font-size:1em">100cal</p>'+
                    '</div>'+
                    '<button type="button" class="btn btn-link text-capitalize" data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-left:0;padding-right:3rem;'+
                    'font-family: "Roboto", serif;font-size:1.2rem;">'+
                    'Ingredientes</button>'+
                    '<button type="button" class="btn text-capitalize" style="font-size:1rem;padding-left:0.5rem;padding-right:0.5rem;'+
                    'background:linear-gradient(88.33deg, #0779E4 -7.64%, #000000 145.94%);color:white;border-radius:20px" >Añadir a calendario '+
                    '<img src="img/simbolo.png" alt="" class="img-fluid" style="height:1.6rem">'+
                    '</button>'+
                '</div>'+
            '</div>'+
        '</div>';
    }
    if (html=='') {
        document.getElementById("space-list").innerHTML="No hay resultados";
    }else{
        document.getElementById("space-list").innerHTML=html;
    }
}
