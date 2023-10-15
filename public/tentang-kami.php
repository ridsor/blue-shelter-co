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
      href="./assets/img/logo-blueshelterco128x128.png"
    />
    <title>Blue Shelter Co</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
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
                  <a class="nav-link" href="index.php">BERANDA</a>
                </li>
                <li class="mb-2 menu-item lg:mb-0">
                  <a class="active nav-link">TENTANG KAMI</a>
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
    <main class="bg-d-coffee">
      <section>
        <div class="container pt-24 pb-8 px-4 overflow-hidden">
          <article>
            <h2
              class="text-center text-white text-2xl mb-7 font-bold"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="100"
            >
              Blue Shelter Co
            </h2>
            <div class="after:clear-left after:content-[''] after:block">
              <div
                class="image max-w-xs lg:max-w-sm w-full aspect-square mx-auto md:mx-0 md:float-left md:mr-7 mb-4"
                data-aos="fade-right"
                data-aos-duration="1000"
                data-aos-delay="300"
              >
                <img
                  src="./assets/img/image-tentang-kami.jpg"
                  class="w-full h-full object-cover object-right"
                  alt=""
                />
              </div>
              <div
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="600"
                data-aos-offset="0"
              >
                <p class="text-white text-base">
                  Blue Shelter Co adalah coffee shop yang sederhana dan jauh
                  dari kata cafe hits sekarang. Pelayanan ramah serta kenikmatan
                  kopi yang bisa di bilang PAS untuk menikmati hari. Design
                  classical santai real coffee shop, dekat dengan kampus
                  unpatti, biasa jadi tongkrongan mahasiswa, entah diskusi gosip
                  atau duduk autis sambil mabar.
                </p>
                <br />
                <p class="text-white text-base">
                  Destinasi yang sempurna untuk menemukan ketenangan dan
                  perlindungan dalam kesibukan kehidupan sehari-hari. Dengan
                  suasana yang hangat dan nyaman, kami mengundang Anda untuk
                  menikmati momen ketenangan dan kebahagiaan di Blue Shelter Co,
                  tempat yang ramah, penuh inspirasi, dan penuh cerita untuk
                  dibagikan bersama orang-orang terkasih. Di sini, Anda dapat
                  menikmati kombinasi kopi berkualitas tinggi, hidangan lezat,
                  dan atmosfer yang mengundang. Dalam atmosfer yang santai dan
                  penuh kenangan, Blue Shelter Co mempersatukan orang-orang
                  dengan cinta akan kopi dan rasa persahabatan. Tidak hanya itu,
                  kami juga mengutamakan kualitas dalam setiap detailnya, mulai
                  dari biji kopi terbaik hingga pelayanan pelanggan yang ramah.
                  Jadi, datanglah ke Blue Shelter Co dan rasakan pengalaman yang
                  tak terlupakan di tempat di mana inspirasi dan kreativitas
                  mekar.
                </p>
              </div>
            </div>
          </article>
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
              data-aos-delay="300"
            >
              <div class="flex items-center mb-2 brand">
                <img
                  src="./assets/img/logo-blueshelterco.png"
                  alt=""
                  class="w-10 h-10"
                />
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
                data-aos-delay="600"
              >
                <h3
                  class="mb-5 text-xl font-bold text-white text-center lg:text-left"
                >
                  Lokasi
                </h3>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15926.853407274672!2d128.1893896!3d-3.6526687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cef2a998b936f%3A0x888b97f687abf45a!2sBlue%20Shelter%20Co.!5e0!3m2!1sid!2sid!4v1684553254876!5m2!1sid!2sid"
                  class="w-full max-w-xs aspect-square mx-auto lg:mx-0"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
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
                class="flex justify-center list-none gap-x-3 lg:justify-normal"
              >
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="200"
                  data-aos-offset="0"
                >
                  <a target="_blank" href="https://www.facebook.com/blue.shltr">
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center"
                    >
                      <img
                        src="./assets/img/icons/facebook-f.svg"
                        alt=""
                        width="11"
                      />
                    </div>
                  </a>
                </li>
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="400"
                  data-aos-offset="0"
                >
                  <a
                    target="_blank"
                    href="https://www.linkedin.com/company/blue-shelter-co/"
                  >
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center"
                    >
                      <img
                        src="./assets/img/icons/linkedin-in.svg"
                        alt=""
                        width="16"
                      />
                    </div>
                  </a>
                </li>
                <li
                  data-aos="fade-up"
                  data-aos-duration="1000"
                  data-aos-delay="600"
                  data-aos-offset="0"
                >
                  <a
                    target="_blank"
                    href="https://www.instagram.com/blue.shltr/"
                  >
                    <div
                      class="hover:bg-slate-200 bg-white rounded-full w-9 aspect-square flex items-center justify-center"
                    >
                      <img
                        src="./assets/img/icons/instagram.svg"
                        alt=""
                        width="18"
                      />
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
              data-aos-offset="0"
            >
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
      defer
    ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
