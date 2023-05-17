// Navbar
const hamburger = document.getElementById("hamburger");
const nav = document.getElementById("nav");
hamburger.addEventListener("click", function () {
  nav.classList.toggle("active");

  if (hamburger.children[0].classList.contains("fa-bars")) {
    hamburger.children[0].classList.remove("fa-bars");
    hamburger.children[0].classList.add("fa-x");
  } else {
    hamburger.children[0].classList.remove("fa-x");
    hamburger.children[0].classList.add("fa-bars");
  }
});

const header = document.querySelector("header");
let tempPageOffY = 10;
window.onscroll = function () {
  if (window.pageYOffset > tempPageOffY) {
    header.classList.add("header-scrolling");
    header.classList.add("header-hide");
    if (window.pageYOffset >= 10) {
      tempPageOffY = window.pageYOffset;
    }
  } else {
    if (window.pageYOffset >= 10) {
      header.classList.remove("header-hide");
      tempPageOffY = window.pageYOffset;
    } else {
      header.classList.remove("header-scrolling");
      header.classList.remove("header-hide");
    }
  }
};

// Beranda
$(".hero-slick").slick({
  arrows: false,
  dots: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
});
