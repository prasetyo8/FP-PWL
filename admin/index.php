<!DOCTYPE html>
<html>
<head>
	<title>Local Croft</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<?php include "koneksi.php"; ?>
	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Admin Local Croft</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar content-box" style="display: block;">
					<ul class="nav">
						<!-- Main menu -->
						<li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i>Home</a></li>
						<li><a href="index.php?halaman=produk"><i class="glyphicon glyphicon-edit"></i>Produk</a></li>
						<li><a href="index.php?halaman=pembelian"><i class="glyphicon glyphicon-list-alt"></i> Pembelian </a></li>
						<li><a href="index.php?halaman=member"><i class="glyphicon glyphicon-user"></i> Member </a></li>
						<li><a href="index.php?halaman=logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-10">

				<div class="content-box-large">
				<?php 
                    if (isset($_GET['halaman'])) 
                    {
                        if ($_GET['halaman']=="produk") {
                            include 'produk.php';
                        }
                        elseif ($_GET['halaman']=="pembelian") {
                            include 'pembelian.php';
                        }
                        elseif ($_GET['halaman']=="member") {
                            include 'member.php';
                        }
                        elseif ($_GET['halaman']=="logout") {
                            include 'logout.php';
                        }
                        elseif ($_GET['halaman']=="tambahproduk") {
                            include 'tambahproduk.php';
                        }
                    }
                    else
                    {
                        include 'home.php';
                    }
                ?>
				</div>
			</div>

		</div>
	</div>


<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>