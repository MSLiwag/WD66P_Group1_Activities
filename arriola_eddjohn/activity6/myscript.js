const DEFAULT_EMAIL = "admin@gmail.com";
const DEFAULT_PASSWORD = "password";

function login() {
  let InputtedEmail = document.getElementById("inputEmail3");
  let InputtedPAssword = document.getElementById("inputPassword3");

  if (DEFAULT_EMAIL === InputtedEmail.value && DEFAULT_PASSWORD === InputtedPAssword.value) {
    showAlertViaClass(true);
  } else {
    showAlertViaClass(false);
  }
}

function reset() {
  let div1 = document.getElementById("successfulMsg");
  div1.classList.add("d-none");
  let div2 = document.getElementById("errorMsg");
  div2.classList.add("d-none");
}
function showAlertViaClass(isSuccess) {
  reset();
  if (isSuccess) {
    let div = document.getElementById("successfulMsg");
    div.classList.remove("d-none");
  } else {
    let div = document.getElementById("errorMsg");
    div.classList.remove("d-none");
  }
}

