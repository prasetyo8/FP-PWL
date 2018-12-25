


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
    
?>
<?php
if(isset($_SESSION["e"])) {
    ?>
    <script type="text/javascript">
    alert("anda telah login");
    window.location="index.php"
    </script>
    <?php
}
?>
<br>
<br>
<br>
<br>
  <div class="form">
    <form class="login-form" action="lupapassword2.php" method="post">
      <input type="text" placeholder="email" required="" id="username"  name="email" />
      <input type="submit" value="Kirim Kode Konfirmasi"/>
      
      <p class="message">Forgot your Password? <a href="lupapassword.php">Reset here</a></p>
      <p class="message">Not registered? <a href="Daftar.php">Create an account</a></p>
    </form>
   <br>
    
  </div>

  
</div>

<?php include "footer.php"; ?>







</body>
</html>