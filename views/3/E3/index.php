<?php

//?Obtenemos los datos por el URL para mostrar al usuario.
$titulo = $_GET['input-title'];
$actores = $_GET['input-actores'];
$director = $_GET['input-director'];
$guion = $_GET['input-guion'];
$produccion = $_GET['input-produccion'];
$anio = $_GET['input-anio'];
$nacionalidad = $_GET['nacionalidad'];
$genero = $_GET['genero-select'];
$duracion = $_GET['input-duracion'];
$restriccion = $_GET['input-restriccion'];
$img = $_GET['resultado'];
?>


    <div class="container my-5">
        <form id="pelicula-form" method="POST" action="/PWD/views/action/actionForm.php" class="needs-validation" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="accion" value="tp3e3">
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
                        <label for="portada-pelicula">SELECCIONES LA PORTADA PARA LA PELICULA</label> <br>
                        <input name="input-file" type="file" id="portada-pelicula" required>
                        <div class="invalid-feedback" id="feedback-portada">
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
                <button type="submit" class="btn btn-primary me-2">Enviar</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>
    <?php

    if ($titulo !== null && $actores !== null && $director !== null && $guion !== null && $produccion !== null && $anio !== null && $nacionalidad !== null && $genero !== null && $duracion !== null && $restriccion!== null) {?>
        
            <div class="alert alert-success  mx-5">
                <h3 class="text-center text-primary">La pelicula introducida es</h3>
                <p class="text-success">Titulo: <span class="text-dark"><?php echo htmlspecialchars($titulo) ?></span> </p>
                <p class="text-success">Actores: <span class="text-dark"><?php echo htmlspecialchars($actores) ?></span></p>
                <p class="text-success">Director: <span class="text-dark"><?php echo htmlspecialchars($director) ?></span></p>
                <p class="text-success">Guion: <span class="text-dark"><?php echo htmlspecialchars($guion) ?></span></p>
                <p class="text-success">Produccion: <span class="text-dark"><?php echo htmlspecialchars($produccion) ?></span></p>
                <p class="text-success">Anio: <span class="text-dark"><?php echo htmlspecialchars($anio) ?></span></p>
                <p class="text-success">Nacionalidad: <span class="text-dark"><?php echo htmlspecialchars($nacionalidad) ?></span></p>
                <p class="text-success">Genero: <span class="text-dark"><?php echo htmlspecialchars($genero) ?></span></p>
                <p class="text-success">Duracion: <span class="text-dark"><?php echo htmlspecialchars($duracion) ?></span></p>
                <p class="text-success">Restriccion de edad: <span class="text-dark"><?php echo htmlspecialchars($restriccion) ?></span></p>
                <img src="/PWD/assets/img/<?php echo htmlspecialchars($img); ?>" alt="Imagen" width="300" 
     height="450" 
     class="img-fluid">
            </div>
        <?php
    }
    
    ?>
    <div class="mb-5 d-flex justify-content-center">
        <a href="?page=tp3" class="btn btn-danger"> 🡨 </a>
    </div>