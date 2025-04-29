$("#out-of-hours-toggle").on("click", ()=>{
    $("#out-of-hours-text").toggleClass("show");
})

$("#contact-us-form").on("click", "div.close-message", (event) => {
    $(event.target).parent().remove();
})