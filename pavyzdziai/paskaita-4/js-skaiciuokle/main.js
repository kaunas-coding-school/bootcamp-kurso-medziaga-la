var x = 2, y, z;

var names = ["Jonas", "Laurynas", "Petras"];
names.push("Ona");

console.log(window);

var greeting = function(firstName){
  console.log(firstName);
  return "Hello " + firstName;
};

function firstName2 () {
  return "Laurynas";
}

for (var i = 0; i < names.length; i++) {
  // console.log(names[i]);
}

function A () {
  var x = 5;
  console.log(x);
  B();
}

function B () {
  console.log(x);
}

A();

// console.log(firstName());
// console.log(greeting("Laurynas"));
// console.log(greeting(firstName()));

// console.log(typeof(greeting), greeting());
