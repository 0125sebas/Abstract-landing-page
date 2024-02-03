var menuButtonsContainer = document.getElementById("menu-buttons-container")
var navbar = document.getElementById("navbar");
var menuOpen = document.getElementById("menu-open");
var menuClose = document.getElementById("menu-close");
var DownMenuContainer = document.getElementById("downMenu");

menuOpen.addEventListener("click", function () {
    menuClose.setAttribute("class", "visible cursor-pointer");
    menuButtonsContainer.replaceChild(menuClose, menuOpen);
    DownMenuContainer.setAttribute("class", "absolute bg-black sm:hidden flex flex-col items-center justify-center gap-3 py-10 border-t-2 w-full");
    
});

menuClose.addEventListener("click", function () {
    menuButtonsContainer.replaceChild(menuOpen, menuClose);
    DownMenuContainer.setAttribute("class", "bg-black sm:hidden hidden flex-col items-center justify-center gap-3 py-10 border-t-2 w-full");

});