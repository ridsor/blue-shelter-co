<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="128x128"
      href="./assets/img/logo-blueshelterco128x128.png" />
    <title>Blue Shelter Co</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/slick.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  </head>
  <body>
    <header
      class="fixed top-0 left-0 right-0 z-50 w-full bg-transparent transition-header main">
      <div class="container px-4">
        <article class="relative flex items-center">
          <div class="flex items-center p-4 brand w-fit">
            <img
              src="./assets/img/logo-blueshelterco.png"
              alt=""
              class="w-10 h-10" />
            <span
              class="block ml-2 text-xl font-bold text-white whitespace-nowrap"
              >Blue Shelter Co</span
            >
          </div>
          <div class="flex items-center lg:justify-center flex-1 justify-end">
            <button class="p-4 lg:hidden" id="hamburger">
              <div class="w-7 aspect-square">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  height="1em"
                  class="w-full h-full fill-white"
                  viewBox="0 0 448 512">
                  <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
              </div>
            </button>
            <nav
              class="transition-all bg-white nav-mobile lg:nav-dekstop lg:bg-transparent lg:flex lg:w-full lg:px-4 lg:justify-between items-center"
              id="nav">
              <ul class="flex flex-col gap-x-7 lg:flex-row">
                <li class="mb-2 menu-item lg:mb-0">
                  <a class="nav-link active">BERANDA</a>
                </li>
                <li class="mb-2 menu-item lg:mb-0">
                  <a href="tentang-kami.php" class="nav-link">TENTANG KAMI</a>
                </li>
                <li class="mb-2 menu-item lg:mb-0">
                  <a href="menu.php" class="nav-link">MENU</a>
                </li>
              </ul>
              <div id="btn-login" class="flex justify-center">
                <a href="login.php">
                  <div class="w-8 h-8">
                    <svg
                      class="fill-black lg:fill-white hover:fill-d-coffee lg:hover:fill-white"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                    </svg>
                  </div>
                </a>
              </div>
            </nav>
          </div>
        </article>
      </div>
    </header>
    <main>
      <section class="overflow-hidden">
        <div
          class="container relative overflow-auto max-w-none before:content-[''] before:absolute before:block before:bottom-0 before:top-0 before:right-0 before:left-0 before:[box-shadow:inset_0_20px_200px_20px_black] before:pointer-events-none before:z-20">
          <div class="flex justify-center h-full">
            <h1
              data-aos="fade-up"
              data-aos-duration="1000"
              class="animate__animated animate__pulse animate__infinite absolute z-20 text-3xl md:text-5xl text-center text-white -translate-y-1/2 pointer-events-none top-[40%] leading-[4rem!important]">
              Welcome To Blue
              <span
                class="text-3xl md:text-5xl whitespace-nowrap left-1/2 leading-[4rem!important]"
                >Shelter Co</span
              >
            </h1>
          </div>
          <div class="relative z-10 hero-slick">
            <div class="item-slick">
              <div class="hero-img w-full h-[600px]">
                <img
                  src="./assets/img/beranda1.png"
                  alt=""
                  class="object-cover w-full h-full" />
              </div>
            </div>
            <div class="item-slick">
              <div class="hero-img w-full h-[600px]">
                <img
                  src="./assets/img/beranda2.jpg"
                  alt=""
                  class="object-cover w-full h-full" />
              </div>
            </div>
            <div class="item-slick">
              <div class="hero-img w-full h-[600px]">
                <img
                  src="./assets/img/beranda3.jpg"
                  alt=""
                  class="object-cover w-full h-full" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-d-coffee lg:py-6 overflow-hidden">
        <div class="container">
          <div class="flex flex-wrap row">
            <div
              class="w-full col lg:w-4/12"
              data-aos="fade-right"
              data-aos-duration="1000"
              data-aos-delay="300">
              <div class="relative p-10 pb-14">
                <div
                  class="h-48 overflow-hidden transition-all before:content-[''] before:block before:absolute before:-bottom-10 before:left-0 before:right-0 before:[box-shadow:0_-40px_40px_#9c6644] before:overflow-auto before:h-10 before:z-10 relative">
                  <p
                    class="overflow-hidden text-base leading-7 text-center text-white">
                    Blue Shelter Co adalah tempat yang menawarkan pelindungan
                    bagi jiwa yang lelah dan mengundang kenangan indah. Dengan
                    suasana yang hangat dan nyaman, aroma kopi segar yang
                    memenuhi udara, dan pilihan kuliner lezat, cafe ini
                    menciptakan pengalaman yang tak terlupakan. Kami mengundang
                    Anda untuk menikmati momen ketenangan dan kebahagiaan di
                    Cafe Blue Shelter Co, tempat yang ramah, penuh inspirasi,
                    dan penuh cerita untuk dibagikan bersama orang-orang
                    terkasih.
                  </p>
                </div>
                <button
                  class="absolute block mx-auto text-base font-bold leading-7 text-white -translate-x-1/2 bottom-4 left-1/2 whitespace-nowrap"
                  id="btn_selengkapnya">
                  TAMPILKAN LEBIH BANYAK
                </button>
              </div>
            </div>
            <div
              class="w-full p-5 col lg:w-8/12"
              data-aos="fade-left"
              data-aos-duration="1000"
              data-aos-delay="600">
              <h2
                class="my-5 text-2xl font-semibold text-center text-white lg:text-left">
                Menu Andalan
              </h2>
              <div
                class="list-menu-cafe grid [grid-template-columns:repeat(auto-fill,minmax(150px,1fr))] lg:[grid-template-columns:repeat(auto-fill,minmax(200px,1fr))]">
                <div
                  class="transition item hover:scale-110 aspect-square"
                  data-aos="zoom-in"
                  data-aos-duration="1000"
                  data-aos-delay="1000">
                  <div href="" class="block w-full h-full">
                    <img
                      src="./assets/img/menu/espresso.jpg"
                      alt="espresso"
                      title="espresso"
                      class="object-cover w-full h-full" />
                  </div>
                </div>
                <div
                  class="transition item hover:scale-110 aspect-square"
                  data-aos="zoom-in"
                  data-aos-duration="1000"
                  data-aos-delay="1100">
                  <div href="" class="block w-full h-full">
                    <img
                      src="./assets/img/menu/caffe-latte.jpg"
                      alt="caffe-latte"
                      title="caffe-latte"
                      class="object-cover w-full h-full" />
                  </div>
                </div>
                <div
                  class="transition item hover:scale-110 aspect-square"
                  data-aos="zoom-in"
                  data-aos-duration="1000"
                  data-aos-delay="1200">
                  <div href="" class="block w-full h-full">
                    <img
                      src="./assets/img/menu/cappuccino.jpg"
                      alt="cappuccino"
                      title="cappuccino"
                      class="object-cover w-full h-full" />
                  </div>
                </div>
                <div
                  class="transition item hover:scale-110 aspect-square"
                  data-aos="zoom-in"
                  data-aos-duration="1000"
                  data-aos-delay="1300">
                  <div href="" class="block w-full h-full">
                    <img
                      src="./assets/img/menu/machiato.jpg"
                      alt="machiato"
                      title="machiato"
                      class="object-cover w-full h-full" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-[#191919] text-[#6F6F6F] px-4 overflow-hidden">
      <article class="mb-6">
        <div class="container pt-2">
          <div class="flex flex-wrap row">
            <div
              class="w-full mb-4 lg:mb-0 col lg:w-1/2"
              data-aos="fade-right"
              data-aos-duration="1000"
              data-aos-delay="300">
              <div class="flex items-center mb-2 brand">
                <img
                  src="./assets/img/logo-blueshelterco.png"
                  alt=""
                  class="w-10 h-10" />
                <span
                  class="block py-4 ml-2 text-xl font-semibold text-white whitespace-nowrap"
                  >Blue Shelter Co</span
                >
              </div>
              <p class="mb-2">
                Jl. Ir. M. Putuhena, pemda 3. Poka. Ambon, Kota Ambon, Maluku
                97228
              </p>
              <p class="mb-6">Telepon/Fax : (0911) 3869691</p>
              <h3 class="mb-4 text-xl font-bold text-white">Jam Kerja</h3>
              <table class="w-full">
                <tr>
                  <td width="100">Senin</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Selasa</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Rabu</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Kamis</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Jum'at</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Senin</td>
                  <td>11:00 - 00.00</td>
                </tr>
                <tr>
                  <td>Minggu</td>
                  <td>15:00 - 00.00</td>
                </tr>
              </table>
            </div>
            <div class="w-full col lg:w-1/2">
              <div
                class="w-full h-full lg:py-4"
                class="w-full mb-4 lg:mb-0 col lg:w-1/2"
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="600">
                <h3
                  class="mb-5 text-xl font-bold text-white text-center lg:text-left">
                  Lokasi
                </h3>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15926.853407274672!2d128.1893896!3d-3.6526687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cef2a998b936f%3A0x888b97f687abf45a!2sBlue%20Shelter%20Co.!5e0!3m2!1sid!2sid!4v1684553254876!5m2!1sid!2sid"
                  class="w-full max-w-xs aspect-square mx-auto lg:mx-0"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </article>
      <article>
        <div class="container py-6 lg:max-w-4xl">
          <div class="flex flex-wrap items-center row gap-y-4">
            <div class="w-full col lg:w-1/2">
              <ul
                class="flex justify-center list-none gap-x-3 lg:justify-normal">
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                  data-aos-offset="0">
                  <a target="_blank" href="https://www.facebook.com/blue.shltr">
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center">
                      <img
                        src="./assets/img/icons/facebook-f.svg"
                        alt=""
                        width="11" />
                    </div>
                  </a>
                </li>
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="400"
                  data-aos-offset="0">
                  <a
                    target="_blank"
                    href="https://www.linkedin.com/company/blue-shelter-co/">
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center">
                      <img
                        src="./assets/img/icons/linkedin-in.svg"
                        alt=""
                        width="16" />
                    </div>
                  </a>
                </li>
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                  data-aos-offset="0">
                  <a
                    target="_blank"
                    href="https://www.instagram.com/blue.shltr/">
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center">
                      <img
                        src="./assets/img/icons/instagram.svg"
                        alt=""
                        width="18" />
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="w-full col lg:w-1/2"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="800"
              data-aos-offset="0">
              <p class="text-[13px] text-center lg:text-right">
                &copy; 2023 Blue Shelter Co - All rights reserved
              </p>
            </div>
          </div>
        </div>
      </article>
    </footer>
    <script
      src="https://kit.fontawesome.com/0c8762722d.js"
      crossorigin="anonymous"
      defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/beranda.js"></script>
  </body>
</html>
