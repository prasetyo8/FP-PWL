<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <link rel="stylesheet" type="text/css" href="asset/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/bootstrap.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav header_paddingmenuleft" id>
        <li class="" id="menu"><a href="index.php">Beranda</a></li>
        
        <?php
            include "config.php";
            session_start();
            if(isset($_SESSION["e"])) {
        ?>
                <li class="" id="menu"><a href="akun.php"><?php echo $_SESSION["u"]; ?></a></li>
                <li class="" id="menu"><a href="logout.php">Log Out</a></li>
        <?php    
            }else {
        ?>
                <li class="" id="menu"><a href="Daftar.php">Daftar</a></li>
    	        <li class="" id="menu"><a href="Masuk.php">Login</a></li>
    	<?php
            }
    	?>
      <li class="" id="menu"><a href="contact.php">Contact</a></li>


    </ul>

    <ul class="nav navbar-nav navbar-right header_paddingmenuright">
       <li class="dropdown dropdown-small ">
            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Bahasa :</span><span class="value">Indonesia </span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Indonesia</a></li>
                
            </ul>
        </li>
    </ul>
   
  </div>
</nav>