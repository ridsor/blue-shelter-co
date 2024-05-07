<?php
require 'koneksi.php';
if(!isset($_SESSION)) 
{   
  session_start(); 
} 

// authentication
if(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
header('location:index.php');
exit();
}

$email = $_SESSION['email'];
$password = $_SESSION['password'];
$sqlAuth = "SELECT password, name FROM users WHERE email='$email'";
$user = mysqli_query($db,$sqlAuth);
$user = mysqli_fetch_assoc($user);
$namaUser = $user['name'];
$userPassword = $user['password'];
if($user) {
  if($password != $userPassword){
  header('location:index.php');
  exit();
  }
} else {
 header('location:index.php');
 exit();
}


$sqlFoto = "SELECT menu.foto from menu INNER JOIN kategori ON menu.kategori_id=kategori.id WHERE kategori.slug='non-coffee' OR kategori.slug='coffee' ORDER BY menu.created_at DESC LIMIT 4";
$sqlJumlahCoffee = "SELECT COUNT(menu.id) AS jumlah_coffee FROM menu INNER JOIN kategori ON menu.kategori_id=kategori.id WHERE kategori.slug='coffee'";
$sqlJumlahNonCoffee = "SELECT COUNT(menu.id) AS jumlah_non_coffee FROM menu INNER JOIN kategori ON menu.kategori_id=kategori.id WHERE kategori.slug='non-coffee'";
$sqlJumlahFasilitas = "SELECT COUNT(menu.id) AS jumlah_fasilitas FROM menu INNER JOIN kategori ON menu.kategori_id=kategori.id WHERE kategori.slug='fasilitas'";
$queryFoto = mysqli_query($db,$sqlFoto);
$queryJumlahCoffee = mysqli_query($db,$sqlJumlahCoffee);
$queryJumlahNonCoffee = mysqli_query($db,$sqlJumlahNonCoffee);
$queryJumlahFasilitas = mysqli_query($db,$sqlJumlahFasilitas);
$jumlahCoffee = mysqli_fetch_assoc($queryJumlahCoffee)['jumlah_coffee'];
$jumlahNonCoffee = mysqli_fetch_assoc($queryJumlahNonCoffee)['jumlah_non_coffee'];
$jumlahFasilitas = mysqli_fetch_assoc($queryJumlahFasilitas)['jumlah_fasilitas'];
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
      href="./assets/img/logo-blueshelterco128x128.png" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/slick.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
  </head>
  <body class="bg-[#9c6644]">
    <header
      class="fixed top-0 right-0 left-0 z-50 px-4 lg:px-0 transition-header dashboard">
      <div class="container max-w-7xl">
        <article
          class="flex rounded-b-[27px] [box-shadow:0px_5px_14px_0px_rgba(0,0,0,.50)] px-5 lg:px-20 py-[10px] bg-white justify-between">
          <div class="flex items-center gap-x-3">
            <div class="user-img w-10 aspect-square">
              <img
                src="./assets/img/icons/icon _User Circle_.svg"
                alt=""
                class="w-full h-full" />
            </div>
            <div class="user-username text-base font-bold"><?= $namaUser ?></div>
          </div>
          <a  href="logout.php">
            <div class="user-img w-10 aspect-square">
              <img
                src="./assets/img/icons/icon _logout circle line_.svg"
                alt=""
                class="w-full h-full" />
            </div>
          </a>
        </article>
      </div>
    </header>
    <main>
      <section class="px-4 lg:px-0">
        <div class="container max-w-7xl">
          <div
            class="row flex mt-32 mb-20 gap-x-20 gap-y-5 flex-wrap lg:flex-nowrap">
            <div class="col w-full lg:w-2/3">
              <div
                class="rounded-[22px] w-full h-[550px] bg-white [box-shadow:0_0_22px_0_rgba(0,0,0,.80)] overflow-hidden">
                <div class="slides-menu relative">
                  <?php while($row = mysqli_fetch_assoc($queryFoto)): ?>
                  <div class="slide w-full h-[550px]">
                    <div class="img-menu h-full w-full justify-center flex">
                      <img
                        src="./assets/img/menu/<?= $row['foto'] ?>"
                        alt=""
                        class="h-full object-cover w-full object-center" />
                    </div>
                  </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
            <div class="col w-full lg:w-1/3">
              <div
                class="rounded-[22px] w-full h-[550px] bg-white [box-shadow:0_0_22px_0_rgba(0,0,0,.80)]">
                <ul class="p-8 flex flex-col justify-between w-full h-full">
                  <li class="flex items-center">
                    <a
                      href="./dashboard-menu-coffee.php"
                      class="hover:scale-110 transition">
                      <div
                        class="flex gap-y-3 w-[128px] flex-col items-center p-4 rounded-[27px] [box-shadow:0_0_10px_0_rgba(44,41,40,.72)]">
                        <div class="aspect-square w-14">
                          <img
                            src="./assets/img/icons/icon _coffee cup 1_.svg"
                            class="w-full h-full"
                            alt="" />
                        </div>
                        <span class="font-bold text-2xl text-center"
                          >Coffee</span
                        >
                      </div>
                    </a>
                    <p
                      class="jumlah-coffee flex-1 text-center text-2xl font-medium">
                      <?= $jumlahCoffee ?> Item
                    </p>
                  </li>
                  <li class="flex items-center">
                    <a
                      href="dashboard-menu-noncoffee.php"
                      class="hover:scale-110 transition">
                      <div
                        class="flex gap-y-3 w-[128px] flex-col items-center p-4 rounded-[27px] [box-shadow:0_0_10px_0_rgba(44,41,40,.72)]">
                        <div class="aspect-square w-9">
                          <img
                            src="./assets/img/icons/icon _drink_.svg"
                            class="w-full h-full"
                            alt="" />
                        </div>
                        <span class="font-bold text-2xl text-center"
                          >Non Coffee</span
                        >
                      </div>
                    </a>
                    <p
                      class="jumlah-coffee flex-1 text-center text-2xl font-medium">
                      <?= $jumlahNonCoffee ?> Item
                    </p>
                  </li>
                  <li class="flex items-center">
                    <a
                      href="dashboard-menu-fasilitas.php"
                      class="hover:scale-110 transition">
                      <div
                        class="flex gap-y-3 w-[128px] flex-col items-center p-4 rounded-[27px] [box-shadow:0_0_10px_0_rgba(44,41,40,.72)]">
                        <div class="aspect-square w-14">
                          <img
                            src="./assets/img/icons/emoji _cafeteria_.svg"
                            class="w-full h-full"
                            alt="" />
                        </div>
                        <p class="font-bold text-2xl text-center">Fasilitas</p>
                      </div>
                    </a>
                    <p
                      class="jumlah-coffee flex-1 text-center text-2xl font-medium">
                      <?= $jumlahFasilitas ?> Item
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="px-4 lg:px-0">
      <div class="container max-w-7xl">
        <article
          class="flex rounded-t-[27px] [box-shadow:0px_5px_14px_0px_rgba(0,0,0,.50)] px-[43px] py-[10px] bg-white">
          <ul
            class="flex justify-between py-2 w-full px-6 flex-col lg:flex-row items-center gap-y-5">
            <li>
              <a href="">
                <div class="flex gap-x-2 items-center">
                  <div class="w-7 aspect-square">
                    <img
                      src="./assets/img/icons/facebook-f.svg"
                      alt=""
                      class="w-full h-full" />
                  </div>
                  <span class="font-bold text-base">Blue Shelter co.</span>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="flex gap-x-2 items-center">
                  <div class="w-7 aspect-square">
                    <img
                      src="./assets/img/icons/linkedin-in.svg"
                      alt=""
                      class="w-full h-full" />
                  </div>
                  <span class="font-bold text-base">Blue Shelter co.</span>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="flex gap-x-2 items-center">
                  <div class="w-7 aspect-square">
                    <img
                      src="./assets/img/icons/instagram.svg"
                      alt=""
                      class="w-full h-full" />
                  </div>
                  <span class="font-bold text-base">blue.shltr</span>
                </div>
              </a>
            </li>
          </ul>
        </article>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/dashboard.js"></script>
  </body>
</html>
