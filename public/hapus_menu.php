<?php
if(!isset($_SESSION)) 
{   
  session_start(); 
} 
If(!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
header('location:index.php');
exit();
}
if(!isset($_GET['id']) && !isset($_GET['kategori'])) header('Location:dashboard.php');
require 'koneksi.php';

$kategori = $_GET['kategori'];
$id = $_GET['id'];

$sql = "DELETE FROM menu WHERE id='$id'";
$query = mysqli_query($db,$sql);
if($query) {
  $_SESSION['msg_crud'] = 'Menu berhasil dihapus';
} else {
  $_SESSION['msg_crud'] = 'Menu gagal dihapus';
}

switch($kategori) {
  case 'coffee':
  header('Location:dashboard-menu-coffee.php');
    break;
  case 'noncoffee':
    header('Location:dashboard-menu-noncoffee.php');
    break;
  case 'fasilitas':
    header('Location:dashboard-menu-fasilitas.php');
    break;
}