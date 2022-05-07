let burger = document.querySelector('.burger');
let menu = document.querySelector('.header-row-min');

burger.addEventListener('click', function () {
   burger.classList.toggle('active');
   console.log(menu.classList.toggle('active'));
})