<?php

session_start();
include 'config.php';
include "randomstring.php";
$email=$_POST["email"];
$validation= "select nama_depan from member where email= '$email'";
$result=mysqli_query($conn,$validation);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
$count = mysqli_num_rows($result);

if($count==1) {
	$_SESSION["emailresetpass"]=$email;
   	$_SESSION["randstring"]=generateRandomString(5);
   	$to = $email;
	$subject = "Update Password";
	$txt = "Hii  ".$row["nama_depan"]."! , ini adalah kode rahasia untuk reset password anda ".$_SESSION["randstring"]." jika anda tidak melakukan permintaan ini maka abaikan pesan ini,mohon untuk tidak membalas pesan ini karena pesan ini terkirim otomatis ";
$headers = "From: mascahyo15@gmai.com" . "\r\n" .
"CC: mascahyo15@gmai.com";

mail($to,$subject,$txt,$headers);
	

   header("location: verifikasiresetpass.php");
}
else {
   ?>
   <script type="text/javascript">
      alert("email salah ");
      window.location="lupapassword.php";
   </script>
   <?php
}


?>