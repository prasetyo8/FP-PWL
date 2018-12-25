<?php
include 'config.php';

session_start();
$email= $_POST["email"];
$password= $_POST["password"];
$validation= "select nama_depan from member where email= '$email' and password='$password'";
$result=mysqli_query($conn,$validation);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
$count = mysqli_num_rows($result);

if($count==1) {
   $_SESSION["u"]=$row["nama_depan"];
   $_SESSION["e"]=$email;	
   header("location: index.php");
}
else {
   ?>
   <script type="text/javascript">
      alert("error username dan password salah");
      window.location="Masuk.php";
   </script>
   <?php
}


?>