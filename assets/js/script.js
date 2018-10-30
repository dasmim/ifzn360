// $(document).ready(function() {
//     $("#information_id").hover(function() { 
//     var izinho = document.getElementById("idizinho");
//     izinho.style.margin = "8px";
//     var conteudoinformation = document.getElementById("idconteudoinformation");
//     conteudoinformation.style.display = "block";

// }, function() {
//      conteudoinformation.style.display = "none";
//      });
// });
$(document).ready(function(){
    $("#information_id").hover(function(){
        $("#idconteudoinformation").css("display", "block");
        }, function(){
        $("#idconteudoinformation").css("display", "none");
    });
});
window.onload = function detectar_mobile() {
    if (navigator.userAgent.match(/Android/i) ||
        navigator.userAgent.match(/webOS/i) ||
        navigator.userAgent.match(/iPhone/i) ||
        navigator.userAgent.match(/iPad/i) ||
        navigator.userAgent.match(/iPod/i) ||
        navigator.userAgent.match(/BlackBerry/i) ||
        navigator.userAgent.match(/Windows Phone/i)
    ) {
        return true;
    } else {
        return false;
    }
}
function AbrirLateral() {
    var lateral = document.getElementById("idlateral");
    lateral.style.display = "flex";
    lateral.style.paddingLeft = "100px";

}

function FecharLateral() {
    var lateral = document.getElementById("idlateral");
    lateral.style.display = "flex";
}

// function AbrirMapa() {
//     var mapa = document.getElementById("idmapa");
//     mapa.style.display = "flex";
// }
function AbrirMapa() {
    var mapa = document.getElementById("idmapa");
    mapa.style.display = "flex";
    var idconteudoinformation = document.getElementById("information_id");
    idconteudoinformation.style.display = "none";
    var icone = document.getElementById("icone");
    icone.style.display = "none";
}

// function FecharMapa() {
//     var mapa = document.getElementById("idmapa");
//     mapa.style.display = "none";
// }
function FecharMapa() {
    var mapa = document.getElementById("idmapa");
    mapa.style.display = "none";
    var idconteudoinformation = document.getElementById("information_id");
    idconteudoinformation.style.display = "block";
    var icone = document.getElementById("icone");
    icone.style.display = "block";
}