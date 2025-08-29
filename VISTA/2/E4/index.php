<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../Boostrap-CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/2/E4/style.css">
    <title>Empresa Cinem@s</title>
</head>
<body>
    <div class="container my-5">
        <form id="pelicula-form" method="GET" action="../../../CONTROL/2/E4/pelicula-intro.php" class="needs-validation" novalidate>
            <div class="text-center mb-4">
                <h3 id="title-cine">Cinem@s</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="input-title" class="form-label">Título</label>
                        <input name="input-title" id="input-title" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="input-director" class="form-label">Director</label>
                        <input name="input-director" id="input-director" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="input-produccion" class="form-label">Producción</label>
                        <input name="input-produccion" id="input-produccion" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <select name="nacionalidad" id="nacionalidad" class="form-select" required>
                            <option value="Argentina">Argentina</option>
                            <option value="Brasil">Brasil</option>
                            <option value="España">España</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Mexico">México</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input-duracion" class="form-label">Duración (minutos)</label>
                        <input name="input-duracion" id="input-duracion" type="number" class="form-control" required>
                        <div class="invalid-feedback">
                            La duración debe ser entre 0 y 999 minutos.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="input-actores" class="form-label">Actores</label>
                        <input name="input-actores" id="input-actores" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="input-guion" class="form-label">Guion</label>
                        <input name="input-guion" id="input-guion" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="input-anio" class="form-label">Año</label>
                        <input name="input-anio" id="input-anio" type="number" min="1000" max="9999" class="form-control" required>
                        <div class="invalid-feedback">
                            El año debe ser un número entre 1000 y 9999.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="genero-select" class="form-label">Género</label>
                        <select name="genero-select" id="genero-select" class="form-select" required>
                            <option value="Comedia">Comedia</option>
                            <option value="Drama">Drama</option>
                            <option value="Terror">Terror</option>
                            <option value="Romanticas">Románticas</option>
                            <option value="Suspenso">Suspenso</option>
                            <option value="Otras">Otras</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Restricciones de edad</label>
                        <div class="form-check">
                            <input name="input-restriccion" id="input-restriccion1" type="radio" class="form-check-input" value="Todos los publicos" required>
                            <label for="input-restriccion1" class="form-check-label">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input name="input-restriccion" id="input-restriccion2" type="radio" class="form-check-input" value="Mayores de 7 años" required>
                            <label for="input-restriccion2" class="form-check-label">Mayores de 7 años</label>
                        </div>
                        <div class="form-check">
                            <input name="input-restriccion" id="input-restriccion3" type="radio" class="form-check-input" value="Mayores de 18 años" required>
                            <label for="input-restriccion3" class="form-check-label">Mayores de 18 años</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="input-sinopsis" class="form-label">Sinopsis</label>
                        <textarea name="input-sinopsis" id="input-sinopsis" rows="10" class="form-control" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="reset" class="btn btn-secondary me-2">Borrar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
        <div id="resultados-formulario" class="mt-4 p-4 border rounded" style="background-color: #c0f5c596;color: #21b351c5">
            
        </div>
    </div>
    <script src="../../../Boostrap-JS/bootstrap.bundle.min.js"></script>
    <script src="validaciones.js"></script>
</body>
</html>