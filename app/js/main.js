/* btn menu */
let burger = document.querySelector('.burger');
let menu = document.querySelector('.header-row-min');

burger.addEventListener('click', function () {
   burger.classList.toggle('active');
});

/* filter cards */
let gridBtn = document.querySelector('.grid-btn');
let rowBtn = document.querySelector('.row-btn');

gridBtn.addEventListener('click', function () {
   $(".date-cards").last().addClass("date-cards-grid");
});
rowBtn.addEventListener('click', function () {
   $(".date-cards").last().removeClass("date-cards-grid");
});





