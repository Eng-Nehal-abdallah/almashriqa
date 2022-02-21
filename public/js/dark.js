var dark = document.querySelector('.dark-mood > .fas');


$(document).ready(function () {
 $(dark).on('click', function () {
  $('body').toggleClass('dark');
  $('.section-1').toggleClass('dark');
  $('.section-2').toggleClass('dark');
  $('.section-2').toggleClass('text-right');
  $('.section-3').toggleClass('dark');
  $('.section-4').toggleClass('dark');
  $('.section-5').toggleClass('dark');
  $('.section-6').toggleClass('dark');
  $('.section-7').toggleClass('dark');
  $('.section-8').toggleClass('dark');
  $('.btn-outline-dark').toggleClass('btn-outline-light')
  $('footer').toggleClass('dark');

 })
});