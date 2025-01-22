console.log("main.js loaded")



function toggleSideNav() {
    $("body").toggleClass("showSideNav");
    $("#toggleSideNav").toggleClass("modal");
    console.log("Side Navbar Toggled");
}



$("#toggleSideNav").on("click", () => toggleSideNav())


// Carousel
$(".slick").slick({
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    arrows: false,
    dotsClass: "dot",
    appendDots: ".dotcontainer"

})