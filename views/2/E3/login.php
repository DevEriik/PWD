<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../CSS/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/2/E3/style.css">
    <title>Login de Usuario</title>
</head>
<body>
    <div class="card shadow-sm login-card">
        <div class="card-body p-4">
            <h3 class="card-title text-center mb-4">Member Login</h3>

            <button type="button" class="btn-close" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>
            <form name="login-form" id="login-form" method="POST" action="../../../controllers/2/E3/verificaPass.php">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Username"required>
                    <div class="invalid-feedback">
                    Por favor, ingrese un nombre de usuario.
                    </div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                    <div class="invalid-feedback" id="password-feedback">
                        La contraseña no cumple los requisitos.
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg">Login</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../JS/bootstrap.bundle.min.js"></script>

    <script src="validacion.js"></script>
</body>
</html>