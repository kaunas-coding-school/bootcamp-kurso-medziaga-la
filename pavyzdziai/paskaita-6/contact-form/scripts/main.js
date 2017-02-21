(function() {
'use strict';

  // 1. Pasirenkam elementus
  var contactForm = document.querySelector("#js-contact");
  var messageContainer = document.querySelector("#js-message");
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
    event.preventDefault();
    // Is sio veiksmo pasiemam reiksmes is paciu laukeliu
    var fname = event.target.firstname.value;
    var lname = event.target.lastname.value;
    var email = event.target.email.value;

    // Pasitikrinam ar bent vienas is siu kintamuju yra tuscias
    if (fname === "" || lname  === "" || email  === "") {
      // Stabdom formos siuntima
      // Sukuriam nauja div elementa
      messageElement("Please, fill in form fields");
      return;
    }

    sendMail();
  }

  function sendMail() {
    var url = "../send.php";
    var formData = new FormData(contactForm);
    var request = new Request(url, {
      method: "POST",
      body: formData
    });

    fetch(request).then(function(response){
      return response.json();
    }).then(function(json){
      if (json.error) {
        messageElement(json.error);
        console.log(json.error);
      } else {
        messageElement(json.success);
        console.log(json.success);
      }
    });
  }

  function messageElement(message) {
    var errorMessage = document.createElement("div");
    // Kintamasis patikrinimui ar jau yra message
    var oldError = document.querySelector(".alert");
    // Uzpildom nauja elementa turiniu
    errorMessage.innerHTML = '<p class="alert alert-danger">' + message + '</p>';
    // Ikeliam i HTML struktura
    if (oldError) {
      messageContainer.replaceChild(errorMessage, oldError.parentNode);
    } else {
      messageContainer.appendChild(errorMessage);
    }
  }
})();
