(function($) {
'use strict';

  // 1. Pasirenkam elementus
  var contactForm = document.querySelector("#js-contact");
  var messageContainer = document.querySelector("#js-message");

  // add values

  // 2 Add event listener
  if (contactForm) {
    contactForm.addEventListener("submit", validateFields);
  }

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
      messageElement("Please, fill in form fields", "danger");
      return;
    }

    sendMail();
  }

  function sendMail() {
    var url = "/send";
    var formData = new FormData(contactForm);
    var request = new Request(url, {
      method: "POST",
      body: formData
    });

    fetch(request).then(function(response){
      return response.json();
    }).then(function(json){
      if (json.error) {
        messageElement(json.error, "danger");
      } else {
        messageElement(json.success, "success");
        $(contactForm).hide();
      }
    });
  }

  function messageElement(message, type) {
    var errorMessage = document.createElement("div");
    // Kintamasis patikrinimui ar jau yra message
    var oldError = document.querySelector(".alert");

    // Uzpildom nauja elementa turiniu
    errorMessage.innerHTML = '<p class="alert alert-' + type + '">' + message + '</p>';
    // Ikeliam i HTML struktura
    if (oldError) {
      messageContainer.replaceChild(errorMessage, oldError.parentNode);
    } else {
      messageContainer.appendChild(errorMessage);
    }
  }
})(jQuery);
