// validation

$(document).ready(function () {
  (function () {
    "use strict";
    var form = document.getElementById("contact-us-form");

    if (form) {
      form.addEventListener(
        "submit",
        function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add("was-validated");
        },
        false
      );
    }
  })();
});