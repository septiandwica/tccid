const navEl = document.querySelector('.nav');
const hamburgerEl = document.querySelector('.hamburger');
const navItemEls = document.querySelectorAll('.nav__item');

hamburgerEl.addEventListener('click', () => {
  navEl.classList.toggle('nav--open');
  hamburgerEl.classList.toggle('hamburger--open');
});

navItemEls.forEach(navItemEl => {
  navItemEl.addEventListener('click', () => {
    navEl.classList.remove('nav--open');
    hamburgerEl.classList.remove('hamburger--open');
  });
});

const header = document.querySelector('.header');
const topBar = document.querySelector('.top-bar');
const bottomBar = document.querySelector('.bottom-bar');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 0) {
    topBar.classList.add('scrolled');
    bottomBar.classList.add('scrolled');
  } else {
    topBar.classList.remove('scrolled');
    bottomBar.classList.remove('scrolled');
  }
});

function showImage(imageId) {
  var images = document.querySelectorAll('section.about .bottom .img-container img');
  images.forEach(function (image) {
      image.style.display = 'none';
  });

  var selectedImage = document.getElementById(imageId);
  if (selectedImage) {
      selectedImage.style.display = 'block';
  }
}

document.addEventListener("DOMContentLoaded", function () {
AOS.init();

  var scrollToTopBtn = document.getElementById("scrollToTopBtn");

  window.onscroll = function () {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          scrollToTopBtn.style.display = "block";
      } else {
          scrollToTopBtn.style.display = "none";
      }
  };

  scrollToTopBtn.addEventListener("click", function () {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0; 
  });
});
