// Navbar
const hamburger = document.getElementById("hamburger");
const nav = document.getElementById("nav");
hamburger.addEventListener("click", function () {
  nav.classList.toggle("active");
});

const subMenu = document.querySelector(".menu-item-has-children");
subMenu.addEventListener("click", function () {
  subMenu.children[2].classList.toggle("active");
  subMenu.children[1].classList.toggle("text-l-coffee");
  subMenu.children[1].classList.toggle("[transform:rotateX(180deg)]");
  subMenu.children[0].classList.toggle("text-l-coffee");
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
  autoplaySpeed: 2000,
});
