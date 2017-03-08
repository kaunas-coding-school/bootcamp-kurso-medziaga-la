//// NODE BACKEND
//// 1 var. Node module exported, needs to be compiled to Javascript to run in browser
var Calculator = {};
Calculator.sum = function (number=true) {
    return number;
};
module.exports = Calculator;

//// Example of execution from app.js
// var calculator = require('calculator.js');
// console.log(calculator.sum(2));

// -----------------------------------------------------------
// BROWSER FRONTEND
// 2 var. Native Javascript Module pattern
// var Calculator = (function () {
//
//     var calc = {};
//     calc.sum = function (number) {
//         if (number === undefined) {
//             number = true;
//         }
//         return number;
//     };
//     return calc;
//
// })();

//// Example of execution from app.js
//// index.html -> app.js + calculator.js
// var calculator = new Calculator();
// console.log(calculator.sum(2));
