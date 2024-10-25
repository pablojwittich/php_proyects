const pass = document.getElementById("mostrarContraseña"),
  check = document.querySelector(".Verpass");

check.addEventListener("click", e => {
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
})
