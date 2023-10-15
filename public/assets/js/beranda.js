$(".hero-slick").slick({
  arrows: false,
  dots: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
});

const btnSelengkapnya = document.getElementById("btn_selengkapnya");
btnSelengkapnya.addEventListener("click", function () {
  const wordHeight =
    btnSelengkapnya.previousElementSibling.children[0].offsetHeight;
  console.log(wordHeight);
  if (btnSelengkapnya.innerText == "TAMPILKAN LEBIH BANYAK") {
    btnSelengkapnya.previousElementSibling.style.height = wordHeight + "px";
    btnSelengkapnya.previousElementSibling.classList.add("before:hidden");
    btnSelengkapnya.innerText = "TAMPILKAN LEBIH SEDIKIT";
  } else {
    btnSelengkapnya.previousElementSibling.style.height = "12rem";
    btnSelengkapnya.previousElementSibling.classList.remove("before:hidden");
    btnSelengkapnya.innerText = "TAMPILKAN LEBIH BANYAK";
  }
});
