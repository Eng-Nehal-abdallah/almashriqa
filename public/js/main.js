$('.multiple-items').slick({
 infinite: true,
 slidesToShow: 3,
 slidesToScroll: 3
});

const header = document.querySelector('header')
window.addEventListener('load', () => {
 header.classList.add('active')
});

var sections = document.querySelectorAll("section");
onscroll = function () {
 const scrollposition = document.documentElement.scrollTop;
 sections.forEach((section) => {
  if (scrollposition >= section.offsetTop - section.offsetHeight * .90 && scrollposition < section.offsetTop + section.offsetHeight - section.offsetHeight * .90) {
   section.classList.add('active')
  }
 })
}




// start header anim


var i = 0, text;
text = 'Almashriq'

function typing() {
 if (i < text.length) {
  document.querySelector('#h1').innerHTML += text.charAt(i)
  i++
  setTimeout(typing, 100)
 }
}

typing()




const main = document.querySelector('#main')
const overlay = document.querySelector('.overlay1')
var i = 0
main.onclick = function () {
 if (i == 0) {
  overlay.style.opacity = 1;
  i = 1
 } else {
  overlay.style.opacity = 0;
  i = 0

 }
}

