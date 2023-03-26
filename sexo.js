const palabras = ["manzana", "pera", "uva", "plátano", "naranja", "kiwi", "mango", "melón", "sandía", "fresa", "frambuesa"];

const botonGenerar = document.getElementById("btn-generar");
const palabraGenerada = document.getElementById("palabra-generada");

botonGenerar.addEventListener("click", function() {
  let palabraAleatoria = palabras[Math.floor(Math.rand
om() * palabras.length)];
  palabraGenerada.innerText = palabraAleatoria;
});
