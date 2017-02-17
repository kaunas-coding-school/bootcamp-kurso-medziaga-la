console.log("Labas");

// 1. Pasirenkam HTML el
var screenInput = document.querySelector("#js-screen");
console.log(screenInput);

var numberInput = document.querySelectorAll(".js-number");
console.log(numberInput);

// 2. Stebim arba vykdom event'a
// screenInput.addEventListener();

for (var i = 0; i < numberInput.length; i++) {
  numberInput[i].addEventListener("click", numberClick);
}

// 3. Sukuriam, vykdom funkcija
function numberClick(event) {
  screenInput.value = event.target.value;
  console.log(event);
}

console.log(numberClick);

// Ekrano reiksmes atnaujinimas
