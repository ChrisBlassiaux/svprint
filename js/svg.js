
window.onscroll = function() {scroll2Function()};

let svg1 = document.querySelector('.wrapper-1 svg');
let svg2 = document.querySelector('.wrapper-2 svg');
let svg3 = document.querySelector('.wrapper-3 svg');
let svg4 = document.querySelector('.wrapper-4 svg');
let svg5 = document.querySelector('.wrapper-5 svg');
let svg6 = document.querySelector('.wrapper-6 svg');
let svg7 = document.querySelector('.wrapper-7 svg');

function scroll2Function() {
  document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000 ? svg1.classList.add('active') : svg1.classList.remove('active');
  document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200 ? svg2.classList.add('active') : svg2.classList.remove('active');
  document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400 ? svg3.classList.add('active') : svg3.classList.remove('active');
  document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600 ? svg4.classList.add('active') : svg4.classList.remove('active');
  document.body.scrollTop > 1900 || document.documentElement.scrollTop > 1900 ? svg5.classList.add('active') : svg5.classList.remove('active');
  document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000 ? svg6.classList.add('active') : svg6.classList.remove('active');
  document.body.scrollTop > 2200 || document.documentElement.scrollTop > 2200 ? svg7.classList.add('active') : svg7.classList.remove('active');
}
