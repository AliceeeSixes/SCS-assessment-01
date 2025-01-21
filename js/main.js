console.log("main.js loaded")



function toggleSideNav() {
    $("body").toggleClass("showSideNav");
    $("#toggleSideNav").toggleClass("modal");
    console.log("Side Navbar Toggled");
}



$("#toggleSideNav").on("click", () => toggleSideNav())
