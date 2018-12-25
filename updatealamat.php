<?php
session_start();
include "config.php";
if(isset($_SESSION["e"])) {
    $provinsi=$_POST["provinsi"];
    $kabupaten=$_POST["kabupaten"];
    $em=$_SESSION["e"];
    $kecamatan=$_POST["kecamatan"];
    $desa=$_POST["desa"];
    $alamat=$_POST["alamat"];
    $kodepos=$_POST["kode_pos"];
    $update="update member set provinsi='$provinsi', kabupaten='$kabupaten', kecamatan='$kecamatan', desa='$desa', alamat='$alamat',kode_pos='$kodepos' where email = '$em'";
    if(mysqli_query($conn,$update)) {
    ?>
    <script type="text/javascript">
        alert("alamat berhasil diupdate");
        window.location="akun.php";
    </script>
        <?php
    }
    else {
        ?>
    <script type="text/javascript">
        alert("alamat gagal diupdate");
        window.location="akun.php";
    </script>
        <?php
        
    }
}
else {
    ?>
    <script type="text/javascript">
        alert("anda harus login dahulu");
        window.location="index.php";
    </script>
    <?php
}


?>