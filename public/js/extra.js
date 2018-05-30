function openNav() {
    document.getElementById("navMenu").style.width = "40%";
}

function closeNav() {
    document.getElementById("navMenu").style.width = "0%";
}

function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}

// Accordion Toggle

$("#headingOne").click(function () {
    $("#chevronOne").toggleClass("fa-chevron-down fa-chevron-up");
});
$("#headingTwo").click(function () {
    $("#chevronTwo").toggleClass("fa-chevron-down fa-chevron-up");
});
$("#headingThree").click(function () {
    $("#chevronThree").toggleClass("fa-chevron-down fa-chevron-up");
});
$("#headingFour").click(function () {
    $("#chevronFour").toggleClass("fa-chevron-down fa-chevron-up");
});