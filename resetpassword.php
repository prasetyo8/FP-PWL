<?php
include "config.php";
session_start();
if(isset($_SESSION["emailresetpass"]) && isset($_POST["konfpassword"])) {

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $email=$_SESSION["emailresetpass"];
    $password=$_POST["konfpassword"];
    $sql = "UPDATE member SET password='$password' WHERE email='$email'";

    if (mysqli_query($conn, $sql)) {
       ?>
       <script type="text/javascript">
       alert("selamat password anda berhasil direset");
       window.location="Masuk.php";
       </script>
       <?php
        session_destroy();
    
        session_destroy();
    } else {
        ?>
         <script type="text/javascript">
       alert("maaf password anda gagal direset");
       window.location="lupapassword.php";
       </script>
        <?php
        //echo "<a href='menu.php'>menu</a> Error updating record: " . mysqli_error($conn);
        session_destroy();
    }


mysqli_close($conn);
}
else {
    ?>
    <script type="text/javascript">
        window.location= "index.php";
    </script>
    <?php
}
?>