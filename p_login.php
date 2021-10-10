<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
 include('admin-robotika19/koneksi.php');

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['pass']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from tb_admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:Admin-robotika19/index.php");
}else{
	header("location:login_aslab.php?pesan=gagal");
}
?>