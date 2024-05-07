<?php
include 'koneksi.php';
if(!isset($_SESSION)) 
{   
  session_start(); 
} 
function uploadImage() {
  $nm_foto = $_FILES['foto']['name'];
    $ukuran_foto = $_FILES['foto']['size'];
    $error_foto = $_FILES['foto']['error'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $folder_foto = './assets/img/menu/';

    if($error_foto === 4) {
      return null;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$nm_foto);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)) {
      $_SESSION['msg_crud'] = 'Yang anda upload bukan gambar';
    return false;
  }

  if($ukuran_foto > 1000000) {
    $_SESSION['msg_crud'] = 'Yang anda upload bukan gambar';
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  move_uploaded_file($tmp_foto,$folder_foto.$namaFileBaru);
  
  return $namaFileBaru;
}

// Handle Add Menu
if(isset($_POST['add_submit_coffee']) || isset($_POST['add_submit_noncoffee']) || isset($_POST['add_submit_fasilitas']))
{
  $nm_menu = htmlspecialchars($_POST['nm_menu']);
  $harga = htmlspecialchars($_POST['harga']);
  $kategori = htmlspecialchars($_POST['kategori']);
  $foto = uploadImage();
  $time = time();

  if(!$nm_menu || !$harga || !$kategori) {
    $_SESSION['msg_crud'] = 'Menu gagal ditambahkan';
  } else {
    $sqlInsertMenu = "INSERT INTO menu VALUES (null,'$nm_menu','$kategori','$harga','$foto','$time','$time')";
    $insertMenu = mysqli_query($db,$sqlInsertMenu);
    if($insertMenu) {
      $_SESSION['msg_crud'] = 'Menu berhasil ditambahkan';
    } else {
      $_SESSION['msg_crud'] = 'Menu gagal ditambahkan';
    }
  }
  if(isset($_POST['add_submit_coffee'])) {
    header('Location:dashboard-menu-coffee.php');
  } else if(isset($_POST['add_submit_noncoffee'])) {
    header('Location:dashboard-menu-noncoffee.php');
  } else if(isset($_POST['add_submit_fasilitas'])) {
    header('Location:dashboard-menu-fasilitas.php');
  }
}

// Handle Update Menu
if(isset($_POST['update_submit_coffee']) || isset($_POST['update_submit_noncoffee']) || isset($_POST['update_submit_fasilitas']))
{
  $menu_id = $_POST['menu_id'];
  $nm_menu = htmlspecialchars($_POST['nm_menu']);
  $harga = htmlspecialchars($_POST['harga']);
  $kategori = htmlspecialchars($_POST['kategori']);
  $foto_lama = $_POST['foto_menu'];
  $foto = uploadImage();
  $time = time();
  if(!$nm_menu || !$harga || !$kategori || !$menu_id) {
    $_SESSION['msg_crud'] = 'Menu gagal ditambahkan';
  } else {
    $sqlInsertMenu = null;
    if($foto) {
      unlink($foto_lama);
      $sqlInsertMenu = "UPDATE menu SET nm_menu='$nm_menu', harga='$harga', kategori_id='$kategori', foto='$foto', updated_at='$time' WHERE id='$menu_id'";
    } else {
      $sqlInsertMenu = "UPDATE menu SET nm_menu='$nm_menu', harga='$harga', kategori_id='$kategori', updated_at='$time' WHERE id='$menu_id'";
    }
    $insertMenu = mysqli_query($db,$sqlInsertMenu);
    if($insertMenu) {
      $_SESSION['msg_crud'] = 'Menu berhasil diubah';
    } else {
      $_SESSION['msg_crud'] = 'Menu gagal diubah';
    }
  }
  if(isset($_POST['update_submit_coffee'])) {
    header('Location:dashboard-menu-coffee.php');
  } else if(isset($_POST['update_submit_noncoffee'])) {
    header('Location:dashboard-menu-noncoffee.php');
  } else if(isset($_POST['update_submit_fasilitas'])) {
    header('Location:dashboard-menu-fasilitas.php');
  }
}

if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = mysqli_query($db,"select email,password from users where email='$email'");
    $hasil = mysqli_fetch_assoc($user);
    if($hasil){
      if(password_verify($password,$hasil['password'])){
        $_SESSION['email']=$hasil['email'];
        $_SESSION['password']=$hasil['password'];
        header('Location:dashboard.php');
        exit();
      } else {
        $_SESSION['error_msg'] = 'Password salah';
      }
    } else {
      $_SESSION['error_msg'] = 'Email tidak ditemukan';
    }
    header('location:login.php');
  }