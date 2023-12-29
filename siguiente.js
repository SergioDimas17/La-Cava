// Seleccionamos los elementos a utilizar
const carrusel = document.querySelector(".carrusel");
const items = carrusel.querySelectorAll(".item");

// Variable para controlar el índice de la imagen actual
let indiceActual = 0;

// Función para rotar las imágenes automáticamente
function rotarAutomaticamente() {
  items[indiceActual].style.display = "none";
  indiceActual = (indiceActual + 1) % items.length; // Actualizamos el índice y aseguramos que vuelva al inicio al llegar al final
  items[indiceActual].style.display = "block";

  // Re-ejecutamos la función cada 4 segundos
  setTimeout(rotarAutomaticamente, 4000);
}

// Iniciamos la rotación automática
rotarAutomaticamente();

