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

  // Pridedam pagrindine funkcija, sujungiam su form submit veiksmu
  function validateFields(event) {
    // Is sio veiksmo pasiemam reiksmes is paciu laukeliu
    var fname = event.target.firstname.value;
    var lname = event.target.lastname.value;
    var email = event.target.email.value;

    // Pasitikrinam ar bent vienas is siu kintamuju yra tuscias
    // if (fname === "" || lname  === "" || email  === "") {
    //   // Stabdom formos siuntima
    //   event.preventDefault();
    //   // Sukuriam nauja div elementa
    //   var errorMessage = document.createElement("div");
    //   // Kintamasis patikrinimui ar jau yra message
    //   var oldError = document.querySelector(".alert");
    //   // Uzpildom nauja elementa turiniu
    //   errorMessage.innerHTML = '<p class="alert alert-danger">Please, fill in form fields</p>';
    //   // Ikeliam i HTML struktura
    //   if (oldError) {
    //     contactForm.replaceChild(errorMessage, oldError.parentNode);
    //   } else {
    //     contactForm.appendChild(errorMessage);
    //   }
    //
    //
    //   console.log(errorMessage);
    //   console.log(fname, lname, email);
    //   return;
    // }
  }
})();
