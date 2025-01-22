console.log("main.js loaded")
let sideToggle = false;


// Sidenav functions

enableSideNav = function () {
    $("body").addClass("showSideNav");
    $("#toggleSideNav").addClass("modal");
    let sideToggle = true;
}

disableSideNav = function () {
    $("body").removeClass("showSideNav");
    $("#toggleSideNav").removeClass("modal");
    let sideToggle = false;
}



function toggleSideNav() {
    if (sideToggle) {
        disableSideNav();
    } else {
        enableSideNav();
    }
    sideToggle = ! (sideToggle);
    console.log("Side Navbar Toggled");
}



$("#toggleSideNav").on("click", () => toggleSideNav())

disableSideNav();


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


// Sticky/unsticky header/nav

stickyNav = function () {
    $("#top-sticky").css("top","0")
}

unstickyNav = function () {
    $("#top-sticky").css("top","-100%")
}



// Detect scroll direction

let position = $(window).scrollTop();
 
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if (scroll > position) {
        unstickyNav();
        
    } else {
        stickyNav();

    }
    position = scroll;
});



