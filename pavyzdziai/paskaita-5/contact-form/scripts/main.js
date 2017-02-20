(function() {
'use strict';

  // 1. Pasirenkam elementus
  var contactForm = document.querySelector("#js-contact");
  // var firstName = document.querySelector("#js-firstname");
  // console.log(contactForm);
  // console.log(contactForm.firstname);
  // console.log(contactForm.lastname);
  // console.log(firstName);

  var data = [{
    firstname: ["Laurynas"],
    lastname: "Antanavicius",
    email: "laurynas@kaunascoding.lt"
  },
  {
    firstname: "",
    lastname: "",
    email: "l..."
  }];

  // data[0].lastname = "Petraitis";
  // console.log(data[0].firstname[1]);
  // console.log(data);
  // console.log(console);

  // test case assignment
  function assignData (abc, aaa) {
    abc.firstname.value = aaa[0].firstname;
    abc.lastname.value = aaa[0].lastname;
    abc.email.value = aaa[0].email;
  }

  // add values
  // assignData(contactForm, data);

  console.log(window);

  // 2 Add event listener
  contactForm.addEventListener("submit", validateFields);

  function validateFields(event) {
    event.preventDefault();
    console.log(event.target.firstname.value);
  }
})();
