<?php
  session_start();
  include 'koneksi.php';
?>
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
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>
  <body>
    <main>
      <section>
        <div class="row flex flex-wrap">
          <div class="col w-full lg:w-3/5">
            <div
              class="lg:flex lg:items-center lg:h-full bg-cover bg-bottom bg-[url('../img/background-login.png')]"
            >
              <div class="text-white px-5 py-6 flex-1">
                <h1
                  class="font-bold text-2xl lg:text-4xl [text-shadow:0_4px_6px_rgba(0,0,0,0.1),0_2px_4px_rgba(0,0,0,0.1)]"
                >
                  Masuk ke akun Anda
                </h1>
                <p
                  class="text-slate-200 [text-shadow:0_4px_6px_rgba(0,0,0,0.1),0_2px_4px_rgba(0,0,0,0.1)]"
                >
                  Hanya bisa Admin
                </p>
              </div>
            </div>
          </div>
          <div class="col w-full lg:w-2/5">
            <div class="lg:h-[600px] lg:items-center lg:flex bg-white">
              <form action="crud.php" method='post' class="px-5 py-14 flex-1" id="form-login">
                <div class="form-input relative mb-6">
                  <input
                    type="email"
                    name="email"
                    class="w-full border border-slate-300 rounded-md py-3 px-5 peer outline-none"
                    autocomplete="off"
                    required
                  />
                  <label
                    for=""
                    class="absolute text-slate-400 top-3 left-5 peer-focus:-top-2 bg-white peer-focus:px-3 peer-focus:text-[12px] pointer-events-none peer-focus:left-1 transition-all"
                    >Email</label
                  >
                </div>
                <div class="form-input relative mb-6">
                  <input
                    type="password"
                    name="password"
                    class="w-full border border-slate-300 rounded-md py-3 pl-5 pr-14 peer outline-none"
                    autocomplete="off"
                    required
                  />
                  <label
                    for=""
                    class="absolute text-slate-400 top-3 left-5 peer-focus:-top-2 bg-white peer-focus:px-3 peer-focus:text-[12px] pointer-events-none peer-focus:left-1 transition-all"
                    >Password</label
                  >
                  <button id="show-password" type="button">
                    <img
                      src="./assets/img/icons/eye-slash-regular.svg"
                      class="absolute top-4 right-5"
                      width="20"
                    />
                  </button>
                </div>
                <div class="form-input">
                  <button
                    type="submit"
                    name='login'
                    class="w-full py-4 bg-[#9c6644] text-white text-base font-bold rounded-md"
                  >
                    Login
                  </button>
                </div>
              </form>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/login.js"></script>
    <script>
      <?php
      if(isset($_SESSION['error_msg'])) {
        $msg = $_SESSION["error_msg"];
        if($msg) {
          echo "
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '$msg',
            showConfirmButton: false,
            timer: 1500
          })
          ";
          $_SESSION["error_msg"] = '';
        }
      }
      ?>
    </script>
  </body>
</html>
