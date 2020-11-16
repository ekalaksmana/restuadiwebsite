<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'connection.php';


// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($host,"select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
//$cek = mysqli_num_rows($data);

// if($cek > 0){
	if(mysqli_num_rows($data)){
	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("Location: dashboard/index.php");
}else{
	header("Location: admin.php?pesan=gagal");
}
?>