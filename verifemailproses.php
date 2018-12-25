<?php
include "config.php";
session_start();
if(isset($_SESSION["e"])) {
    if($_POST["verifemail"]==$_SESSION["randstring"]) {
        $email=$_SESSION["verifemail"];
        $sql="update member set status_email=1 where email='$email'";
        if(mysqli_query($conn,$sql)) {
           // echo "selamat email anda telah terverifikasi <a href='editprofil.php'>edit profil</a>";
            ?>
            <script type="text/javascript">
                alert("selamat email anda telah terverifikasi");
                window.location="akun.php";
            </script>
        <?php
        }
        else {
            //echo "tejadi keselahan pada database, email anda belum terverifikasi <a href='editprofil.php'>edit profil</a>";
            ?>
            <script type="text/javascript">
                alert("terjadi keselahan pada database, email anda belum terverifikasi");
                window.location="akun.php";
            </script>
        <?php
        }
    } else {
        //echo "maaf kode verifikasi anda salah <a href='editprofil.php'>edit profil</a>";
        ?>
            <script type="text/javascript">
                alert("maaf kode verifikasi anda salah");
                window.location="akun.php";
            </script>
        <?php
    }
    ?>
    
    
<?php    
}else {
    ?>
    <alert>
        <script type="text/javascript">
            alert("maaf anda harus login dahulu");
            window.location="index.php";
        </script>
    </alert>
    <?php
}
?>