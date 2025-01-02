$(document).ready(function(){
    // Inicializa componentes
    // para todas a paginas

    // Ativa navbar
    $('.sidenav').sidenav();

    // Ativa menu dropdown            
    $(".dropdown-trigger").dropdown({ 
        hover: false 
    });

    // Action button
    $('.fixed-action-btn').floatingActionButton();

    $(document).scroll(function() {
        setActionState();
    });  
    
    setActionState();
});

function setActionState() {
    var actionButton = $('#ActionButton');
    //var actionButtonWhats = $('#ActionButtonWhats');
    var scroll = $(document).scrollTop();

    if (scroll <  100) {
        // actionButton.css("display", "none");
        actionButton.fadeOut(); 
        //actionButtonWhats.fadeIn();
    } 
    if (scroll >= 100) { 
        //actionButton.css("display", "block");
        actionButton.fadeIn(); 
        //actionButtonWhats.fadeOut();
    }
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function enableButtonEnviar(){
    document.getElementById("buttonEnviar").disabled = false;
}