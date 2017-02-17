// 1. Pasirenkam HTML el
var screenInput = document.querySelector("#js-screen");
var numberInput = document.querySelectorAll(".js-number");
var operatorInput = document.querySelectorAll(".js-operator");
var resultInput = document.querySelector("#js-result");
var firstNumber, operatorValue;

// 2. Stebim arba vykdom event'a
// screenInput.addEventListener();

for (var i = 0; i < numberInput.length; i++) {
  numberInput[i].addEventListener("click", numberClick);
}

for (var i = 0; i < operatorInput.length; i++) {
  operatorInput[i].addEventListener("click", operatorClick);
}

resultInput.addEventListener("click", resultClick);

// 3. Sukuriam, vykdom funkcija
function numberClick(event) {
  if (screenInput.value === "0") {
    screenInput.value = event.target.value;
  } else {
    screenInput.value += event.target.value;
  }
}

function operatorClick(event) {
  firstNumber = screenInput.value;
  operatorValue = event.target.value;
  screenInput.value = "0";
}

function resultClick() {
  var result;
  var secondNumber = screenInput.value;
  switch (operatorValue) {
    case "+":
      result = parseInt(firstNumber) + parseInt(secondNumber);
      break;
    case "/":
      result = firstNumber / secondNumber;
      break;
    case "-":
      result = firstNumber - secondNumber;
      break;
    case "x":
      result = firstNumber * secondNumber;
      break;
  }
  screenInput.value = result;
}
