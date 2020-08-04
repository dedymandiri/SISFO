<?php 
include 'admin/login/koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	header("location:admin/dashboard.blade.php");	
}else{
    header("location:admin/login/login.blade.php");
}
 
?>