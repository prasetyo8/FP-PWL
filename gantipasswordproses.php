<?php
include "config.php";
session_start();

if(isset($_SESSION["e"])) {
    $email=$_SESSION["e"];
    $old=$_POST["oldpass"];
    //$newpass=$_POST["confpass"];
    $newpass=$_POST["newpass"];
    $confpass=$_POST["confpass"];
    // fungsi cek password baru dengan konfirmasi password
    if ($newpass !== $confpass){
        ?><script>
            alert('Konfirmasi password tidak sesuai');
            window.location="gantipassword.php"
        </script>;
        <?php
        return false;
    }
    $oldquery="select password from member where email= '$email'";
    $newquery="update member set password='$newpass' where email= '$email'";
    $oldquery2= mysqli_query($conn,$oldquery);
    $rowold= mysqli_fetch_array($oldquery2,MYSQLI_ASSOC);
    if($_POST["oldpass"]==$rowold["password"]) {
        if(mysqli_query($conn,$newquery)) {
            ?>
            <script type="text/javascript">
                alert("selamat password anda berhasil diganti");
                window.location="akun.php";
            </script>
            <?php
        }
        else {
            //echo "maaf password anda gagal diganti <a href='gantipassword.php'>menu</a>";
              ?>
            <script type="text/javascript">
                alert("maaf password anda gagal diganti diganti");
                window.location="akun.php";
            </script>
            <?php
            
        }
    } else {
        //echo "error password lama anda salah <a href='gantipassword.php'>menu</a>";
          ?>
            <script type="text/javascript">
                alert("error password lama anda salah");
                window.location="akun.php";
            </script>
            <?php
    }
    
    ?>
<?php    
} else {
?>
    <script type="text/javascript">
        alert("maaf anda harus login dahulu");
        window.location="index.php";
    </script>
<?php
}
?>