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
}


