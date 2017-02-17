console.log(window);

var greeting = function(firstName){
  return "Hello " + firstName;
};

function firstName () {
  return "Laurynas";
}

console.log(firstName());
console.log(greeting("Laurynas"));
console.log(greeting(firstName()));

// console.log(typeof(greeting), greeting());
