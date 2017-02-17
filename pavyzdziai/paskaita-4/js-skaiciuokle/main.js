console.log(window);

var greeting = function(firstName){
  return "Hello " + firstName;
};

function firstName () {
  return "Laurynas";
}

var names = ["Jonas", "Laurynas", "Petras"];
names.push("Ona");

for (var i = 0; i < names.length; i++) {
  console.log(names[i]);
}

// console.log(firstName());
// console.log(greeting("Laurynas"));
// console.log(greeting(firstName()));

// console.log(typeof(greeting), greeting());
