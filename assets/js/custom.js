 function enableButtonEnviar(){
   document.getElementById("buttonEnviar").disabled = false;
 }

$('input[name="telefone"]').keypress(function() {
    if (this.value.length > 11) {
        return false;
    }
});
