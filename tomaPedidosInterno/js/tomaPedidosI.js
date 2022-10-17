let btnStatus = document.querySelectorAll(".btn-status")[0];
let btnStatusClose = document.querySelectorAll(".btn-status-close")[0];
let modalStatus = document.querySelectorAll(".modal-status")[0];
let modalStatusC = document.querySelectorAll(".modal-status-container")[0];

btnStatus.addEventListener("click", function(e){
    e.preventDefault();
    modalStatus.style.opacity  = "1";
    modalStatus.style.visibility = "visible";
    modalStatus.classList.toggle("modal-status-close");
    btnStatus.style.display = "none";
    btnStatusClose.style.display = "block";
});

btnStatusClose.addEventListener("click", function(e){
    modalStatus.classList.toggle("modal-status-close");
    btnStatus.style.display = "block";
    btnStatusClose.style.display = "none";

    setTimeout(function(){
        modalStatus.style.opacity  = "0";
        modalStatus.style.visibility = "hidden"; 
    }, 400);
});