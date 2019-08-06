window.onload{
function validar(){
  var email, contra;
  email = document.getElementById("email").value;
  contra = document.getElementById("password").value;

  if(email ==""){
    alert("Llena el campo del email");
    return false;
  }
  if (contra =="") {
    alert("Llena la contra");
    return false;
  }
  else if (email.lenght>255) {
    alert("el mail es muy largo");
return false;
  }
  else if (contra.lenght<4) {
    alert("la contra es muy corta");
return false;
  }
}
}
