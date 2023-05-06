document.getElementById("inputSearch").addEventListener("keyup", search);

function search(){
    filter = inputSearch.value.toUpperCase(); /* "inputSearch" ID DEL BUSCADOR */
    li = navbar_items.getElementsByTagName("li");

    for(i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0] /* RECORREMOS LAS ETIQUEAS "a" */
        textValue = a.txtContent || a.innerText; /* ALMACENAMOS EN "textValue" LO QUE ESTA CONTENIDO EN "a" */

        if(textValue.toUpperCase().indexOf(filter) > -1){ /* INDEXAMOS LO QUE ESCRIBIMOS EN EL BUSCADOR */
            li[i].style.display = "";
            navbar_items.style.display = "block"; /* MUESTRA EL SEARCH CUANDO APRETAMOS EL ICONO */

            if(inputSearch.value === ""){
                navbar_items.style.display = "none"; /* OCULTA EL SEARCH CUANDO LA BARRA ESTA VACIA */
            }
        }else{
            li[i].style.display = "none";
        }
    }
}

/* FALTA COMPLETAR */