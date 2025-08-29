<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form id="loginForm" method="post" action="/tu_script_servidor.php">
    <p>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email">
    </p>
    <p>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
    </p>
    <p>
        <input type="submit" value="Iniciar Sesión">
    </p>
    </form>
</body>

<script>
    $(document).ready(function() {
  $("#loginForm").validate({
    rules: {
      email: {
        required: true,
        email: true // La regla 'email' valida el formato del correo
      },
      password: {
        required: true,
        minlength: 8 // La contraseña debe tener al menos 8 caracteres
      }
    },
    messages: {
      email: {
        required: "Por favor, introduce tu correo electrónico.",
        email: "El formato del correo no es válido."
      },
      password: {
        required: "Por favor, introduce una contraseña.",
        minlength: "La contraseña debe tener al menos 8 caracteres."
      }
    },
    submitHandler: function(form) {
      // Esta función se ejecuta si el formulario es válido
      alert("Formulario validado correctamente. Enviando...");
      form.submit();
    }
  });
});
</script>
</html>