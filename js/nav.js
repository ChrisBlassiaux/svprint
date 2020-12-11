let navbar = document.querySelector('.navbar');
let burger = document.querySelector('.contain-burger');
let nav = document.querySelector('.nav');

let eventsTitle = document.querySelector('.section-title-events');

let backToTop = document.querySelector('.back-to-top');

window.addEventListener('resize', function () {
  if (window.innerWidth >= 1200) {
    nav.style.display = 'block';

    navbar.classList.add('fixed');

    navbarSections.forEach(element => {
      element.style.padding = "42px 15px";
    });
  } else if (window.innerWidth <= 1200) {
    nav.style.display = 'none';

    navbar.classList.add('fixed');

    navbarSections.forEach(element => {
      element.style.padding = "15px 15px";
    });
  }
})

burger.addEventListener('click', function () {
  if (nav.style.display == 'none') {
    nav.style.display = 'block';
    if (window.innerWidth <= 1200) {
      navbar.classList.add('fixed');
    }
  } else {
    nav.style.display = 'none';
    navbar.classList.remove('fixed');
  }
});

let navbarSections = document.querySelectorAll('.nav .section');

let svg1 = document.querySelector('.wrapper-1 svg');
let svg2 = document.querySelector('.wrapper-2 svg');
let svg3 = document.querySelector('.wrapper-3 svg');
let svg4 = document.querySelector('.wrapper-4 svg');
let svg5 = document.querySelector('.wrapper-5 svg');
let svg6 = document.querySelector('.wrapper-6 svg');
let svg7 = document.querySelector('.wrapper-7 svg');

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    backToTop.style.display = "block";
    if (window.innerWidth >= 1200) {
      navbarSections.forEach(element => {
        element.style.padding = "20px 15px";
      });
    }
    navbar.style.borderBottom = "4px solid #FFF";
  } else {
    backToTop.style.display = "none";
    if (window.innerWidth <= 1200) {
      navbarSections.forEach(element => {
        element.style.padding = "15px 15px";
      });
    } else {
      navbarSections.forEach(element => {
        element.style.padding = "42px 15px";
      });
    }
    navbar.style.borderBottom = "none";
  }

  document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000 ? svg1.classList.add('active') : svg1.classList.remove('active');
  document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200 ? svg2.classList.add('active') : svg2.classList.remove('active');
  document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400 ? svg3.classList.add('active') : svg3.classList.remove('active');
  document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600 ? svg4.classList.add('active') : svg4.classList.remove('active');
  document.body.scrollTop > 1900 || document.documentElement.scrollTop > 1900 ? svg5.classList.add('active') : svg5.classList.remove('active');
  document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000 ? svg6.classList.add('active') : svg6.classList.remove('active');
  document.body.scrollTop > 2200 || document.documentElement.scrollTop > 2200 ? svg7.classList.add('active') : svg7.classList.remove('active');
}

