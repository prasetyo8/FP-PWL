<?php
session_start();
include "config.php";
$depan=$_POST["depan"];
$belakang=$_POST["belakang"];
$jk=$_POST["jk"];
$tl=$_POST["tl"];
$email=$_SESSION["e"];
$update="UPDATE `member` SET `nama_depan` = '$depan',`nama_belakang` = '$belakang',`jenis_kelamin` = '$jk',`tgl_lahir` = '$tl' WHERE `member`.`email` = '$email';";
if(mysqli_query($conn,$update)) {
    ?>
        <script type="text/javascript">
            alert("data berhasil disimpan");
            window.location="akun.php"
        </script>
    <?php
}else{
    ?>
        <script type="text/javascript">
           alert("data gagal disimpan");
            window.location="akun.php"
        </script>
    <?php
    echo $email;
}
?>