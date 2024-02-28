if(formConsulta1)
  {
    // Referencia de los elementos
    boton1 = document.getElementById("botonConsulta1");
    controlador1 = "Controllers/Consulta1Controller.php";
    div1 = document.getElementById("contenedor2");
    // Evento y llamada a la función
    formConsulta1.addEventListener("submit", function(event){
      event.preventDefault();
      seleccionarDatos1(formConsulta1,boton1,controlador1,div1);
    });
  }

  const botonConsulta2 = document.getElementById("botonConsulta2");
  // Paso 2 - Asociación del elemento al evento y llamada a la función
  if(botonConsulta2)
  {
    // Referencia de los elementos
    controlador2 = "Controllers/Consulta2Controller.php";
    div2 = document.getElementById("contenedor2");
    // Evento y llamada a la función
    botonConsulta2.addEventListener("click", function(event){
      event.preventDefault();
      seleccionarDatos2(formConsulta1,botonConsulta2,controlador2,div2);
    });
  }  