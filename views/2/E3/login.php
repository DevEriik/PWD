<?php

//?Obtenemos el error de que no se encuentra el usuario
$error = $_GET['Error'] ?? null;

?>


    <main class="d-flex align-items-center justify-content-center my-5">
    <div class="card shadow-sm login-card" style="max-width: 400px;">
        <div class="card-body p-4">
            <h3 class="card-title text-center mb-4">Member Login</h3>

            <button type="button" class="btn-close" aria-label="Close" style="position: absolute; top: 10px; right: 10px;"></button>

            <form name="login-form" id="login-form" method="POST" action="/PWD/views/action/actionForm.php" novalidate>
                <input type="hidden" name="accion" value="tp2e3">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Username" required>
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

                <?php

                    if ($error !== null) { ?>
                        <div class="alert alert-danger text-center">
                            Usuario o Contraseña no encontrado.
                        </div><?php
                    }

                ?>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg">Login</button>
                </div>
            </form>

            <div class="my-2 d-flex justify-content-center">
                <a href="?page=tp2" class="btn btn-danger"> 🡨 </a>
            </div>

        </div>

        
</main>
