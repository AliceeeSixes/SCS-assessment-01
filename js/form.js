const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; // Regex for testing emails
const phoneRegex = /((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))/; // Regex for testing phone

$("#contact-us-form").on("click", function(event) {
    $(event.target).removeClass("form-error");
})

function validateForm() {
    return true; // FOR TESTING -- REMOVE LATER
    let name = $("#name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    let message = $("#message").val();
    $("#contact-error").text(name);

    invalid_fields = [];

    // validate name
    if (!name) {
        invalid_fields.push("#name");
    }
    // validate email
    if (!email) {
        invalid_fields.push("#email");
    } else if (!validateEmail(email)) {
        invalid_fields.push("#email");
        formError("Invalid email address");
    }
    // validate phone
    if (!phone) {
        invalid_fields.push("#phone");
    } else if (!validatePhone(phone)) {
        invalid_fields.push("#phone");
        formError("Invalid phone number");
    }
    // validate message
    if (!message) {
        invalid_fields.push("#message");
    } else if (message.length < 5) {
        invalid_fields.push("#message");
        formError("Message must be at least 5 characters");
    }


    if (invalid_fields.length != 0) {
        console.log("validation failed");
        invalid_fields.forEach((x) => {
            $(x).addClass("form-error");
        })
        return false;

    } else {
        console.log("validation passed");
        return true;
        
    }


}

function validateEmail(email) {
    let result = emailRegex.test(email); // Test email against regex
    return(result);
}

function validatePhone(phone) {
    let result = phoneRegex.test(phone); // Test phone against regex
    return(result);
}

function formError(message) {
    let $newdiv = $(`<div class='form-failed-message'><p>${message}</p><div class="close-message">&times;</div></div>`);
    $("#contact-us-form").prepend($newdiv);
}