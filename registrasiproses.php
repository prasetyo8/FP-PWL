<?php
include 'config.php';
session_start();
 $depan=$_POST["depan"];
 $belakang=$_POST["belakang"];
 $bdaytime=$_POST["bdaytime"];
 $jk=$_POST["jk"];
 $alamat=$_POST["alamat"];
 $email=$_POST["email"];
 $telepon=$_POST["telepon"];
 $password2= $_POST["password2"];
 $validation= "select nama_depan from member where email= '$email'";
$result=mysqli_query($conn,$validation);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
    
$count = mysqli_num_rows($result);
$registrasi="INSERT INTO `member` ( `nama_depan`, `nama_belakang`, `email`, `password`, `alamat`, `telp`, `jenis_kelamin`, `tgl_lahir`) VALUES ( '$depan', '$belakang', '$email', '$password2', '$alamat', '$telepon', '$jk', '$bdaytime')";
if($count==0) {
$result=mysqli_query($conn,$registrasi);


// if (!mkdir("asset/memberpicture/$email", 0777, true)) {
//     die('Failed to create folders...');

if($result) {
$_SESSION["u"]=$depan;
$_SESSION["e"]=$email;
header("location:index.php");
    
}

else {
    ?>
	<script type="text/javascript">
		alert("terjadi kesalahan dalam database")
		window.location="Daftar.php";
	</script>


	
<?php

}
} else {
?>
	<script type="text/javascript">
		alert("anda sudah teregristrasi")
		window.location="Daftar.php";
	</script>
<?php
}

?>