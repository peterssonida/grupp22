/* Här samlas alla funktioner för javascript-validering  */
// funktion för att validera login vid inskick.
function validateLogin() {

  let email = document.loginForm.email.value;
  let password = document.loginForm.password.value;

  if (isEmailOk(email) && isPasswordOk(password, password)) {
    return true;
  }
  else {
    alert("Något gick fel. Kontrollera att alla fält är korrekt ifyllda.");
    return false;
  }
}
// funktion för att validera input vid registrering
function validateRegistration() {

  let firstname = document.registerForm.firstname.value;
  let lastname = document.registerForm.lastname.value;
  let email = document.registerForm.email.value;
  let password = document.registerForm.password.value;
  let password2 = document.registerForm.password2.value;

  if (notEmpty(firstname) && notEmpty(lastname) && isEmailOk(email) &&
      isPasswordOk(password, password2)) {
    return true;
  }
  else {
    alert("Något gick fel. Kontrollera att alla fält är korrekt ifyllda.");
    return false;
  }
}
// funktion för att validera ny kommentar vid inckick.
function validatePost() {

  let comment = document.myForm.newComment.value;

  if (notEmpty(comment)) {
    return true;
  }
  else {
      alert("Något gick fel. Kontrollera att alla fält är korrekt ifyllda.");
    return false;
  }

}

/* Hjälp-funktioner */

function notEmpty(input) {
  if (input.trim() == "") {
    return false;
  }
  else {
    return true;
  }
}
/* funktion för att kolla så att email är ok, dvs innehåller ett @ och en "."
 efter @, samt ej slutar med ".". */
function isEmailOk(email) {
  if (email.endsWith(".") == false &&
      email.indexOf(".", email.indexOf("@")) != -1) {
    return true;
  }
  else {
    return false;
  }
}
/* funktion för att kolla så password är OK, dvs är det samma som password2 (när
  användaren ska skriva in lösenordet igen), är 8 tecken eller mer, samt innehåller
 versaler, gemener, siffror och specialtecken. */
function isPasswordOk(password, password2) {

  if (password.localeCompare(password2) == 0 &&
      password.length >= 8 &&
      password.replace(/[A-Z]/, "") !== password &&
      password.replace(/[a-z]/, "") !== password &&
      password.replace(/[0-9]/, "") !== password &&
      specChars.test(password)) {
    return true;
  }
  else {
    return false;
  }

}
