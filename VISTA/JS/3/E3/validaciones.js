document.addEventListener("DOMContentLoaded", function () {
  const formulario = document.getElementById("pelicula-form");

  formulario.addEventListener("submit", function (e) {
    e.preventDefault();

    const anioValido = validarAnio();
    const duracionValida = validarDuracion();

    if (!anioValido || !duracionValida) {
      e.stopPropagation();
      formulario.classList.add("was-validated");
      return;
    }

    //!Creo un objeto FormData para enviar todos los datos, incluyendo el arcchivo

    const formData = new FormData(formulario);
    //?Uso fetch para enviar el formulario a mi script de PHP
    fetch(formulario.action, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json()) //*Espera respuesta JSON del servidor
      .then((data) => {
        if (data.exito) {
          //?Llama a la funcion para mostrar los datos, ahora pasando la URL de la imagen
          mostrarDatos(data.url_imagen, data.datos_pelicula);
        } else {
          alert(data.error);
        }
      })
      .catch((error) => console.error("Error:", error));
  });

  //!FUNCIONES DE VALIDACION

  //*VALIDAR ANIO
  function validarAnio() {
    const inputAnio = document.getElementById("input-anio");
    const anio = parseInt(inputAnio.value);

    if (isNaN(anio) || anio < 1000 || anio > 9999) {
      inputAnio.classList.remove("is-valid");
      inputAnio.classList.add("is-invalid");
      return false;
    } else {
      inputAnio.classList.remove("is-invalid");
      inputAnio.classList.add("is-valid");
      return true;
    }
  }

  //*VALIDAR DURACION

  function validarDuracion() {
    const inputDuracion = document.getElementById("input-duracion");
    const duracion = parseInt(inputDuracion.value);

    if (isNaN(duracion) || duracion > 999 || duracion < 0) {
      inputDuracion.classList.add("is-invalid");
      inputDuracion.classList.remove("is-valid");
      return false;
    } else {
      inputDuracion.classList.add("is-valid");
      inputDuracion.classList.remove("is-invalid");
      return true;
    }
  }

  //*MUESTRA LOS DATOS INGRESADOS EN EL FORMULARIO

  function mostrarDatos(urlImagen, datosPelicula) {
    const resultadosDiv = document.getElementById("resultados-formulario");

    //!Variable que muestra el resultado.
    const resultadosHTML = `
    <h3 class="mb-3" style="color:black">La pelicula introducida es</h3>
    <p><strong>Título:</strong> ${datosPelicula["input-title"]}</p>
    <p><strong>Actores:</strong> ${datosPelicula["input-actores"]}</p>
    <p><strong>Director:</strong> ${datosPelicula["input-director"]}</p>
    <p><strong>Guion:</strong> ${datosPelicula["input-guion"]}</p>
    <p><strong>Produccion:</strong> ${datosPelicula["input-produccion"]}</p>
    <p><strong>Año:</strong> ${datosPelicula["input-anio"]}</p>
    <p><strong>Nacionalidad:</strong> ${datosPelicula["nacionalidad"]}</p>
    <p><strong>Genero:</strong> ${datosPelicula["genero-select"]}</p>
    <p><strong>Duracion:</strong> ${datosPelicula["input-duracion"]}</p>
    <p><strong>Restriccion de edad:</strong> ${datosPelicula["input-restriccion"]}</p>
    <img src="${urlImagen}" alt="Portada de la película" style="max-width: 200px;">`;

    resultadosDiv.innerHTML = resultadosHTML;
    resultadosDiv.style.display = "block";
  }

  //* Función para obtener el valor de la restricción de edad seleccionada
  function obtenerRestriccion() {
    const restricciones = document.getElementsByName("input-restriccion");
    let valorRestriccion = "";

    for (let i = 0; i < restricciones.length; i++) {
      if (restricciones[i].checked) {
        valorRestriccion = restricciones[i].value;
        break;
      }
    }

    return valorRestriccion;
  }
});
