function validarEmail(){
    console.log('Entra en función');
    var vemail = document.getElementById('email').value;
    var re_email =  new RegExp('^[\\w-]+(\\.[\\w-]+)*@[A-Za-z0-9]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$');
    if (!re_email.test(vemail)) {
      console.log('Email incorrecto e.e');
      document.getElementById('email').focus();
      //document.getElementById('email').style = "border:1px solid red";
      document.getElementById('email').setAttribute('class','error');
    } else {
      //document.getElementById('email').style = "border:1px light grey";
      document.getElementById('email').setAttribute('class','');
    }
  }
  function validaCheckbox(form) {
    var selected = false;
    for (i = 0; i < form.elements.length; i++){
        if(form[i].type == "checkbox" && form[i].checked == true){
            selected = true;
            break;
        }
    }
    if(!selected) {
        alert("Debe seleccionar al menos una plataforma");
        return false;
    }
  }