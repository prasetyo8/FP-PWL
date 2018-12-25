


<!DOCTYPE html>
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
   <script src="asset/js/jquery.min.js"></script>
   <script src="asset/js/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script type="text/javascript">
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  </script>
  <link rel="stylesheet" type="text/css" href="asset/login.css">
<script src="facebook.js"></script>
    <script src="google.js"></script>
     <script src="https://apis.google.com/js/platform.js" async defer></script>
     <meta name="google-signin-client_id" content="461756483368-h9g4jv5n75e2ra0kugm46recdaicblou.apps.googleusercontent.com">
  </head>
  <body ng-app="">
  <?php  
    include "header.php";
    include "randomstring.php";
    
?>
<?php
if(!isset($_SESSION["e"])) {
    ?>
    <script type="text/javascript">
    alert("anda harus login");
    window.location="index.php"
    </script>
    <?php
}
else {
    if($_POST["submit"]=="ganti") {
        $email=$_SESSION["e"];
        $telp=$_POST["telp"];
        $validation= "select telp from member where email= '$email'";
        $result=mysqli_query($conn,$validation);
    
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        if($telp == $row["telp"]) {
        $update="update member set telp='$telp' where email='$email'";
        }
        else {
        $update="update member set telp='$telp', status_telp=0 where email='$email'";
        }
        if(mysqli_query($conn,$update)) {
            ?>
            <script type="text/javascript">
                alert("no telp berhasil diganti");
                window.location="akun.php";
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("no telp gagal diganti");
                window.location="akun.php";
            </script>
            <?php
        }
    } if($_POST["submit"]=="verifikasi") {
    include "client-php-master/autoload.php";
   	$e=$_SESSION["e"];
    $validation= "select telp from member where email= '$e'";
    $result=mysqli_query($conn,$validation);
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $clients = new SMSGatewayMe\Client\ClientProvider("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0Mzc0NDM4MSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY0OTc1LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.rDJpissI9gnij24w8DvJJPzeyYrKB3PN3H0FnXH2u5A");
    $telp=$row["telp"];
    echo "no telp anda adalah ".$telp;
    $_SESSION['randstring']=generateRandomString(5);
    $sms="hai ini adalah password rahasia anda ".$_SESSION['randstring']." mohon jangan memberitahukan kepada siapapun demi keamanan anda ";
    $sendMessageRequest = new SMSGatewayMe\Client\Model\SendMessageRequest([
        'phoneNumber' => $telp, 'message' => $sms, 'deviceId' => 106251
    ]);

    $sentMessages = $clients->getMessageClient()->sendMessages([$sendMessageRequest]);
?>
<br>
<br>
<br>
<br>
  <div class="form">
    <form class="login-form" action="veriftelpproses.php" method="post">
      <input type="text" placeholder="Kode Verifikasi anda" required="" id="username"  name="veriftelp" />
      <input type="submit" value="Kirim Kode"/>
      
    </form>
   <br>
   <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
  </fb:login-button>
   <br>
   <br>
  <center>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    
  </center>
    
  </div>

  
</div>

<?php include "footer.php"; ?>







</body>
</html>
<?php
    }
}
?>