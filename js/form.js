const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; // Regex for testing emails
const phoneRegex = /((?:\+|00)[17](?: |\-)?|(?:\+|00)[1-9]\d{0,2}(?: |\-)?|(?:\+|00)1\-\d{3}(?: |\-)?)?(0\d|\([0-9]{3}\)|[1-9]{0,3})(?:((?: |\-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |\-)[0-9]{3}(?: |\-)[0-9]{4})|([0-9]{7}))/; // Regex for testing phone

$("form").on("click", function(event) {
    $(event.target).removeClass("form-error");
})

function validateForm() {
    let name = $("#name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    let message = $("#message").val();
    $("#contact-error").text(name);

    invalid_fields = [];

    // validate name
    if (!name) {
        invalid_fields.push("#name");
        console.log("invalid name");
        console.log(name);
    }
    // validate email
    if (!validateEmail(email)) {
        invalid_fields.push("#email");
        console.log("invalid email");
        console.log(email);
    }
    // validate phone
    if (!validatePhone(phone)) {
        invalid_fields.push("#phone");
        console.log("invalid phone");
        console.log(phone);
    }
    // validate message
    if (!message) {
        invalid_fields.push("#message");
        console.log("invalid message");
        console.log(message);
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

