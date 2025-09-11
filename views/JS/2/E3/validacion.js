document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  const form = document.getElementById("login-form");
  const usuarioInput = document.getElementById("usuario");
  const passwordInput = document.getElementById("password");
  const passwordFeedback = document.getElementById("password-feedback");

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    event.stopPropagation();

    //*Se limpian validaciones anteriores.
    passwordInput.classList.remove("is-invalid", "is-valid");
    passwordFeedback.textContent = "";

    let formIsValid = true;

    //* Validacion de campos vacios (boostrap lo maneja con required)
    if (!form.checkValidity()) {
      formIsValid = false;
    }

    //* Validacion de password segura
    const usuario = usuarioInput.value;
    const password = passwordInput.value;

    //*Longitud de password
    if (password.length < 8) {
      passwordFeedback.textContent =
        "La contraseña debe tener al menos 8 caracteres.";
      passwordInput.classList.add("is-invalid");
      formIsValid = false;
    }

    //*No debe ser igual al nombre de usuario.
    if (password === usuario) {
      passwordFeedback.textContent =
        "La contraseña es igual al nombre de usuario.";
      passwordInput.classList.add("is-invalid");
      formIsValid = false;
    }

    //*Debe tener letras y numeros
    const tieneLetras = /[a-zA-Z]/.test(password);
    const tieneNumeros = /[0-9]/.test(password);

    if (!tieneLetras || !tieneNumeros) {
      passwordFeedback.textContent =
        "La contraseña debe contener letras y numeros";
      passwordInput.classList.add("is-invalid");
      formIsValid = false;
    }

    //* Si todas las validaciones pasan, se envía el formulario
    if (formIsValid) {
      form.submit();
    }

    // Muestra los mensajes de validación de Bootstrap
    form.classList.add("was-validated");
  });
});
