

document.addEventListener("DOMContentLoaded", function () {
    var categorieLink = document.getElementById("categorie-link");
    var modal = document.getElementById("modal");

    categorieLink.addEventListener("click", function (event) {
        event.preventDefault();
        modal.style.display = "block";
    });

    modal.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

function clo(){
  document.getElementById('myModal1').style.display="none;" 
}
function op(){
  document.getElementById('myModal1').style.display="block;" 
}

