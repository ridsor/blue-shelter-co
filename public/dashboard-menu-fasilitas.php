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

$sql = "SELECT menu.id, menu.harga, menu.nm_menu, menu.foto, menu.kategori_id FROM menu INNER JOIN kategori ON menu.kategori_id=kategori.id WHERE kategori.slug='fasilitas'";
$query = mysqli_query($db,$sql);
$sqlKategori = "SELECT kategori.id, kategori.nm_kategori, kategori.slug FROM kategori";
$queryKategori = mysqli_query($db,$sqlKategori);
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
    <title>Dashboard Menu Fasilitas</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
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
          <a id="back" href="dashboard.php">
            <div class="user-img w-10 aspect-square">
              <img
                src="./assets/img/icons/icon _chevron back circle outline_.svg"
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
            class="rounded-[27px] [box-shadow:0_0_22px_0_rgba(0,0,0,.80)] p-10 mt-32 mb-20 bg-white relative overflow-auto pb-36">
            <button class="absolute bottom-10 right-10 z-50" id="btn-add">
              <img
                src="./assets/img/icons/icon _add circle_.svg"
                alt=""
                class="w-16 aspect-square" />
            </button>
            <div
              class="fixed top-0 bottom-0 left-0 right-0 bg-[rgba(0,0,0,.7)] z-50"
              id="modal">
              <div class="overflow-auto md:px-4 w-full h-full">
                <div class="w-full max-w-lg h-full mx-auto flex items-center">
                  <div
                    class="w-full bg-[linear-gradient(to_top_right,rgba(235,161,73,1),rgba(255,116,29,1))] rounded-sm">
                    <div class="p-7">
                      <form action="crud.php" id="form-menu" enctype="multipart/form-data" method="post">
                        <input type="text" hidden name="menu_id" id="menu_id">
                        <input type="text" hidden name="foto_menu" id="foto_menu">
                        <div class="form-input w-full relative mb-6">
                          <input
                            type="text"
                            name="nm_menu"
                            id="nm_menu"
                            required
                            autocomplete='off'
                            class="w-full px-8 py-3 outline-none peer rounded-sm" />
                          <label
                            for="nm_menu"
                            class="absolute top-3 left-8 text-gray-500 [letter-spacing:.1rem] pointer-events-none peer-focus:-top-2.5 peer-focus:left-4 peer-focus:text-[12px] transition-all peer-focus:bg-white peer-focus:px-4 peer-focus:rounded-sm"
                            >Nama Menu</label
                          >
                        </div>
                        <div class="form-input w-full relative mb-6">
                          <input
                            type="text"
                            name="harga"
                            id="harga"
                            required
                            autocomplete='off'
                            class="w-full px-8 py-3 outline-none peer rounded-sm" />
                          <label
                            for="harga"
                            class="absolute top-3 left-8 text-gray-500 [letter-spacing:.1rem] pointer-events-none peer-focus:-top-2.5 peer-focus:left-4 peer-focus:text-[12px] transition-all peer-focus:bg-white peer-focus:px-4 peer-focus:rounded-sm"
                            >Harga Menu</label
                          >
                        </div>
                        <div class="form-input w-full relative mb-6">
                          <select
                            name="kategori"
                            id="kategori"
                            required
                            class="w-full px-8 py-3 outline-none peer rounded-sm text-gray-500">
                            <?php while($row = mysqli_fetch_assoc($queryKategori)): ?>
                                <?php if($row['slug'] == 'fasilitas'): ?>
                                <option value="<?= $row['id'] ?>" data-kategori="fasilitas">
                                  <?= $row['nm_kategori'] ?>
                                </option>
                                <?php else: ?>
                                  <option value="<?= $row['id'] ?>">
                                    <?= $row['nm_kategori'] ?>
                                  </option>
                                <?php endif; ?>
                            <?php endwhile; ?>
                          </select>
                        </div>
                        <div class="form-input mb-5">
                          <input
                            type="file"
                            name="foto"
                            id="foto"
                            accept="image/png, image/jpg, image/jpeg"
                            class="hidden" />
                          <label for="foto" class="block hover:ring hover:ring-slate-700" tabindex="0">
                            <div
                              class="flex justify-between items-center bg-white rounded-sm py-2">
                              <p
                                class="text-gray-500 [letter-spacing:.1rem] px-8">
                                Masukan Foto Menu
                              </p>
                              <div class="w-7 aspect-square mx-6">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="36"
                                  height="29"
                                  viewBox="0 0 36 29"
                                  fill="none">
                                  <path
                                    d="M0 17.6787C0 20.2744 1.32306 21.5723 3.95659 21.5723H4.66226V11.3154C4.66226 7.92579 6.64052 6.02312 9.90411 6.02312H12.4998C13.5331 6.02312 13.9111 5.78372 14.4656 5.12846L15.2216 4.22119C15.8768 3.42739 16.7462 2.98633 18.1828 2.98633H24.0293C25.365 2.98633 26.0582 3.33919 27.0159 4.22119V3.55339C27.0159 1.31046 25.6927 0 23.0716 0H3.95659C1.32306 0 0 1.31046 0 3.90619L0 17.6787ZM10.3325 28.7421H32.0434C34.6643 28.7421 36 27.4316 36 24.8359V11.643C36 9.04725 34.6643 7.73679 32.0434 7.73679H29.0948C28.1121 7.73679 27.8097 7.54779 27.2427 6.90519L26.2344 5.78372C25.6046 5.09066 24.962 4.71266 23.6639 4.71266H18.6364C17.3385 4.71266 16.6958 5.09066 16.0658 5.78372L15.0452 6.90519C14.4907 7.53519 14.1757 7.73679 13.1928 7.73679H10.3325C7.71159 7.73679 6.37592 9.04725 6.37592 11.643V24.8359C6.37592 27.4316 7.71159 28.7421 10.3325 28.7421ZM21.1943 24.6973C17.3763 24.6973 14.3143 21.6479 14.3143 17.8047C14.3143 13.9741 17.3763 10.9248 21.1943 10.9248C25.0123 10.9248 28.0615 13.9741 28.0615 17.8047C28.0615 21.6479 24.9996 24.6973 21.1943 24.6973ZM30.2416 14.7302C29.3846 14.7302 28.6791 14.0371 28.6791 13.1803C28.6791 12.3108 29.3846 11.6178 30.2416 11.6178C31.0984 11.6178 31.8039 12.3108 31.8039 13.1803C31.8039 14.0371 31.0984 14.7302 30.2416 14.7302ZM21.1943 22.782C23.9413 22.782 26.1588 20.5768 26.1588 17.8047C26.1588 15.0452 23.9413 12.84 21.1943 12.84C18.4473 12.84 16.217 15.0452 16.217 17.8047C16.217 20.5768 18.46 22.782 21.1943 22.782Z"
                                    fill="black"
                                    fill-opacity="0.52" />
                                </svg>
                              </div>
                            </div>
                          </label>
                        </div>
                        <div class="form-input">
                          <div class="px-2 flex gap-x-4">
                            <button type="submit" name="submit_menu_fasilitas" id="submit_fasilitas" class="submit_menu">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="27"
                                height="26"
                                viewBox="0 0 27 26"
                                fill="none">
                                <path
                                  d="M22.9228 6.63088C22.8026 6.48953 22.3936 6.54573 22.1942 6.59529C22.0302 6.65311 21.882 6.74685 21.7615 6.86918C21.7316 6.89486 21.7019 6.92043 21.6724 6.94475C17.3761 10.4692 13.2087 13.9473 9.45192 17.7476C9.37654 17.8238 9.29708 17.8955 9.18705 17.9954C9.12982 18.0472 9.06468 18.1059 8.98802 18.1762C8.51728 17.6758 7.44095 16.4947 6.57331 15.5429C6.11769 15.0432 5.72021 14.6072 5.49956 14.3675C5.37748 14.2297 5.26308 14.0857 5.15687 13.936C5.08487 13.8384 5.01031 13.7373 4.93225 13.6414C4.78929 13.4656 4.52292 13.139 4.14639 13.3904C3.82731 13.6044 3.94864 13.9084 4.08893 14.1507C4.10532 14.1786 4.12138 14.207 4.13732 14.2354C4.19422 14.3433 4.26037 14.4465 4.33506 14.5437C5.0024 15.3605 7.11025 17.8676 7.80714 18.6102C8.36756 19.207 8.72887 19.4453 9.09538 19.4585H9.12552C9.54428 19.4585 9.97163 19.1447 10.5214 18.6408C13.4146 15.9872 16.0277 13.6179 18.5099 11.3984C19.3021 10.6899 20.1308 9.99379 20.9324 9.32043C21.4278 8.90439 21.9397 8.47416 22.4382 8.0453C22.6809 7.83672 22.9067 7.6286 23.0048 7.37981C23.0878 7.16942 23.0704 6.80421 22.9228 6.63088Z"
                                  fill="black" />
                                <path
                                  d="M20.7067 26H19.5485C19.2716 25.9357 18.9903 25.8908 18.7068 25.8655C16.1989 25.8057 13.6908 25.7387 11.1824 25.7155C9.29336 25.698 7.40048 25.6779 5.51525 25.7717C2.00701 25.947 -0.0828212 23.2519 0.170759 20.8969C0.242297 20.2331 0.178903 19.555 0.169481 18.8835C0.112599 14.8298 0.0432661 10.7763 0.00313544 6.72236C-0.00570497 5.82802 -0.00640401 4.91712 0.150397 4.04093C0.521344 1.96866 2.45183 0.497026 4.83443 0.43317C8.59567 0.331809 12.3582 0.27639 16.1198 0.187192C17.7395 0.148788 19.36 0.102847 20.9771 0.0108342C23.5499 -0.135575 26.1245 1.19968 26.4959 4.15208C26.7563 6.22018 26.9056 8.30977 26.951 10.393C27.0276 13.9035 26.9941 17.4167 26.984 20.9286C26.9777 23.0414 25.1436 25.2109 22.9862 25.6645C22.2367 25.8225 21.4671 25.8909 20.7067 26ZM12.8863 24.5247C13.8305 24.5665 14.7742 24.6228 15.7188 24.6471C17.8148 24.7006 19.9075 24.9918 22.0079 24.6367C24.0953 24.2836 25.7101 22.613 25.7026 20.7745C25.6906 17.8792 25.69 14.9839 25.7006 12.0886C25.7077 9.6251 25.729 7.17082 25.2353 4.72725C24.7787 2.4677 23.3631 1.38167 20.9788 1.36748C17.3905 1.34619 13.8017 1.39642 10.2137 1.47233C8.48051 1.50904 6.74604 1.63485 5.01925 1.79274C3.75392 1.90852 2.59536 2.31171 1.95337 3.50698C1.4834 4.40778 1.24713 5.40584 1.26499 6.41489C1.26743 11.0473 1.31908 15.6799 1.28477 20.3126C1.26523 22.9417 2.82695 24.5425 5.53491 24.527C7.98545 24.5127 10.4359 24.5238 12.8863 24.5247Z"
                                  fill="black" />
                              </svg>
                            </button>
                            <button type="button" id="close-modal">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="28"
                                height="29"
                                viewBox="0 0 28 29"
                                fill="none">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M14 27.55C20.9588 27.55 26.6 21.7073 26.6 14.5C26.6 7.2927 20.9588 1.45 14 1.45C7.04123 1.45 1.4 7.2927 1.4 14.5C1.4 21.7073 7.04123 27.55 14 27.55ZM14 29C21.732 29 28 22.5081 28 14.5C28 6.49187 21.732 0 14 0C6.26801 0 0 6.49187 0 14.5C0 22.5081 6.26801 29 14 29Z"
                                  fill="black" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M8.55565 20.1392C8.28223 19.8561 8.28223 19.397 8.55565 19.1139L18.4551 8.8608C18.7285 8.57769 19.1717 8.57769 19.4451 8.8608C19.7184 9.14391 19.7184 9.60298 19.4451 9.8861L9.54559 20.1392C9.27217 20.4223 8.829 20.4223 8.55565 20.1392Z"
                                  fill="black" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M8.5556 8.8608C8.82902 8.57769 9.27219 8.57769 9.54561 8.8608L19.4451 19.1139C19.7184 19.397 19.7184 19.8561 19.4451 20.1392C19.1717 20.4223 18.7285 20.4223 18.4551 20.1392L8.5556 9.8861C8.28225 9.60298 8.28225 9.14391 8.5556 8.8608Z"
                                  fill="black" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              id='list-menu'
              class="fasilitas row grid gap-10 [grid-template-columns:repeat(auto-fill,minmax(100px,1fr))] sm:[grid-template-columns:repeat(auto-fill,minmax(150px,1fr))]">
              <?php while($row = mysqli_fetch_assoc($query)): ?>
              <div class="relative h-[180px]">
                <div class="title text-xl font-bold text-center mt-3 mb-1">
                  <?= $row['nm_menu'] ?>
                </div>
                <div class="price text-lg font-light text-center">Rp<?= $row['harga'] ?></div>
                <button
                    class="bg-[#fff5d1] absolute bottom-4 left-4 w-9 rounded-md">
                    <img
                      src="./assets/img/icons/icon _pencil edit thin_.svg"
                      alt=""
                      class="w-full [text-shadow:0_0_19px_0_rgba(0,0,0,.40)] p-1.5"
                      data-id='<?= json_encode($row) ?>'
                      id="btn-edit" />
                  </button>
                  <button
                    class="bg-[#fff5d1] absolute bottom-4 right-4 rounded-md w-8">
                    <img
                      src="./assets/img/icons/icon _Trash_.svg"
                      alt=""
                      class="w-full [text-shadow:0_0_19px_0_rgba(0,0,0,.40)] p-1.5"
                      data-id="<?= $row['id'] ?>"
                      id="btn-delete" />
                  </button>
              </div>
              <?php endwhile; ?>
              <div
                class="bg-[rgba(217,217,217,0.66)] border border-black rounded-[27px] [box-shadow:0_0_19px_0_rgba(0,0,0,0.40)] h-[180px] flex justify-center items-center">
                <span
                  class="text-center text-[11px] [letter-spacing:0.7px] px-4"
                  >Tambah menu dengan menggunakan + button</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/dashboard.js"></script>
    <script>
      <?php
      if(isset($_SESSION['msg_crud'])) {
        $msg = $_SESSION["msg_crud"];
        if($msg) {
          echo "Swal.fire('$msg')";
          $_SESSION["msg_crud"] = '';
        }
      }
      ?>
    </script>
  </body>
</html>
