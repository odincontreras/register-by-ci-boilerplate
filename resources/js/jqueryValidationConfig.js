jQuery.validator.messages.required = "Este campo es obligatorio";

$.validator.setDefaults({
    errorElement: "div",
    errorClass: "is-invalid",
    validClass: "is-valid",
    errorPlacement: function (error, element) {
        // Add Bootstrap's is-invalid class to the invalid element
        error.addClass("invalid-feedback");
        error.appendTo(element.parent());
    },
    highlight: function (element, errorClass, validClass) {
        // Add Bootstrap's is-invalid class to the invalid element
        $(element).addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function (element, errorClass, validClass) {
        // Add Bootstrap's is-valid class to the valid element
        $(element).removeClass(errorClass).addClass(validClass);
    },
});
