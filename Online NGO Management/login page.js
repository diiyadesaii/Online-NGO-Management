function validate() {
    var letter = /[a-zA-Z]/;
    var number = /[0-9]/;
    var specialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/; // Regular expression for special characters
    var uname = document.registration_form.name.value;
    var pass = document.registration_form.pass.value;
    var errorMessage = "";

    if (uname == "") {
        errorMessage += "Username cannot be Empty!!\n";
    }
    if (pass == "") {
        errorMessage += "Password must be filled\n";
    }
    if (pass.length < 8) {
        errorMessage += "Password Should be longer than 8 characters.\n";
    }
    if (!letter.test(pass)) {
        errorMessage += "Password should include UpperCase and LowerCase character\n";
    }
    if (!number.test(pass)) {
        errorMessage += "Password should Include Digit\n";
    }
    if (!specialChar.test(pass)) {
        errorMessage += "Password should Include Special Character\n";
    }

    if (errorMessage !== "") {
        alert(errorMessage);
        return false;
    }
    return true;
}
