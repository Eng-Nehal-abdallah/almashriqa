
$(document).ready(function () {
 $('#lang').on('click', function () {

  if (bool == true) {
   $("body").removeAttr("dir", "ltr");
   $("body").attr("dir", "rtl");

   $('p').removeClass('text-left')
   $('p').addClass('text-right')

   bool = false;
  } else if (bool == false) {

   $("body").removeAttr("dir");
   $("body").attr("dir", "ltr");

   $('p').removeClass('text-right')
   $('p').addClass('text-left')


   bool = true;
  }

 })
})