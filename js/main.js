console.log("main.js loaded")
let sideToggle = false;


// Sidenav functions

enableSideNav = function () {
    $(".wrapper").addClass("showSideNav");
    $("#sideNavModal").addClass("modal");
    $(".hamburger").addClass("hamburger-anim-in");
    let sideToggle = true;
}

disableSideNav = function () {
    $(".wrapper").removeClass("showSideNav");
    $("#sideNavModal").removeClass("modal");
    $(".hamburger").removeClass("hamburger-anim-in");
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
$("#sideNavModal").on("click", () => toggleSideNav())

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


// Partners
$("#partners1").slick({
    arrows: false,
    speed: 300,
    autoplaySpeed: 3000,
    autoplay: true,
    variableWidth: true,
    infinite: true,
    draggable: false,
    swipe: false,
    pauseOnHover: true

});

$("#partners2").slick({
    arrows: false,
    speed: 300,
    autoplaySpeed: 3000,
    autoplay: true,
    variableWidth: true,
    infinite: true,
    draggable: false,
    swipe: false,
    pauseOnHover: true

});

// Sticky/unsticky header/nav

stickyNav = function () {
    $("#top-sticky").css("transform","translate(0,0)")
}

unstickyNav = function () {
    $("#top-sticky").css("transform","translate(0, -100%)")
}



// Detect scroll direction

// let position = $(window).scrollTop();
 
// $(window).scroll(function() {
//     let scroll = $(window).scrollTop();
//     if (scroll > position) {
//         unstickyNav();
        
//     } else {
//         stickyNav();

//     }
//     position = scroll;
// });



// Cookies popup

// Initialise cookies bool


// Retrieve bool from storage
let cookies = localStorage.getItem("cookiesBool");
console.log("cookies: "+cookies);
// Show popup if no stored value
if (cookies === null) {
    $("#cookies-popup-outer").css("display","flex");
}

// Change returned string into bool
if (cookies == "true") {
    cookies = true;
    
} else {
    cookies = false;
}


// Popup button functions
let acceptCookies = function () {
    cookies = true;
    localStorage.setItem("cookiesBool",cookies);
    $("#cookies-popup-outer").css("display","none");
}

let declineCookies = function () {
    cookies = false;
    localStorage.setItem("cookiesBool",cookies);
    $("#cookies-popup-outer").css("display","none");
};


