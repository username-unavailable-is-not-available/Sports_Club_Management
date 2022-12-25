function logValidation() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if(email == "") {
        alert("Email Required!!");
    }

    if(password == "") {
        alert("Password Required!!");
        return false;
    } /*else if(password.length < 8) {
        alert("Password Must Be 8 Characters Long");
        return false;
    }*/
}


//function regValidation() {}
  