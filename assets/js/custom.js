 function enableButtonEnviar(){
   document.getElementById("buttonEnviar").disabled = false;
 }

$('input[name="p_fone"]').keypress(function() {
    if (this.value.length > 11) {
        return false;
    }
});
