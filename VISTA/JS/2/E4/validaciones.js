document.addEventListener("DOMContentLoaded", function () {
  const formulario = document.getElementById("pelicula-form");

  formulario.addEventListener("submit", function (e) {
    e.preventDefault();

    const anioValido = validarAnio();
    const duracionValida = validarDuracion();

    if (!anioValido || !duracionValida) {
      e.stopPropagation();
    } else {
      //*Si todo esta bien se muestran los datos.
      mostrarDatos();
    }

    formulario.classList.add("was-validated");
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

  function mostrarDatos() {
    const inputTitulo = document.getElementById("input-title").value;
    const inputDirector = document.getElementById("input-director").value;
    const inputProduccion = document.getElementById("input-produccion").value;
    const selectNacionalidad = document.getElementById("nacionalidad").value;
    const inputDuracion = document.getElementById("input-duracion").value;
    const inputActores = document.getElementById("input-actores").value;
    const inputGuion = document.getElementById("input-guion").value;
    const inputAnio = document.getElementById("input-anio").value;
    const selectGenero = document.getElementById("genero-select").value;
    const inputRestriccion = obtenerRestriccion();

    const resultadosDiv = document.getElementById("resultados-formulario");

    //!Variable que muestra el resultado.
    const resultadosHTML = `
    <h3 class="mb-3" style="color:black">La pelicula introducida es</h3>
    <p><strong>Titulo:</strong> ${inputTitulo}</p>
    <p><strong>Actores:</strong> ${inputActores}</p>
    <p><strong>Director:</strong> ${inputDirector}</p>
    <p><strong>Guion:</strong> ${inputGuion}</p>
    <p><strong>Produccion:</strong> ${inputProduccion}</p>
    <p><strong>Año:</strong> ${inputAnio}</p>
    <p><strong>Nacionalidad:</strong> ${selectNacionalidad}</p>
    <p><strong>Genero:</strong> ${selectGenero}</p>
    <p><strong>Duracion:</strong> ${inputDuracion}</p>
    <p><strong>Restriccion de edad:</strong> ${inputRestriccion}</p>`;

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
