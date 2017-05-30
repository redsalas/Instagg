/**
 * Created by Jorge Salas on 01/03/2017.
 */

var input_pass     = document.getElementById("password");
var input_repss    = document.getElementById("re-password");
var input_email    = document.getElementById("email");
var input_nickname = document.getElementById("nickname");
var input_firsname = document.getElementById("first-name");
var input_lastname = document.getElementById("last-name");
var emailre = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

function validaCorreo() {
    var result = emailre.test(input_email.value);
    if (!result){
        input_email.focus();
        input_email.setAttribute('class','error');
    }else{
        input_email.setAttribute('class','');
    }
}

function validaPassword() {
    if(input_pass.value != input_repss.value){
        input_repss.setAttribute('class','error');
        input_pass.setAttribute('class','error');
        alert("Las contrasenas no coinciden");
    }else{
        input_repss.setAttribute('class','sucess');
        input_pass.setAttribute('class','sucess');
    }
}

function validaCampos() {
    if(input_nickname.value == null || input_nickname.value.length == 0 || /^\s+$/.test(input_nickname.value)){
        input_nickname.setAttribute('class','error');
    }else{
        input_nickname.setAttribute('class','');
    }

    if(input_firsname.value == null || input_firsname.value.length == 0 || /^\s+$/.test(input_firsname.value)){
        input_firsname.setAttribute('class','error');
    }else{
        input_firsname.setAttribute('class','');
    }

    if(input_lastname.value == null || input_lastname.value.length == 0 || /^\s+$/.test(input_lastname.value)){
        input_lastname.setAttribute('class','error');
    }else{
        input_lastname.setAttribute('class','');
    }

    if(input_pass.value == null || input_pass.value.length == 0 || /^\s+$/.test(input_pass.value)){
        input_pass.setAttribute('class','error');
    }else{
        input_pass.setAttribute('class','');
    }

    if(input_repss.value == null || input_repss.value.length == 0 || /^\s+$/.test(input_repss.value)){
        input_repss.setAttribute('class','error');
    }else{
        input_repss.setAttribute('class','');
    }
}

function validaCheckbox(form) {
    var selected = false;
    for (i = 0; i < form.elements.length; i++){
        if(form[i].type=="checkbox" && form[i].checked == true){
            selected = true;
            break;
        }
    }
    if(!selected) {
        alert("Debe seleccionar al menos una plataforma");
        return false;
    }
}