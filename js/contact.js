$("#out-of-hours-toggle").on("click", ()=>{
    $("#out-of-hours-text").toggleClass("show");
})

$(".form-send-success div").on("click", (event) => {
    console.log("test");
    $(".form-send-success").remove();
})