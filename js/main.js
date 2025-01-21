console.log("main.js loaded")

function toggleSideNav() {
    $("body").toggleClass("showSideNav");
    console.log("Side Navbar Toggled");
}



$("#toggleSideNav").on("click", () => toggleSideNav());