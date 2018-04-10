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

//
// var accordion = document.querySelector('.accordion');
// var items = accordion.querySelectorAll('li');
// var questions = accordion.querySelectorAll('.question');
//
// //Functions
//
// function toggleAccordion() {
//     var thisItem = this.parentNode;
//     items.forEach(item => {
//         if (thisItem == item) {
//             thisItem.classList.toggle('open');
//             return;
//         }
//         item.classList.remove('open');
//     });
// }
//
// //Event Listeners
//
// questions.forEach(question => question.addEventListener('click', toggleAccordion));


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